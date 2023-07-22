<x-layout>
    <x-setting heading="Publish new post">
         <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title" />
                <x-form.input name="slug"  />
                <x-form.input name="thumbnail" type="file"  />
                <x-form.input name="excerpt"  />
                <x-form.input name="body"  />
                 <div class="mb-6">
                    <label for="category_id" class="block mb-2 font-bold uppercase text-xs text-gray-700">
                        category
                    </label>
                    <select name="category_id" id="category_id">
                        @foreach(\App\Models\Category::all(); as $category)
                            <option value="{{ $category->id }}"
                                    {{old('category_id') == $category->id ? 'selected' : '' }}
                                >{{ ucwords($category->name) }}</option>
                        @endforeach
                    </select>

                    @error('category_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <x-submitbtn>publish</x-submitbtn>
            </form>
    </x-setting>
</x-layout>
