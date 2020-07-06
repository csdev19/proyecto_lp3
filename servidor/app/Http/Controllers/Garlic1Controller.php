<?php

namespace App\Http\Controllers;

use App\Garlic1;
use Illuminate\Http\Request;

class Garlic1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // METODO /get
        return Garlic1::all(); // select * from garlic1;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $garlic = Garlic1::create($request->all());
        return $garlic;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Garlic1  $garlic1
     * @return \Illuminate\Http\Response
     */
    public function show(Garlic1 $garlic1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Garlic1  $garlic1
     * @return \Illuminate\Http\Response
     */
    public function edit(Garlic1 $garlic1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Garlic1  $garlic1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Garlic1 $garlic1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Garlic1  $garlic1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Garlic1 $garlic1)
    {
        //
    }
}
