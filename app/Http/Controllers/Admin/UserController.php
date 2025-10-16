<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Enrollment;

class UserController extends Controller
{
    public function index()
    {
        $users = Enrollment::paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $enroll = Enrollment::findOrFail($id);
        return view('admin.users.show', compact('enroll'));
    }


    // public function updateRole(Request $request)
    // {
    //     $user = User::findOrFail($request->user_id);
    //     $role = Role::findOrFail($request->role_id);
    //     $user->syncRoles([$role->name]);
    //     return response()->json(['success' => true]);
    // }

    // public function create()
    // {
    //     $roles = Role::all();
    //     return view('admin.users.create', compact('roles'));
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name'     => 'required|string|max:255',
    //         'email'    => 'required|email|unique:users,email',
    //         'password' => 'required|min:6',
    //         'roles'    => 'required|array',
    //     ]);

    //     // ✅ Create user
    //     $user = User::create([
    //         'name'     => $request->name,
    //         'email'    => $request->email,
    //         'password' => bcrypt($request->password),
    //     ]);

    //     // ✅ Assign roles (agar IDs aati hain to)
    //     $roles = Role::whereIn('id', $request->roles)->pluck('name')->toArray();
    //     $user->syncRoles($roles);


    //     return redirect()->route('admin.users.index')->with('success', 'User added successfully!');
    // }


    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);
    //     $roles = Role::all();
    //     $userRoles = $user->roles->pluck('id')->toArray();
    //     return view('admin.users.edit', compact('user', 'roles', 'userRoles'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name'  => 'required|string|max:255',
    //         'email' => 'required|email|unique:users,email,' . $id,
    //         'roles' => 'required|array',
    //     ]);

    //     $user = User::findOrFail($id);
    //     $user->update([
    //         'name'  => $request->name,
    //         'email' => $request->email,
    //     ]);

    //     $roles = Role::whereIn('id', $request->roles)->pluck('name')->toArray();
    //     $user->syncRoles($roles);

    //     return redirect()->route('admin.users.index')->with('success', 'User updated successfully!');
    // }

    // public function destroy($id)
    // {
    //     $user = User::findOrFail($id);
    //     $user->delete();
    //     return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    // }
}
