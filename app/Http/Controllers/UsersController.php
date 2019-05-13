<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Users\UpdateProfileRequest;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index')->with('users', User::all());
    }

    public function edit()
    {
        return view('users.edit')->with('user', auth()->user());

    }

    /**
     * Update the user profile
     *
     */
    public function update(UpdateProfileRequest $request)
    {

       $user = auth()->user();

        $user->update([
            'name' => $request->name,
            'about' => $request->about
        ]);

        session()->flash('success','Successfully update the user profile.');

        return redirect()->back();
    }
    public function makeAdmin(User $user)
    {
        $user->role = 'admin';

        $user->save();

        session()->flash('success','Successfully elevate the user priviledge to admin.');

        return redirect(route('users.index'));
    }
}
