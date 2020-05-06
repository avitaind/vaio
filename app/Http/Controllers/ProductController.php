<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function getProductOverview( ) {

        $locale = \App::getLocale();

        $view_file = 'products.s11.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.s11.overview', $view_data);
    }

    public function getProductSpecification( ) {

        $locale = \App::getLocale();

        $view_file = 'products.s11.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.s11.spec');
    }
    public function getProductOverview14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.se14.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.se14.overview', $view_data);
    }

    public function getProductSpecification14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.se14.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.se14.spec');
    }
    public function getProductGallery14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.se14.gallery_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.se14.gallery');
    }




	
	public function getProductOverviewSx14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx14.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.sx14.overview', $view_data);
    }

    public function getProductSpecificationSx14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx14.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.sx14.spec');
    }
    public function getProductGallerySx14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx14.gallery_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.sx14.gallery');
    }
	
	
	
	
	public function getProductOverview12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.a12.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.a12.overview', $view_data);
    }

    public function getProductSpecification12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.a12.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.a12.spec');
    }
    public function getProductGallery12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.a12.gallery_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.a12.gallery');
    }
	
	
	
	
	public function getProductOverviewSx12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx12.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.sx12.overview', $view_data);
    }

    public function getProductSpecificationSx12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx12.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.sx12.spec');
    }
    public function getProductGallerySx12( ) {

        $locale = \App::getLocale();

        $view_file = 'products.sx12.gallery_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.sx12.gallery');
    }
	
	/*FE14*/
   
 public function getProductOverviewFe14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.fe14.overview_'.$locale;

        $banners = Banner::where('type', 'product')->orderBy('seq', 'asc')->get();

        $view_data = compact('banners');

        if ( \View::exists($view_file) ) {
            return view($view_file, $view_data);
        }

        return view('products.fe14.overview', $view_data);
    }

    public function getProductSpecificationFe14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.fe14.spec_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.fe14.spec');
    }
    public function getProductGalleryFe14( ) {

        $locale = \App::getLocale();

        $view_file = 'products.fe14.gallery_'.$locale;

        if ( \View::exists($view_file) ) {
            return view($view_file);
        }


        return view('products.fe14.gallery');
    }
	
}
