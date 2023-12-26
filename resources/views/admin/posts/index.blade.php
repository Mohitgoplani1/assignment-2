<x-admin-layout>
    <x-slot name="header">
        {{ __(' All Posts')}}
    </x-slot>
    <div class="flex flex-col">
        @if(Session::has('admin_flash'))
            <x-alert type="error" position="top-right">{{ Session('admin_flash') }}</x-alert>
        @endif
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full text-left text-sm font-light">
                <thead class="border-b font-medium">
                    <tr>
                    <x-admin-table-header scope="col" ></x-admin-table-header>
                    <x-admin-table-header scope="col" >Title</x-admin-table-header>
                    <x-admin-table-header scope="col" >Category</x-admin-table-header>
                    <x-admin-table-header scope="col" >User</x-admin-table-header>
                    <x-admin-table-header scope="col" >Created At</x-admin-table-header>
                    <x-admin-table-header scope="col" >Updated At</x-admin-table-header>
                    </tr>
                </thead>
                <tbody>
                    @if($posts)
                        @foreach ($posts as $post)
                        <tr class="border-b" style="background: #0f0e0e;
                        background-color: rgba(19, 16, 16, 0.63);

                        width: 583px;">
                            <td class="whitespace-nowrap px-6 py-4 font-medium text-white">{{ $post->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">
                                <a href="{{ route('admin-posts-edit', $post->id)}}">{{ $post->title }}</a></td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $post->category->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $post->user->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $post->created_at->diffForHumans() }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $post->updated_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">{{ $posts->links() }}</div>
    </div>
</x-admin-layout>
