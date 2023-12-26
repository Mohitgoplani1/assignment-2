<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Edit Post')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-posts-edit',$post->id) }}" class="p-3">
        @csrf
        @method('PATCH')


<!-- Title -->
<div class="p-2">
    <label for="name">{{ __('Title') }}</label>
      <x-text-input id="title" class="block mt-1 w-full" type="text" name="title":value="$post->title" required autofocus autocomplete="title" />
</div>

<!-- Category -->
<div class="p-2">
    <label for="category_id">{{ __('Category') }}</label>
    <select name="category_id" id="category_id" class="block">
        <option disabled selected>Select a category</option>
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<!-- Content -->
<div class="p-2">
    <label for="content1">{{ __('Content') }}</label>
    <textarea id="content1"
        class="block mt-1 w-full rounded"
        name="content"
        rows="6"
        required autofocus
        :value="$post->content1"
        ></textarea>
</div>


        <x-form-errors />

        <div class="block">
            <x-primary-button type="submit">Update</x-primary-button>
        </div>

    </form>
</x-admin-layout>
