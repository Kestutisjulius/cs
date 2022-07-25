<?php

namespace App\Http\Controllers;

use App\Models\Paslauga AS P;
use Illuminate\Http\Request;

class PaslaugaController extends Controller
{

    public function index(Request $request)
    {
        $paslaugos = match ($request->sort)
        {
            'asc' => P::orderBy('name', 'asc')->get(),
            'desc' => P::orderBy('name', 'desc')->get(),
            default => P::all()
        };
        return view('pasl.index', ['paslaugos'=> $paslaugos]);
    }


    public function create()
    {
        return view('pasl.create');
    }


    public function store(Request $request)
    {
        $paslauga = new P;
        $paslauga->name = $request->name;
        $paslauga->deadline = $request->deadline;
        $paslauga->price = $request->price;
        $paslauga->save();
        return redirect()->route('pc_index')->with('success', 'gera paslauga!');
    }


    public function show(Paslauga $paslauga)
    {
        //
    }


    public function edit(Paslauga $paslauga)
    {
        //
    }


    public function update(Request $request, Paslauga $paslauga)
    {
        //
    }


    public function destroy(Paslauga $paslauga)
    {
        //
    }
}
