<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to view your profile.');
        }
        $profile = $user->profile ?? new UserProfile(['user_id' => $user->id]);
        return view('admin.profile.show', compact('profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to edit your profile.');
        }
        $profile = $user->profile ?? new UserProfile(['user_id' => $user->id]);
        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:15',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'dob' => 'nullable|date',
        ]);
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login to update your profile.');
        }
        $profile = UserProfile::firstOrNew(['user_id' => $user->id]);
        $profile->fill($request->only(['name', 'phone', 'address', 'dob']));
        $profile->save();
        $user->refresh();
        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully.');
    }
}
