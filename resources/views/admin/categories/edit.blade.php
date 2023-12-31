<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Edit Category')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-categories-edit', $category->id) }}" class="p-3">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="p-2">
            <label for="name">{{ __('Name') }}</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$category->name" required autofocus autocomplete="name" />
        </div>

        <x-form-errors />

        <div class="block">
            <x-primary-button type="submit">Create</x-primary-button>
        </div>

    </form>
</x-admin-layout>
