@props(['comment'])
<article class="flex bg-gray-100 p-6 rounded-xl border border-gray-300 space-x-4">
                            <div class="flex-shrink-0">
                                <img
                                    class="rounded-md"
                                    src="https://i.pravatar.cc/80?u={{$comment->user_id}}"
                                    alt=""
                                    width="80"
                                    height="80">
                            </div>
                            <div>
                                <header class="mb-4">
                                    <h3 class="font-bold">
                                        <a href="/?author={{ $comment->author->username }}">
                                            {{$comment->author->name}}
                                        </a>
                                        <p class="text-xs">
                                            Published <time>
                                                {{$comment->created_at->diffForHumans()}}
                                            </time>
                                        </p>
                                    </h3>
                                </header>
                                <p>
                                    {!!$comment->body!!}
                                </p>
                            </div>
                        </article>
