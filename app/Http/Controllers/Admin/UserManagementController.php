<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    //
    public function index()
    {
        $users = User::orderby('created_at', 'desc')->get();
        return view('pages.admin.usermanagement', compact('user'));
    }

    public function create()
    {
        $users = User::all();
        return view('pages.admin.usermanagement', compact('user'));
    }

    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('usermanagement.index')->with('success', 'User created successfully.');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.admin.usermanagement.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('usermanagement.index')->with('success', 'User updated successfully.');
    }

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('usermanagement.index')->with('success', 'User deleted successfully.');
    }

}
