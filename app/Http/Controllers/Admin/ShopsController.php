<?php

namespace App\Http\Controllers\Admin;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shops = Shop::orderBy('seq', 'asc')->paginate( 50 );

        return view('admin.shops.list')->with('shops', $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.shops.form' )->with('shop', (new Shop()) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, $this->validationRules(), [], [
            'seq' => 'Ordering',
        ]);

        $shop = new Shop( $request->all() );
        $shop->enabled = ($request->get('enabled' ) == 1);
        $shop->save();

        alert('Shop Created');

        return redirect()->route('admin.shops.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('admin.shops.form', compact('shop') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        //

        $this->validate($request, $this->validationRules(), [], [
            'seq' => 'Ordering',
        ]);


        $shop->fill( $request->all() );
        $shop->enabled = ($request->get('enabled' ) == 1);
        $shop->update();

        alert('Shop Updated');

        return redirect()->route('admin.shops.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
        $shop->delete();

        alert("Shop Deleted");

        return redirect()->route('admin.shops.index');
    }


    protected function validationRules( ) {
        return [
            'name:tc'    => 'required',
            'name:en'    => 'required',
            'address:tc' => 'required',
            'address:en' => 'required',
            'latitude'   => 'required|numeric',
            'longitude'  => 'required|numeric',
            'phone'      => 'required',
            'seq'        => 'required|numeric|min:0|max:999'
        ];
    }
}
