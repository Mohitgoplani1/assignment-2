<x-admin-layout>
    <x-slot name="header">
        {{ __(' Admin Section')}}
    </x-slot>

  <h1>Mohit Goplani</h1>
    @if(isset($html))
    <div class="p-2 prose">
    {!! $html !!}
    </div>
    @endif
</x-admin-layout>
