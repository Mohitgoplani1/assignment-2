<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Edit Post')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-posts-edit', $post->id) }}" class="p-3">
        @csrf
        @method('PATCH')

        <!-- Title -->
        <div class="p-2">
            <label for="name">{{ __('Title') }}</label>
            <x-text-input id="title" class="block mt-1 w-full"
                type="text" name="title" required autofocus autocomplete="title"
                :value="$post->title" />
        </div>

        <!-- Category -->
        <div class="p-2">
            <label for="category_id">{{ __('Category') }}</label>
            <select name="category_id" id="category_id" class="block">
                <option disabled>Select a category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Content -->
        <div class="p-2">
            <label for="content">{{ __('Content') }}</label>
            <textarea id="content"
                class="block mt-1 w-full rounded"
                name="content"
                rows="6"
                required autofocus>{{ $post->content }}</textarea>
        </div>

        <x-form-errors />

        <div class="block p-2">
            <x-primary-button type="submit">Update</x-primary-button>
        </div>

    </form>
</x-admin-layout>
