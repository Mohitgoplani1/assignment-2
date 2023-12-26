<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Create User')}}
    </x-slot>

<form method="POST" action="{{ route('admin-users-create') }}" class="p-3">
    @csrf

    <!-- Name -->
    <div class="p-2">
        <label for="name">{{ __('Name') }}</label>
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <!-- Email -->
    <div class="p-2">
        <label for="email">{{ __('Email') }}</label>
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
    </div>

    <!-- Active -->
    <div class="p-2">
        <label for="active">{{ __('Active:') }}</label>
        <select name="active" id="active">
            <option disabled selected>Select a status</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

    <!-- Role -->
    <div>
        <label for="role_id">{{ __('Role:') }}</label>
        <select name="role_id" id="role_id">
            <option disabled selected>Select a role</option>
            @foreach ($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>
<br>
<x-form-errors />
    <div class="block">
        <x-primary-button type="submit">Create</x-primary-button>
    </div>

</form>
</x-admin-layout>
