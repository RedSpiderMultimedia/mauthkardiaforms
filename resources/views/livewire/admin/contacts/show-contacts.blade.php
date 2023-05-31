<div class="w-3/4 mx-auto bg-gray-300 p-6 rounded-md shadow-lg">
    <td><button class="px-2 py-1 text-white bg-gray-700 hover:bg-gray-500 rounded-lg float-right"><a href="/admin/articles/add-article">New Article</a> </button></td>
    <h1 class="text-center mb-6 text-2xl">Kardia Articles</h1>
    @if ($contacts->count())

    <table class="min-w-full text-left text-sm font-light">
        <thead>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Sent On</th>
            <th>View Message</th>

        </thead>
        <tbody>
            @foreach($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->subject }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ Carbon\Carbon::parse($contact->created_at)->format('m/d/Y')}}</td>
                <td> <button class="bg-gray-800 rounded-md px-2 py-1 hover:bg-gray-600 text-white text-small"> <a href="/admin/contacts/view-contact/{{ $contact->id }}"> View Message </a></button></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    @else
    No contacts to display
    @endif
</div>
