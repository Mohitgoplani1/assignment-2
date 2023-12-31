<nav class="bg-gray-800 p-4">
    <div class="container mx-auto flex justify-between items-center">
      <a href="#" class="text-white text-lg font-semibold"><h3> Book Review Articles</h3></a>
      <!-- Navigation links -->
      <div class="space-x-4">
        <a href="{{ route('login')}}" class="text-white hover:text-gray-300">Login</a>
        <a href="{{ route('register')}}" class="text-white hover:text-gray-300">Register</a>
        <a href="{{ route('admin-posts-create')}}" class="text-white hover:text-gray-300">Create </a>
      </div>
    </div>
  </nav>
<x-guest-layout>
    <x-slot name="header">
        {{ __('Posted Articles') }}
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @if($posts)
            @foreach ($posts as $post)
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <img src="images/book1.png" alt="Article Image" class="mb-4 rounded-lg" style="height: 80px;width:50px">
                    <h2 class="text-xl font-bold mb-2">{{ $post->title }}</h2>
                    <p class="text-gray-700 mb-4">{{ $post->content }}</p>
                    <a href="{{ route('post-show', $post->id)}}" class="text-blue-500 hover:underline">Read more</a>
                </div>
            @endforeach
        @else
            <div class="p-6">No content yet, please visit after some days.</div>
        @endif
    </div>
</x-guest-layout>


