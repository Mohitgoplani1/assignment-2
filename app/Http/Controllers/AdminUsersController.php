<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\AddUserRequest;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::paginate(3);

        return view('admin.users.index', compact(['users']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddUserRequest $request)
    {
        $user = $request->all();
        $user['password'] = Hash::make('Admin123');
        User::create($user);
        Session::flash('admin_flash', 'User created successfully.');
        return redirect()->route('admin-users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        if( $user == null) {
            Session::flash('admin_flash', 'User does not exist.');
            return redirect(route('admin-users'));
        }
        $roles = Role::all();
        return view('admin.users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditUserRequest $request, string $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        Session::flash('admin_flash', 'User edited successfully.');
        return redirect(route('admin-users'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
