<div>
    <div class="w-3/4 mx-auto bg-gray-200 p-4 rounded">
        <h1 class="text-center mb-6 text-2xl">Categories</h1>
        @if ($categories->count() > 0)
        <table class="min-w-full text-left">


        @foreach($categories as $category)
        <tr class="my-4">
            <td class="px-2">{{ $category->name }}</td>
            <td class="px-2">{{ $category->slug }}</td>
            <td> <button class="bg-gray-800 rounded-md px-2 py-1 hover:bg-gray-600 text-white text-small"> <a href="/admin/categories/update-category/{{ $category->id }}"> Update</a></button></td>
            <td class="px-2"><button type="submit" onclick="confirm('Are You Sure') || event.stopImmediatePropagation()" wire:click.prevent="destroy({{$category->id}})" class="bg-red-700 rounded-md px-2 py-1 hover:bg-red-400 text-white text-sm">Delete</button></td>
        </tr>

        @endforeach
    </table>
        @else
        <div class="text-white">There are no categories to display</div>
        @endif
    </div>
</div>
