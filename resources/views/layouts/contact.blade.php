<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kardia Healing > @yield('title')</title>

    <!-- Fonts -->
     <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
     <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link type="text/css" rel="stylesheet" href="{{ asset('css/font.css') }}"  media="screen,projection"/>
    <!-- Scripts -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-900">
    <div class="min-h-screen bg-gray-900 text-[#A3A3A3]">

        <div class="mt-16">

            <div class="text-center">
                <h1 class="text-6xl md:text-8xl mx-auto text-center pt-6">Kardia </h1>
                  <h1 class="text-3xl">Counseling & Consulting</h1>
                {{-- <p class="text-2xl mt-6 tracking-widest">Healing Hearts & Minds</p> --}}
            </div>
        </div>

    @include('partials.nav')


        <main class="py-4">
           {{ $slot }}
        </main>
        @include('partials.footer')
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
