<?php

namespace App\Http\Controllers;

use App\Cittation;
use Illuminate\Http\Request;

class CittationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cittation_r = Cittation:: all();
        return view('welcome',compact('cittation_r'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cittation  $cittation
     * @return \Illuminate\Http\Response
     */
    public function show(Cittation $cittation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cittation  $cittation
     * @return \Illuminate\Http\Response
     */
    public function edit(Cittation $cittation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cittation  $cittation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cittation $cittation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cittation  $cittation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cittation $cittation)
    {
        //
    }
}
