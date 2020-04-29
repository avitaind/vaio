<?php

namespace App\Http\Controllers\Admin;

use App\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners = Banner::orderBy('type')->orderBy('seq')->get();
        return view('admin.banners.list', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return $this->formView( new Banner( ));
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

        $banner = new Banner( $request->all() );
        $banner->image_path_en = $this->storeImage($request, 'image_en');
        $banner->image_path_tc = $this->storeImage($request, 'image_tc');
        $banner->mobile_path_en = $this->storeImage($request, 'mobile_image_en');
        $banner->mobile_path_tc = $this->storeImage($request, 'mobile_image_tc');

        $banner->save();

        alert("Banner Created");

        return redirect()->route('admin.banners.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
        return $this->formView($banner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //banner

        $banner->fill( $request->all() );

        if ( $file_path = $this->storeImage($request, 'image_en') ) {
            $banner->image_path_en = $file_path;
        }

        if ( $file_path = $this->storeImage($request, 'image_tc') ) {
            $banner->image_path_tc = $file_path;
        }

        if ( $file_path = $this->storeImage($request, 'mobile_image_en') ) {
            $banner->mobile_path_en = $file_path;
        }

        if ( $file_path = $this->storeImage($request, 'mobile_image_tc') ) {
            $banner->mobile_path_tc = $file_path;
        }


        $banner->update();

        alert("Banner Updated");

        return redirect()->route('admin.banners.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
        $banner->delete();
        alert('Banner Deleted');
        return redirect()->route('admin.banners.index');

    }

    protected function formView(Banner $banner) {

        $types = [
            'home' => 'Homepage',
            'product' => 'Product',
            'offer' => 'Offer'
        ];

        return view('admin.banners.form', compact('banner', 'types'));
    }

    protected function storeImage(Request $request, $file_key) {

        if ( $request->hasFile($file_key) ) {
            $file = $request->file($file_key);
            $path = $file->store('banners', 'public');
            return $path;
        } else {
            return null;
        }
    }
}
