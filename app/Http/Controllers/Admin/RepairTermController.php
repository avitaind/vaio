<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RepairTerm;

class RepairTermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $repair_terms = RepairTerm::all();
        return view('admin.repair_terms.list', compact('repair_terms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $repair_term = new RepairTerm();

        return view('admin.repair_terms.form', compact('repair_term'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'message' => 'required',
            'locale' => 'required',
        ]);

        if ( $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $repairTerm = RepairTerm::create($request->all());
        alert('Repair T&C created');
        return redirect()->route('admin.repair_tnc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RepairTerm  $repairTerm
     * @return \Illuminate\Http\Response
     */
    public function show(RepairTerm $repairTerm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RepairTerm  $repairTerm
     * @return \Illuminate\Http\Response
     */
    public function edit(RepairTerm $repair_tnc)
    {

        return view('admin.repair_terms.form')->with('repair_term', $repair_tnc);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RepairTerm  $repairTerm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RepairTerm $repair_tnc)
    {

        $validator = \Validator::make($request->all(), [
            'title' => 'required',
            'message' => 'required',
            'locale' => 'required',
        ]);

        if ( $validator->fails() ){
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $repair_tnc->update($request->all());
        alert('Repair T&C updated');
        return redirect()->route('admin.repair_tnc.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RepairTerm  $repairTerm
     * @return \Illuminate\Http\Response
     */
    public function destroy(RepairTerm $repair_tnc)
    {
        //
    }

}
