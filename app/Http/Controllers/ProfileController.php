<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function showProfile()
    {

        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user()->load('major', 'class');


        return view('pages.profile', compact('user'));
    }

    public function editProfile()
    {

        if (!Auth::check()) {
            return redirect('/login');
        }

        $user = Auth::user()->load('major', 'class');


        return view('pages.edit-profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'gender' => 'nullable|in:male,female',
            'birth_date' => 'nullable|date',
            'birth_place' => 'nullable|string|max:255',
            'address' => 'nullable|string',
        ]);

        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'Data profil berhasil diperbarui!');
    }

    public function uploadPicture(Request $request)
    {
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();

        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');
            $user->profile_picture = 'storage/' . $path;
            $user->save();
        }

        return response()->json(['success' => true, 'message' => 'Foto profil berhasil diperbarui']);
    }

}