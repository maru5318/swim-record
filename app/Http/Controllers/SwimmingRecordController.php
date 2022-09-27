<?php

namespace App\Http\Controllers;

use App\Models\Swimming_Record;
use Illuminate\Http\Request;

class SwimmingRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ['sample1' => 1,'sample2' => 2,'sample3' =>3];
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
     * @param  \App\Models\Swimming_Record  $swimming_Record
     * @return \Illuminate\Http\Response
     */
    public function show(Swimming_Record $swimming_Record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Swimming_Record  $swimming_Record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Swimming_Record $swimming_Record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Swimming_Record  $swimming_Record
     * @return \Illuminate\Http\Response
     */
    public function destroy(Swimming_Record $swimming_Record)
    {
        //
    }
}
