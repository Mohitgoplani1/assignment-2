<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Create Category')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-categories-create') }}" class="p-3">
        @csrf

        <!-- Name -->
        <div class="p-2">
            <label for="name">{{ __('Name') }}</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        </div>

        <x-form-errors />

        <div class="block">
            <x-primary-button type="submit">Create</x-primary-button>
        </div>

    </form>
</x-admin-layout>
