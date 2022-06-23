<?php

namespace App\Http\Controllers;

use App\Models\ApprovedPrintingPress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApprovedPrintingPressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvedPress = DB::table('approved_printing_presses')
            ->join('people', 'people.id', '=', 'approved_printing_presses')
            ->where('people.id', '>', 0)
            ->select('approved_printing_presses.printing_press_name as printing_press', 'approved_printing_presses.press_address as press_address', 'people.name as owner_name')
            ->get();
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
     * @param  \App\Models\ApprovedPrintingPress  $approvedPrintingPress
     * @return \Illuminate\Http\Response
     */
    public function show(ApprovedPrintingPress $approvedPrintingPress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ApprovedPrintingPress  $approvedPrintingPress
     * @return \Illuminate\Http\Response
     */
    public function edit(ApprovedPrintingPress $approvedPrintingPress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ApprovedPrintingPress  $approvedPrintingPress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ApprovedPrintingPress $approvedPrintingPress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ApprovedPrintingPress  $approvedPrintingPress
     * @return \Illuminate\Http\Response
     */
    public function destroy(ApprovedPrintingPress $approvedPrintingPress)
    {
        //
    }
}