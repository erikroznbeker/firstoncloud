<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNamesRequest;
use App\Http\Requests\UpdateNamesRequest;
use App\Models\Names;

class NamesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNamesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Names $names)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Names $names)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNamesRequest $request, Names $names)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Names $names)
    {
        //
    }
}
