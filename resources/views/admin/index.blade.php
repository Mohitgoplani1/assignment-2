
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Admin Section') }}
                </h2>
            </x-slot>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased min-h-screen lg:flex" x-data="{open: false}">
        <nav
            class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative z-10 w-80 bg-indigo-900 text-white h-screen p-3"
            :class="{'translate-x-0 ease-in opacity-100':open === true, '-translate-x-full ease-out opacity-0': open === false}"
        >
            <div class="flex justify-between">
                <span class="font-bold text-2xl sm:text-3xl p-2">Sidebar</span>
                <button
                    class="p-2 focus:outline-none focus:bg-indigo-800 hover:bg-indigo-800 rounded-md lg:hidden"
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
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Home</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >About</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Products</a
                    >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:bg-indigo-800 rounded-md"
                        >Pricing</a
                    >
                </li>
            </ul>
        </nav>
        <div class="relative z-0 lg:flex-grow">
            <header class="flex bg-gray-700 text-white items-center px-3">
                <button
                    class="p-2 focus:outline-none focus:bg-gray-600 hover:bg-gray-600 rounded-md lg:hidden"
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
                    >AlpineJS</span
                >
            </header>
        </div>
    </div>

    </body>
</html>
This is the content of my admin home
</x-admin-layout>
