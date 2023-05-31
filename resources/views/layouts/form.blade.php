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




        <main class="py-10 my-10">
           {{ $slot }}
        </main>

    @livewireScripts

    <script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
