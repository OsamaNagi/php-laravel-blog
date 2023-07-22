<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;

class Newsletter {
    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscribers');

        // ddd($this->client()->lists);
        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }

    protected function client() {
        $mailchimp = new ApiClient();

        return $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.Key'),
            'server' => 'us21',
        ]);
    }

}
