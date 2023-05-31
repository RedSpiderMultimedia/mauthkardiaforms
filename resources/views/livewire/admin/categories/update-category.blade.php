<div class="w-3/4 mx-auto bg-gray-300 p-6 rounded-md shadow-lg">
    <form wire:submit.prevent="update" class="mb-6 w-1/2 mx-auto">
        <label for="name" class="">Add Category Name</label>
        <br>
        <input type="text" wire:model="name" maxlength="30" class="border border-gray-400 py-1 rounded-md">
        @error('name')
        <div class="text-red-400">{{ $message }} </div>
        @enderror
        <button class="bg-gray-300 rounded-lg px-3 py-1 border-2 border-gray-600">Save</button>
    </form>

    <div>


    </div>
</div>
