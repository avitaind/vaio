<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\NewWhereToBuy;

class WhereToBuyController extends Controller
{
    // public function whereToBuy()
    // {
    //     $searchResults = NewWhereToBuy::all();
    //     return view('where_to_buy', compact('searchResults', 'data'));
    // }

    public function searchWhereToBuy(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $shops = DB::table('new_where_to_buys')->where('address', 'LIKE', '%' . $request->search . '%')
                ->orWhere('city', 'LIKE', '%' . $request->search . '%')
                ->orWhere('state', 'LIKE', '%' . $request->search . '%')
                ->orWhere('pin', 'LIKE', '%' . $request->search . '%')->get();

            if ($shops) {
                foreach ($shops as $key => $shop) {

                    $output .= '<div class="col-md-6">

                                        <div class="pb-1"><h4>  '
                        . $shop->name .
                        '</h4></div>

                                        <div><i class="fa fa-map icon"></i>  '
                        . $shop->address .
                        '</div>

                                        <div>
                                            <i class="fa fa-phone icon"></i>    '
                        . $shop->phone .
                        '</div>
                                        <br>
                                </div>';
                }
                return Response($output);
            }
        }
    }
}
