@extends('layouts.app')

@section('content')

            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth

                    <div class="bg-indigo-400 p-10">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam veniam qui placeat facilis maiores recusandae, asperiores iure saepe natus deleniti, quaerat voluptates sunt quam eos numquam. Neque similique amet vel corporis. Nesciunt fugiat, earum incidunt ipsa assumenda voluptas voluptatum, animi doloribus enim autem cumque dolorum quidem amet nisi natus odit aperiam ipsum quae debitis distinctio repellat. Blanditiis doloribus aliquam necessitatibus, quia nostrum voluptatum nesciunt laboriosam ad neque obcaecati a consequuntur sed maiores cumque! Aspernatur quisquam facere, repellat consectetur dicta iure magni soluta fugit cumque veniam vero ipsa, officiis neque pariatur praesentium. Iusto laborum nihil iste ipsum minus fugiat commodi illo!

                    </div>

                </p>
                <h1>New Feautres</h1>
                <p>Multiauth System with bootstrap. Login Controller has logic that redirects user based on user or admin status. I attempted to replace bootstrap with Tailwind. Not completed. user1@user.com and admin@admin.com are the users. Password is the password. </p>

                <p>Now I'm just testing about some Git commands. I haven't been able to wrap my head around this yet.</p>
                <p>https://www.youtube.com/watch?v=wODW8RLBPt0</p>
                </div>
            @endif
@endsection
