<!doctype html>

    <title>Laravel From Scratch Blog</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.12.2/cdn.js" integrity="sha512-O+ameuymZr7auqNl/HvUtOOzIMFEB9wwMLAYe3k/clA44a2oGtV+6Xh7+lFiztz0gBN+t27z23xxQQLG67vv9w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>


    <body style="font-family: Open Sans, sans-serif">
        <section class="px-6 py-8">
            <nav class="md:flex md:justify-between md:items-center">
                <div>
                    <a href="/">
                        <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                    </a>
                </div>

                <div class="mt-8 md:mt-0 flex items-center space-x-8">
                    @auth
                        <x-dropdown >
                            <x-slot name="trigger">
                                <button class="text-md font-bold uppercase  py-1">Welcome, {{ auth()->user()->name }}!</button>
                            </x-slot>

                            <x-dropdown-link href="/admin/dashboard">Dashboard</x-dropdown-link>
                            <x-dropdown-link href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-link>
                            <x-dropdown-link
                                    x-data="{ logout: function() { document.querySelector('#logout-form').submit(); } }"
                                    @click.prevent="logout()"
                                    href="#"
                                    >
                                    Log out
                                </x-dropdown-link>
                            <form
                                id="logout-form"
                                method="POST"
                                action="/logout"
                                class="hidden">
                                @csrf
                            </form>
                        </x-dropdown>

                    @else
                        <a href="/register" class="text-md font-bold uppercase text-blue-500 px-2 py-0.5 rounded-md">Register</a>
                        <a href="/login" class="text-md font-bold uppercase text-blue-500 px-2 py-0.5 rounded-md">Login</a>
                    @endauth
                    <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                        Subscribe for Updates
                    </a>
                </div>
            </nav>

            {{ $slot }}

            <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
                <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
                <h5 class="text-3xl">Stay in touch with the latest posts</h5>
                <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

                <div class="mt-10">
                    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                        <form method="POST" action="/newsletter" class="lg:flex text-sm">
                            @csrf
                            <div class="lg:py-3 lg:px-5 flex items-center">
                                <label for="email" class="hidden lg:inline-block">
                                    <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                                </label>

                                <div>
                                      <input name="email" id="email" type="text" placeholder="Your email address"
                                    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                                    @error('email')
                                        <span class="text-xs text-red-500">{{ $message }}</span>
                                    @enderror
                                </div>
                                </div>
                            </div>

                            <button type="submit"
                                    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                            >
                                Subscribe
                            </button>
                        </form>
                </div>
            </footer>
        </section>
        <x-flash />
    </body>
