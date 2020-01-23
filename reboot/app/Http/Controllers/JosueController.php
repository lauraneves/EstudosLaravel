<?php

namespace App\Http\Controllers;

use App\Josue;
use Illuminate\Http\Request;

class JosueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $josues = Josue::all();
        return view('josues.index', compact('josues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('josues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Josue::create($request->all());

        return redirect()->route('josues.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Josue  $josue
     * @return \Illuminate\Http\Response
     */
    public function show(Josue $josue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Josue  $josue
     * @return \Illuminate\Http\Response
     */
    public function edit(Josue $josue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Josue  $josue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Josue $josue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Josue  $josue
     * @return \Illuminate\Http\Response
     */
    public function destroy(Josue $josue)
    {
        //
    }
}
