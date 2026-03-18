<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user)
    {
        return view('users.edit', [
            'user' => $user
        ]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'profile_image' => ['image'],
            'name' => 'required',
            'username' => ['required', Rule::unique('users', 'username')->ignore($user->id)],
            'email' => ['required', Rule::unique('users', 'email')->ignore($user->id)],
        ]);

        if ($attributes['profile_image'] ?? false) {
            $attributes['profile_image'] = request()->file('profile_image')->store('profile_images', 'public');
        }

        $user->update($attributes);

        return back()->with('success', 'Profile Info Updates!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/')->with('success', 'Account Deleted!');
    }

    public function edit_password(User $user)
    {
        return view('users.change-password', [
            'user' => $user
        ]);
    }


    public function update_password(User $user)
    {
        $attributes = request()->validate([
            'new_password' => ['required', 'max:255', 'min:7'],
            'confirm_password' => ['required', 'max:255', 'min:7'],
        ]);

        if ($attributes['new_password'] != $attributes['confirm_password']) {
            throw ValidationException::withMessages([
                'confirm_password' => 'Passwords do not match'
            ]);
        }

        $user->update(['password' => $attributes['new_password']]);

        return back()->with('success', 'Password Changed!');
    }
}
