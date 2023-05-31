<nav class="border-b-2 border-gray-700 pb-4">

 <div class="flex justify-center mt-6">
    <button class="md:hidden  w-10 h-10 mobile-menu-button">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

    </button>
    </div>
    <div class="p-1 md:flex justify-center items-center text-2xl">


    <div class="hidden md:block text-brand-lt">
    <a href="{{ url('/') }}" class="block md:inline-block px-6 py-3 hover:text-gray-100 {{ Request::path() === '/' ? 'text-white bg-brand-lt rounded-lg' : '' }}">Home</a>
        <a href="{{ url('/services') }}" class="block md:inline-block px-6 py-3 hover:text-gray-100 {{ Request::path() === 'services' ? 'text-white bg-brand-lt rounded-lg' : '' }}">Services</a>
        <a href="{{ url('/about') }}" class="block md:inline-block px-6 py-3  hover:text-gray-100 {{ Request::path() === 'about' ? 'text-white bg-brand-lt rounded-lg' : '' }}">About</a>
        <a href="{{ url('/contact') }}" class="block md:inline-block px-6 py-3 hover:text-gray-100 {{ Request::path() === 'contact' ? 'text-white bg-brand-lt rounded-lg' : '' }}">Contact</a>
        <a href="https://doxy.me/kardiacounseling" target="_blank" class="block md:inline-block px-6 py-3 hover:text-gray-100">Doxy.me</a>

    </div>


    <div>

    <div class="hidden mobile-menu mx-5 p-3">
        <a class="block px-3 py-2 hover:bg-gray-600 rounded-lg {{ Request::path() === '/' ? 'text-white bg-brand-lt rounded-lg' : '' }}" href="{{ url('/') }}">Home</a>
        <a class="block px-3 py-2 hover:bg-gray-600 rounded-lg {{ Request::path() === 'services' ? 'text-white bg-brand-lt rounded-lg' : '' }}"  href="{{ url('/services') }}">Services</a>
        <a class="block px-3 py-2 hover:bg-gray-600 rounded-lg {{ Request::path() === 'about' ? 'text-white bg-brand-lt rounded-lg' : '' }}"  href="{{ url('/about') }}">About</a>
        <a class="block px-3 py-2 hover:bg-gray-600 rounded-lg {{ Request::path() === 'contact' ? 'text-white bg-brand-lt rounded-lg' : '' }}"  href="{{ url('/contact') }}">Contact</a>
        <a class="block px-3 py-2 hover:bg-gray-600 rounded-lg"  href="https://doxy.me/kardiacounseling" target="_blank">Doxy.me</a>
    </div>

    </div>


</nav>
