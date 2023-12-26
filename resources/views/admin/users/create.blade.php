<x-admin-layout>
    <x-slot name="header">
        {{ __('Create User')}}
    </x-slot>

<form method="POST" action="{{ route('admin-users-create') }}" class="p-3" style="background: #0f0e0e;
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

    <!-- Name -->
    <div class="p-2">
        <label for="name" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Name') }}</label>
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
    </div>

    <!-- Email -->
    <div class="p-2">
        <label for="email" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Email') }}</label>
        <x-text-input id="email" class="block mt-1 w-full" type="text" name="email" :value="old('email')" required autofocus autocomplete="email" />
    </div>

    <!-- Active -->
    <div class="p-2">
        <label for="active" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Active ') }}</label>
        <select name="active" id="active" style="border:outset;border-radius:50px">
            <option disabled selected>Select a status</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
        </select>
    </div>

    <!-- Role -->
    <div>
        <label for="role_id" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Role ') }}</label>
        <select name="role_id" id="role_id" style="border:outset;border-radius:50px">
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
