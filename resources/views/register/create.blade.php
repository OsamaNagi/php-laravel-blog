<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-4 rounded-xl">
            <h1 class="text-center font-bold text-xl mb-10">Register!</h1>
            <form action="/register" method="post">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 font-bold uppercase text-xs text-gray-700">
                        name
                    </label>
                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full rounded-md"
                        value="{{old('name')}}"  required>

                    @error('name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="username" class="block mb-2 font-bold uppercase text-xs text-gray-700">
                        Username
                    </label>
                    <input type="text" name="username" id="username" class="border border-gray-400 p-2 w-full rounded-md"
                      value="{{old('username')}}" required>

                    @error('username')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 font-bold uppercase text-xs text-gray-700">
                        email
                    </label>
                    <input type="email" name="email" id="email" class="border border-gray-400 p-2 w-full rounded-md"
                       value="{{old('email')}}"  required>

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 font-bold uppercase text-xs text-gray-700">
                        password
                    </label>
                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full rounded-md"
                      value="{{old('password')}}"   required>

                    @error('password')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        type="submit"
                    >Register</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
