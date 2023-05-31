@push('scripts')

@endpush
<div class="w-3/4 mx-auto mb-10 bg-gray-300 p-6 rounded">

    <form wire:submit.prevent="save">

            <div>
                <label for="title">Title</label><br>
                <input type="text" wire:model="title" class="w-1/2">
                @error('title')
                {{ $message }}
                @enderror
            </div>
            <div class="my-6">
            <select wire:model="category_id">
                <option value="">Select A Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            {{ $message }}
                @enderror
            </div>

            <div>
                <input type="file" wire:model="image_path">
                @error('image_path') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore class="my-6">
                <label for="body">Article</label>
                <textarea data-body="@this" id="body" name="body" wire:model="body" class="w-full">

                </textarea>
            </div>
                @error('body')
                {{ $message }}
                @enderror

            <div class="my-3 clear">
                <label for="is_published">Published?</label> <br>
                <input type="checkbox" wire:model="is_published">
            </div>

            <button id="submit" type="submit" class="px-3 py-1.5 bg-gray-300 rounded-lg font-black text-white bg-green-800">Save Article</button>
            </div>
        </form>
    </div>


