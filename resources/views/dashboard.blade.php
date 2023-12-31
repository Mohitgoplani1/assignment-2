<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-white text-lg font-semibold"><h3> Book Review Articles</h3></a>
      <!-- Navigation links -->
      <div class="space-x-4">
        <a href="{{ route('admin')}}" class="text-white hover:text-gray-300">Admin</a>
        <a href="{{ route('login')}}" class="text-white hover:text-gray-300">Login</a>
        <a href="{{ route('register')}}" class="text-white hover:text-gray-300">Register</a>
        <a href="{{ route('admin-posts-create')}}" class="text-white hover:text-gray-300">Create </a>
      </div>
    </div>
  </nav>
  <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
