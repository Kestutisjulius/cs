<?php

namespace App\Http\Controllers;

use App\Models\User AS U;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = match ($request->sort)
        {
            'asc' => U::orderBy('name', 'asc')->get(),
            'desc' => U::orderBy('name', 'desc')->get(),
            default => U::all()
        };
        return view('user.index', ['users'=> $users]);
    }
}
