<?php

namespace App\Http\Controllers;

use App\Models\Paslauga;
use App\Http\Requests\StorePaslaugaRequest;
use App\Http\Requests\UpdatePaslaugaRequest;

class PaslaugaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaslaugaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaslaugaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paslauga  $paslauga
     * @return \Illuminate\Http\Response
     */
    public function show(Paslauga $paslauga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paslauga  $paslauga
     * @return \Illuminate\Http\Response
     */
    public function edit(Paslauga $paslauga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaslaugaRequest  $request
     * @param  \App\Models\Paslauga  $paslauga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaslaugaRequest $request, Paslauga $paslauga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paslauga  $paslauga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paslauga $paslauga)
    {
        //
    }
}
