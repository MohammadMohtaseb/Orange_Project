<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return view('dashboard.user', compact('Users'));
    }

    public function create()
    {
        return view('dashboard.addUser');
    }


    public function store(Request $request)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => 'required|string|email|max:255|unique:users,email',
        'password' => [
    'required',
    'string',
    'min:8', // At least 8 characters
    'regex:/[a-zA-Z]/', // At least one letter (uppercase or lowercase)
    'regex:/[0-9]/', // At least one digit
],

    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);

    return redirect()->route('users')->with('success', 'User created successfully.');
}



public function edit($id)
{
    $User = User::findOrFail($id);
    return view('dashboard.editUser', compact('User'));
}



public function update(Request $request, $id)
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => 'required|string|email|max:255|unique:users,email,' . $id,
        'password' => [
            'required',
            'string',
            'min:8', // At least 8 characters
            'regex:/[a-zA-Z]/', // At least one letter (uppercase or lowercase)
            'regex:/[0-9]/', // At least one digit
        ],
    ]);

    $user = User::findOrFail($id);

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    $user->save();

    return redirect()->route('users')->with('success', 'User updated successfully.');
}


public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users')->with('success', 'User deleted successfully.');
}
}
