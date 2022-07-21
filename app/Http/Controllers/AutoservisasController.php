<?php

namespace App\Http\Controllers;

use App\Models\Autoservisas AS A;
use App\Models\Paslauga AS P;
use Illuminate\Http\Request;

class AutoservisasController extends Controller
{
    public function index(Request $request)
    {
        $aServices = match ($request->sort)
        {
            'asc' => A::orderBy('name', 'asc')->get(),
            'desc' => A::orderBy('name', 'desc')->get(),
            default => A::all()
        };
        return view('auto.index', ['aServices'=> $aServices]);
    }


    public function create()
    {
        return view('auto.create', ['paslaugas'=>P::all()]);
    }


    public function store(Request $request)
    {
        $aServices = new A;

        $aServices->name = $request->animal_name;



        $aServices->save();

        return redirect()->route('ac_index')->with('success', 'Animal are saved!');
    }


    public function show(A $autoservisas)
    {
        //
    }


    public function edit(A $autoservisas)
    {
        //
    }


    public function update(Request $request, A $autoservisas)
    {
        //
    }


    public function destroy(A $autoservisas)
    {
        //
    }
}
