<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kardia Healing > @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />

    <!-- Scripts -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-900">

    <nav class="text-white p-3">
        <div class="flex justify-around">
        <div><a href="/admin/dashboard">Dashboard</a></div>
        <div class="flex space-x-12">
            <div><a href="/admin/articles/show-articles">Articles</a></div>
            <div><a href="/admin/categories/show-categories">Categories</a></div>
            <div><a href="/admin/contacts/show-contacts">Contacts</a></div>
            <div><a href="/admin/forms">Forms</a></div>
            <div><form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="">Logout</button>
            </form></div>
        </div>

        </div>
    </nav>


        <main class="py-4">
           {{ $slot }}
        </main>

    @livewireScripts

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
               .create(document.querySelector('#body'))
               .then(editor => {
                   document.querySelector('#submit').addEventListener('click', () => {
                       const textareaValue = $('#body').data('body');
                       eval(textareaValue).set('body', editor.getData());
                   });
               })
               .catch(error => {
                   console.error(error);
               });

       </script>

</body>
</html>
