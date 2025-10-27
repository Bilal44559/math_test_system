<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnrollmentCreatedMail;
use App\Models\EnrollmentToken;
use App\Models\User;
use App\Models\Enrollment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Mail\RetakeTestMail;

class UserController extends Controller
{
    public function index()
    {
        $users = Enrollment::with(['enrollment_tokens' => function ($q) { $q->latest(); }])->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    public function show($id)
    {
        $enroll = Enrollment::findOrFail($id);
        return view('admin.users.show', compact('enroll'));
    }

    public function sendMail($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $rawPassword = Str::random(10);
        $user = User::where('id', $enrollment->user_id)->update(['password' => Hash::make($rawPassword)]);
        $payload = json_encode([
            'email' => $enrollment->email,
            'password' => $rawPassword,
            'enrollment_id' => $enrollment->id,
        ]);

        $token = Crypt::encryptString($payload);
        $link = route('enroll.test-start', ['token' => $token]);
        EnrollmentToken::where('enrollment_id', $id)->update([
            'token' => $token,
            'used' => 0,
            'used_at' => null,
            'expires_at' => now()->addHours(3)
        ]);
        // Mail::to($enrollment->email)->send(new EnrollmentCreatedMail($enrollment->email, $rawPassword, $link, $enrollment));
        Mail::to($enrollment->email)->send(new RetakeTestMail($rawPassword, $link, $enrollment));
        return redirect()->back()->with('success', 'Email sent successfully!');

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
