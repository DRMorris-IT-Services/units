<?php

namespace duncanrmorris\units\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

use duncanrmorris\units\App\units;
use Illuminate\Http\Request;

class UnitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(units $units)
    {
        //

        return view('units::index',[
            'units' => $units->paginate(15),
        ]);
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
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function show(units $units)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function edit(units $units)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, units $units)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\units  $units
     * @return \Illuminate\Http\Response
     */
    public function destroy(units $units)
    {
        //
    }
}
