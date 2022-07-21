<?php

namespace App\Http\Controllers;

use App\Models\Autoservisas AS A;
use App\Models\Paslauga AS P;
use App\Models\Machanikas AS M;
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
        return view('auto.create', ['paslaugos'=>P::all(), 'mechanikai'=>M::all()]);
    }


    public function store(Request $request)
    {
        $aServices = new A;
        $aServices->name = $request->name;
        $aServices->phone = $request->phone;
        $aServices->paslauga_id = $request->paslaugos_id;
        $aServices->mechanikas_id = $request->mechanikas_id;
        $aServices->address = $request->address;
        $aServices->save();
        return redirect()->route('ac_index')->with('success', 'autoservisas sukurtas!');
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
