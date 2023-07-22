@props(['heading'])
<section class="px-6 py-8 max-w-4xl mx-auto mt-10 ">
    <h1 class="text-2xl font-bold mb-4  border-b-2 pb-3">
        {{ $heading }}
    </h1>

    <div class="flex space-x-4">
        <aside class="w-48 ">
            <h4 class="font-bold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/dashboard" class="{{request()->is('admin/dashboard') ? 'text-blue-500' : ''}}" >dashboard</a>
                </li>
                <li>
                    <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500' : ''}}" >New Post</a>
                </li>
            </ul>
        </aside>

        <main class="flex-1 border border-2 p-4 rounded-md">
            {{ $slot }}
        </main>
    </div>

</section>
