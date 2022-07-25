<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = match ($request->sort)
        {
            'asc' => User::orderBy('name', 'asc')->get(),
            'desc' => User::orderBy('name', 'desc')->get(),
            default => User::all()
        };
        return view('user.index', ['users'=> $users]);
    }

    public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->save();
        return redirect()->route('uc_create')->with('success', 'User Created, enjoy!!!');
    }
    public function destroy(User $user)
    {


        $user->delete();
        return redirect()->route('ac_index')->with('success', 'USER deleted');
    }
}
