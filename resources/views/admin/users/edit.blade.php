<x-admin-layout>
    <x-slot name="header">
        {{ __('Admin > Edit User')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-users-edit', $user->id) }}" class="p-3">
        @csrf
        @method('PATCH')

        <!-- Name -->
        <div class="p-2">
            <label for="name">{{ __('Name') }}</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" required autofocus autocomplete="name" />
        </div>

        <!-- Email -->
        <div class="p-2">
            <label for="email">{{ __('Email') }}</label>
            <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="$user->email" required autofocus autocomplete="email" />
        </div>

        <!-- Active -->
        <div class="p-2">
            <label for="active">{{ __('Active') }}</label>
            <select name="active" id="active">
                <option disabled>Select a status</option>
                <option value="1" {{ $user->active == 1 ? 'selected' : '' }}>Yes</option>
                <option value="2" {{ $user->active == 2 ? 'selected' : '' }}>No</option>
            </select>
        </div>

        <!-- Role -->
        <div>
            <label for="role_id">{{ __('Role') }}</label>
            <select name="role_id" id="role_id">
                <option disabled>Select a role</option>
                @foreach ($roles as $role)
                <option value="{{ $role->id }}" {{ $role->id == $user->role->id ? 'selected' : '' }}>{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <x-form-errors />

        <div class="block">
            <x-primary-button type="submit">Update User</x-primary-button>
        </div>

    </form>
</x-admin-layout>
