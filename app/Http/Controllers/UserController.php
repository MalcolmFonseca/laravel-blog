<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

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
}
