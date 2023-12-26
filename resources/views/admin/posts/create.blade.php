<x-admin-layout>
    <x-slot name="header">
        {{ __(' Create Post')}}
    </x-slot>

            <form method="POST" action="{{ route('admin-posts-create') }}" class="p-3" style="background: #0f0e0e;
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

        <!-- Title -->
        <div class="p-2">
            <label for="name" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Title') }}</label>
              <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus autocomplete="title" />
        </div>

        <!-- Category -->
        <div class="p-2">
            <label for="category_id" class="text-white pb-10" style="font-size: xx-large;font-weight: inherit;">{{ __('Category') }}</label>
            <select name="category_id" id="category_id" class="block" style="border:outset;border-radius:50px">
                <option disabled selected >Select a category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Content -->
        <div class="p-2">
            <label for="content1" class="text-white" style="font-size: xx-large;font-weight: inherit;">{{ __('Content') }}</label>
            <textarea id="content1"
                class="block mt-1 w-full rounded"
                name="content"
                rows="6"
                required autofocus></textarea>
        </div>

        <x-form-errors />

        <div class="block p-2">
            <x-primary-button type="submit">Create</x-primary-button>
        </div>

    </form>

    <x-slot name="scripts">
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
        <script>
        ClassicEditor
            .create( document.querySelector( '#content1' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
    </script>
     </x-slot>
</x-admin-layout>
