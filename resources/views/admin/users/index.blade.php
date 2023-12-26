<x-admin-layout>
    <x-slot name="header">
        {{ __('All Users')}}
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
                    <x-admin-table-header scope="col" >Name</x-admin-table-header>
                    <x-admin-table-header scope="col" >Email</x-admin-table-header>
                    <x-admin-table-header scope="col" >Role</x-admin-table-header>
                    <x-admin-table-header scope="col" >Active</x-admin-table-header>
                    <x-admin-table-header scope="col" >Created At</x-admin-table-header>
                    <x-admin-table-header scope="col" >Updated At</x-admin-table-header>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach ($users as $user)
                        <tr class="border-b" style="background: #0f0e0e;
                        background-color: rgba(19, 16, 16, 0.63);

                        width: 583px;">
                            <td class="whitespace-nowrap px-6 py-4 font-medium text-white">{{ $user->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">
                                <a href="{{ route('admin-users-edit', $user->id)}}">{{ $user->name }}</a></td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $user->email }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $user->role->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $user->active == 1 ? 'Yes' : 'No'}}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $user->created_at->diffForHumans() }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-white">{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">{{ $users->links() }}</div>
    </div>
</x-admin-layout>

