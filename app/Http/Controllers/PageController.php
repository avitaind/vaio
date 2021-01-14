<?php

namespace App\Http\Controllers;

use App\RepairTerm;
use App\Shop;
use App\WarrantyTerm;
use Illuminate\Http\Request;
use App\Services\ASPAPIService;


class PageController extends Controller
{

    ///
    ///  To Handle static pages
    ///

    public function getQuality( ) {
        return view('quality.index');
    }

    public function getQualityAzuminoFinish( ) {
        return view('quality.azumino_finish');
    }

    public function getAboutUs( ) {
        return view('aboutus');
    }

    public function getContactUs( ) {
        return view('contactus');
    }

    public function getSupport( ) {

        $warranty = WarrantyTerm::whereCode('warranty')->first();

        if (!$warranty ) {

            $warranty = new WarrantyTerm();
            $warranty->terms = "Missing Terms Information (warranty)";
        }


        $model_numbers = array_map(function( $item ) {
            return $item['model_number'];
        }, ASPAPIService::getProductModels());

        return view('support', compact('model_numbers', 'warranty'));
    }

    public function getWhereToBuy( ) {
        return view('where_to_buy');
		
		//return redirect('https://vaio-sg.nexstmall.com/');
		
    }

    public function getRepairTnc( ) {

        $term = WarrantyTerm::whereCode('repair_tnc')->first();

        if (!$term ) {

            $term = new WarrantyTerm();
            $term->terms = "Missing Terms Information (repair_tnc)";
        }


        return view('pages.repair_tnc', compact('term'));

    }

    public function getPrivacy( ) {
        return view('pages.privacy');
    }

    public function getSupportRegions(){

        return view('pages.support_regions');

    }
}
