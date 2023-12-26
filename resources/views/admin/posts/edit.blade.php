<x-admin-layout>
    <x-slot name="header">
        {{ __('Edit Post')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-posts-edit', $post->id) }}" class="p-3" style="background: #0f0e0e;
        background-color: rgba(19, 16, 16, 0.63);
        padding: 10px 20px 30px 20px;
        max-width: 100%;
        float: left;
        left: 50%;
        position: absolute;
        margin-top: 150px;
        margin-left: -380px;
        border-radius: 7px;
        -webkit-border-radius: 7px;
        -moz-border-radius: 7px;
        width: 583px;">
        @csrf
        @method('PATCH')

        <!-- Title -->
        <div class="p-2">
            <label for="name" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Title') }}</label>
            <x-text-input id="title" class="block mt-1 w-full"
                type="text" name="title" required autofocus autocomplete="title"
                :value="$post->title" />
        </div>

        <!-- Category -->
        <div class="p-2">
            <label for="category_id" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Category') }}</label>
            <select name="category_id" id="category_id" class="block" style="border:outset;border-radius:50px">
                <option disabled>Select a category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $post->category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Content -->
        <div class="p-2">
            <label for="content" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Content') }}</label>
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
