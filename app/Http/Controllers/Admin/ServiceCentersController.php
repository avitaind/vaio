<?php

namespace App\Http\Controllers\Admin;

use App\ServiceCenter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ServiceCentersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $centers = ServiceCenter::orderBy('seq', 'asc')->paginate(15);
        //
        return view('admin.service_center.index', compact('centers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service_center.form')->with('center', new ServiceCenter());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->validationRules(), [], $this->validationAttributes());

        $service_center = new ServiceCenter($request->all());
        $service_center->save();

        alert('Service Center created');

        return redirect()->route('admin.service_centers.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceCenter $serviceCenter)
    {
        //
        return view('admin.service_center.show')->with('center', $serviceCenter);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCenter $serviceCenter)
    {
        return view('admin.service_center.form')->with('center', $serviceCenter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCenter $serviceCenter)
    {
        $this->validate($request, $this->validationRules(), [], $this->validationAttributes());

        $serviceCenter->update( $request->all() );

        alert('Service Center Updated');

        return redirect()->route('admin.service_centers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceCenter $serviceCenter)
    {
        //
        $serviceCenter->delete();
        alert('Service Center Delete');
        return redirect()->route('admin.service_centers.index');
    }

    protected function validationRules(){
        return [
            'latitude'        => 'required|numeric',
            'longitude'       => 'required|numeric',
            'name:tc'         => 'required|string',
            'address:tc'      => 'required|string',
            'opening_hour:tc' => 'required|string',
            'phone:tc'        => 'required|string',
            'email:tc'        => 'required|string',
            'name:en'         => 'required|string',
            'address:en'      => 'required|string',
            'opening_hour:en' => 'required|string',
            'phone:en'        => 'required|string',
            'email:en'        => 'required|string',
            'seq' => 'required|numeric|min:0|max:999'
        ];
    }

    protected function validationAttributes( ) {
        return [
            'name:tc'         => 'Name',
            'address:tc'      => 'Address',
            'opening_hour:tc' => 'Opening Hour',
            'phone:tc'        => 'Phone',
            'email:tc'        => 'Email',
            'name:en'         => 'Name',
            'address:en'      => 'Address',
            'opening_hour:en' => 'Opening Hour',
            'phone:en'        => 'Phone',
            'email:en'        => 'Email',
            'seq' => 'Ordering',
        ];
    }
}
