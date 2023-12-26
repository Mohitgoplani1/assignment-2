<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @if(isset($scripts))
        {{ $scripts }}
        @endif
    </head>
    <body class="antialiased min-h-screen lg:flex bg-black" x-data="{open: false}" style="font-family: 'Lato', sans-serif;
    margin: 0;
    background: url('/Images/bgimage.jpg') no-repeat center center fixed;
      background-size: auto;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    color: #0a0a0b;
    overflow: hidden;
    filter: grayscale(50%);">
        <nav
            class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 bg-gray-800 text-white h-screen p-3"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}"
        >
            <div class="flex justify-between">
                <span class="font-bold text-2xl sm:text-3xl p-2" style="color: #B0976D">Menu</span>
                <button
                    class="p-2 focus:outline-none focus:bg-gray-800 hover:bg-gray-500 rounded-md lg:hidden"
                    @click="open = false"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M15 19l-7-7 7-7"
                        />
                    </svg>
                </button>
            </div>
            <ul class="mt-8">
                <li>
                    <a
                        href="{{route('home')}}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >Home</a
                    >
                    @if(Auth::user()->isAdmin())
                    <a
                    href="{{ route('admin') }}"
                    class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                    >Admin Section</a
                >
                    <a
                        href="{{ route('admin-users') }}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >All Users</a
                    >
                    <a

                    href="{{ route('admin-users-create') }}"
                    class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >Create User</a>
                        @endif
                        <a
                        href="{{ route('admin-categories') }}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >All Categories</a
                    >
                    <a
                        href="{{ route('admin-categories-create') }}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >Create Category</a
                    >
                    <a
                    href="{{ route('admin-posts') }}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >All Posts</a
                    >
                    <a
                    href="{{ route('admin-posts-create') }}"
                        class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                        >Create Post</a
                    >
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a :href="route('logout')"
                            class="block px-4 py-2 hover:bg-gray-500 rounded-md cursor-pointer"
                            onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}</a>
                    </form>
                </li>
            </ul>
        </nav>
        <div class="relative z-0 lg:flex-grow">
            <header class="flex   items-center px-3"  style="padding-left: 36.8rem;
            padding-right: 24.8rem;
          color:#484343">
                <button
                    class="p-2 focus:outline-none focus:bg-gray-600 hover:bg-gray-500 rounded-md lg:hidden"
                    @click="open = true"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                </button>
                <span class="block text-2xl sm:text-3xl font-bold p-4"
                    >{{ $header }}</span
                >
            </header>
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
