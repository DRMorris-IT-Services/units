<?php

namespace duncanrmorris\units\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;

use duncanrmorris\units\App\units;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $unit_id = Str::random(60);

        units::create([
            'unit_id' => $unit_id,
            'client' => $request['client'],
            'name' => $request['name'],
            'description' => $request['description'],
            'model' =>  $request['model'],
            'serial_no' => $request['serial_no'],
            'barcode_no' =>  $request['barcode'],
            'manufactured_date' => $request['manufactured_date'],
            'warranty_date' =>  $request['warranty_date'],
            'firmware_no' =>  $request['firmware_no'],
            'software_no' => $request['software_no'],
            'last_calibration_date' => $request['last_calibration'],
            'next_calibration_date' => $request['next_calibration'],
            'notes' => $request['notes'],
            'status' => 'Review Pending',
        ]);

        return redirect('/units')->withstatus('Unit Successfully Created');
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
