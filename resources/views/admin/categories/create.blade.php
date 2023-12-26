<x-admin-layout>
    <x-slot name="header">
        {{ __('Create Category')}}
    </x-slot>
    <form method="POST" action="{{ route('admin-categories-create') }}" class="p-3" style="background: #0f0e0e;
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
            <label for="name" class="text-white" style="font-size: xx-large;font-weight: inherit">{{ __('Name') }}</label>
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="margin-bottom: 15px"/>
        </div>

        <x-form-errors />

        <div class="block">
            <x-primary-button type="submit">Create</x-primary-button>
        </div>

    </form>
</x-admin-layout>
