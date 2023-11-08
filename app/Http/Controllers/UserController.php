<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    
    public function show($id)
{
    $user = User::find($id);
    return view('users.show', compact('user'));
}


public function create()
{
    return view('users.create');
}

public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $data['password'] = bcrypt($data['password']);

    User::create($data);

    return redirect()->route('users.index');
}

public function edit($id)
{
    $user = User::find($id);
    return view('users.edit', compact('user'));
}

public function update(Request $request, $id)
{
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
    ]);

    $user = User::find($id);
    $user->update($data);

    return redirect()->route('users.index');
}

public function destroy($id)
{
    $user = User::find($id);
    $user->delete();
    return redirect()->route('users.index');
}


}
