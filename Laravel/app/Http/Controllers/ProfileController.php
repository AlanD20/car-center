<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{

    public function index()
    {
        $user = auth()->user();
        return view('admin.profile.edit', compact('user'));
    }
    public function create()
    {
        return view('admin.profile.create');
    }
    public function store(StoreProfileRequest $req)
    {
        $req->storeRecord();
        return \back()->with([
            'success' => 'User added successfully'
        ]);
    }
    public function edit(User $user)
    {
        return view('admin.profile.edit', \compact('user'));
    }
    public function update(UpdateProfileRequest $req, User $user)
    {
        if ($user->username === config('info.default_username') || $user->username === config('info.admin_username'))
            throw ValidationException::withMessages([
                'failed' => "Cannot edit the {$user->username} account"
            ]);
        $req->updateRecord($user);
        return \redirect()->route('admin.profile.edit', ['user' => $user->id])->with([
            'user' => $user,
            'success' => 'User updated successfully'
        ]);
    }
    public function manage()
    {
        $users = User::latest()->paginate(7);
        $filtered = $users->getCollection()->reject(function ($user) {
            return $user->username === config('info.admin_username');
        });
        $users->setCollection($filtered);
        return view('admin.profile.manage', \compact('users'));
    }
    public function destroy(User $user)
    {
        if ($user->username === config('info.default_username') || $user->username === config('info.admin_username'))
            throw ValidationException::withMessages([
                'failed' => "Cannot delete the requested user!"
            ]);

        $user->delete();
        return \redirect()->route('admin.profile.manage')->with([
            'success' => "User deleted successfully"
        ]);
    }
}
