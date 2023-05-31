<div class="w-3/4 mx-auto bg-gray-300 p-6 rounded-md shadow-lg">
    <form wire:submit.prevent="save" class="mb-6 w-1/2 mx-auto">
        <label for="name" class="">Add Category Name</label>
        <br>
        <input type="text" wire:model="name" maxlength="30" class="border border-gray-400 py-1 rounded-md">
        @error('name')
        <div class="text-red-400">{{ $message }} </div>
        @enderror
        <button class="bg-gray-300 rounded-lg px-3 py-1 border-2 border-gray-600">Save</button>
    </form>

    <div>
        @if ($categories->count() > 0)
        <table class="min-w-full text-left">


        @foreach($categories as $category)
        <tr class="my-4">
            <td class="px-2">{{ $category->name }}</td>
            <td class="px-2">{{ $category->slug }}</td>
            <td class="px-2"><button type="submit" onclick="confirm('Are You Sure') || event.stopImmediatePropagation()" wire:click.prevent="destroy({{$category->id}})" class="bg-gray-800 rounded-md px-2 py-1 hover:bg-gray-600 text-white text-sm">Delete</button></td>
        </tr>

        @endforeach
    </table>
        @else
        <div class="text-white">There are no categories to display</div>
        @endif
    </div>
</div>
