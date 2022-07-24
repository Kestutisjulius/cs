<?php

namespace App\Http\Controllers;

use App\Models\Machanikas AS M;
use Illuminate\Http\Request;

class MachanikasController extends Controller
{

    public function index(Request $request)
    {
        $mechanikai = match ($request->sort)
        {
            'asc' => M::orderBy('name', 'asc')->get(),
            'desc' => M::orderBy('name', 'desc')->get(),
            default => M::all()
        };
        return view('mech.index', ['mechanikai'=> $mechanikai]);
    }

    public function create()
    {
        return view('mech.create');
    }

    public function store(Request $request)
    {
        $mechanikas = new M;
        $mechanikas->name = $request->name;
        $mechanikas->surname = $request->surname;
        $mechanikas->photo = $request->photo;
        $mechanikas->rating = $request->reitingas;
        $mechanikas->save();
        return redirect()->route('mc_index')->with('success', 'mechanikas Yra!');
    }

    public function show(M $machanikas)
    {
        //
    }

    public function edit(M $machanikas)
    {
        //
    }

    public function update(Request $request, M $machanikas)
    {
        //
    }

    public function destroy(M $machanikas)
    {
        //
    }
}
