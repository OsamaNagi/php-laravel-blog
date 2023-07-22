 @props(['name', 'type' => 'text'])
 <div class="mb-6">
    <label for="{{$name}}" class="block mb-2 font-bold uppercase text-xs text-gray-700">
        {{ucwords($name)}}
    </label>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="border border-gray-400 p-2 w-full rounded-md"
        value="{{ old($name) }}"  required>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
