<?php

namespace App\Http\Controllers;

use App\Models\Machanikas;
use App\Http\Requests\StoreMachanikasRequest;
use App\Http\Requests\UpdateMachanikasRequest;

class MachanikasController extends Controller
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
     * @param  \App\Http\Requests\StoreMachanikasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMachanikasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Machanikas  $machanikas
     * @return \Illuminate\Http\Response
     */
    public function show(Machanikas $machanikas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Machanikas  $machanikas
     * @return \Illuminate\Http\Response
     */
    public function edit(Machanikas $machanikas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMachanikasRequest  $request
     * @param  \App\Models\Machanikas  $machanikas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMachanikasRequest $request, Machanikas $machanikas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Machanikas  $machanikas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Machanikas $machanikas)
    {
        //
    }
}
