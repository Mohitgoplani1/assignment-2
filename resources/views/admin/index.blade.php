<x-admin-layout>
    <x-slot name="header">
        {{ __('New Admin Section')}}
    </x-slot>

    This is the content of my admin home
    @if(isset($html))
    <div class="p-2 prose">
    {!! $html !!}
    </div>
    @endif
</x-admin-layout>
