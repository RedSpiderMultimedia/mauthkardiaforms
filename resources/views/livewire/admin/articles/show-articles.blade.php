<div class="w-3/4 mx-auto bg-gray-300 p-6 rounded-md shadow-lg">
    <td><button class="px-2 py-1 text-white bg-gray-700 hover:bg-gray-500 rounded-lg float-right"><a href="/admin/articles/add-article">New Article</a> </button></td>
    <h1 class="text-center mb-6 text-2xl">Kardia Articles</h1>
    @if ($articles->count())

    <table class="min-w-full text-left text-sm font-light">
        <thead>
            <th>Title</th>
            <th>Slug</th>
            <th>Published</th>
            <th>Created</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->slug }}</td>
                <td>{{ $article->is_published ? "Yes" : "No"}}</td>
                <td>{{ Carbon\Carbon::parse($article->created_at)->format('m/d/Y')}}</td>
                <td> <button class="bg-gray-800 rounded-md px-2 py-1 hover:bg-gray-600 text-white text-small"> <a href="/admin/articles/update-article/{{ $article->id }}"> Update</a></button></td>
                <td><button wire:click.prevent="destroy" onclick="confirm('Are You Sure') || event.stopImmediatePropagation()" wire:click.prevent="destroy({{$article->id}})" class="px-2 py-1 text-white bg-red-700 hover:bg-red-500 rounded-lg">Delete </button></td>
            </tr>
            @endforeach
        </tbody>
    </table>















    @else
    No articles to display
    @endif
</div>
