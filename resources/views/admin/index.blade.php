
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
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>













<body class="antialiased min-h-screen lg:flex" x-data="{open: false}">
    <div class="flex justify-center">
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
                href="{{ route('home') }}"
                class="block px-4 py-2 hover:bg-gray-500 rounded-md"
                >Home</a
            >
            @if(Auth::user()->isAdmin())
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
        </li></ul>
</nav>
 <div class="relative z-0 lg:flex-grow">
    <header class="flex bg-gray-700 text-white items-center px-3">
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
    </header>
</div>

<div class="container mt-5 d-flex justify-content-center">

    <div class="card p-3 justify-content-center">

        <div class="d-flex justify-content-center">

            <div style="margin-left: 98px">
        <img src="Images/WhatsApp Image 2023-12-23 at 5.13.40 PM.jpeg" class="rounded" style="border-radius: 20.4rem" width="155" >
        </div>

        <div class="ml-3 w-100">

           <h4 class="mb-2 mt-5 ml-24">__Aditya Wanwade__</h4>
           <span class="mb-0 mt-0 ml-24">__Web Developer__</span>

           <div class="p-2 mt-2 bg-primary d-flex justify-content-between rounded text-white stats">

            <div class="d-flex flex-column">

                <span class="articles">Articles</span>
                <span class="number1">38</span>





                <span class="followers">Followers</span>
                <span class="number2">980</span>






                <span class="rating">Rating</span>
                <span class="number3">8.9</span>



           </div>


           <div class="button ml-20 mt-5 d-flex flex-row align-items-center">

            <button style="color: #e7e8ee;
            background-color: #3820ec;
            border-radius: 10px;
            padding: 7px;">
            <a href="https://instagram.com/adwanwade?igshid=M2RkZGJiMzhjOQ==">
                Follow
            </button>
<button style="color: #e7e8ee;
background-color: #3820ec;
border-radius: 10px;
padding: 7px;margin-left:30px"><a href="https://www.linkedin.com/in/aditya-wanwade-07b888216?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">Connect</button>

           </div>





        </div>

    </div>
</div>
</div>


 <style>
    body{

background-color:#B3E5FC;
border-radius: 10px;

}


.card{
width: 400px;
border: none;
border-radius: 10px;

background-color: #fff;
}



.stats{

  background: #f2f5f8 !important;

color: #000 !important;
}
.articles{

color: #595b60;
}
.number1{
font-weight:500;
padding: 5px;
}
.followers{

color: #595b60;
padding: 5px;
}
.number2{
font-weight:500;
padding: 5px;
}
.rating{
    padding: 5px;
color: #595b60;
}
.number3{
font-weight:500;
padding: 5px;
}
</style>
</body>
</html>
</x-admin-layout>
