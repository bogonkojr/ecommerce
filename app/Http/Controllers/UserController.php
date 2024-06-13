<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('portal.users.index', compact('users'));
    }

    public function create()
    {
        return view('portal.users.create');
    }

    public function store(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
        ]);

        // Hash the password
        $hashedPassword = Hash::make($request->password);

        // Create the user
        $user = new User([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => $hashedPassword,
        ]);
        $user->save();

        // Redirect to a success page or return a response
        return redirect()->route('portal.users.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        return view('portal.users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('portal.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
    $user = User::findOrFail($id);

    // Update the user's name, email, and password
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->password = Hash::make($request->input('password'));

    // Update the user's status
    $user->status = 1;

    // Save the changes
    $user->save();

    // Redirect to the index view
    return redirect()->route('portal.users.index');
    }



    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('portal.users.index');
    }
}
