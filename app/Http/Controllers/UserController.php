<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$users = User::get();

    	return view('user.index', compact('users'));
    }

    public function edit($id)
    {
    	$user = User::find($id);
    	$roleList = ['super_admin' => 'Super Admin', 'admin' => 'Admin', 'super_user' => 'Super User', 'user' => 'User'];

    	return view('user.edit', compact('user', 'roleList'));
    }

    public function update(Request $request, $id)
    {
    	$user = User::find($id);
    	//return $request->all();
    	$user->name = $request->name;
    	$user->role = $request->role;
    	$user->save();

    	flash()->success('Successfully Updated');
    	return redirect('user');

    }
}
