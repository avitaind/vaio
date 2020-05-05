<?php

namespace App\Http\Controllers;

use App\Services\ASPAPIService;
use Illuminate\Http\Request;

class ProductDriverController extends Controller
{
    //
    public function showDriverList(Request $request)
    {

        $model_number = $request->model_number;


        if ( !$model_number ) {
            return "";      // Empty
        }

        // Get drivers list from asp server.
        $all_drivers = ASPAPIService::getDriversForModelNumber($model_number);

        $total = $all_drivers->reduce(function ( $carry, $item ) {
            return $carry + count( $item );
        });

        if ( !$total ) {
            $total = 0;
        }

        return view('drivers.list', compact('all_drivers', 'total', 'model_number'));

    }
}
