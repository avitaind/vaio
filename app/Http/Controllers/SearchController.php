<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NewServiceCenter;
use DB;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $searchResults = NewServiceCenter::all();
        // $searchResults = ServiceCenter::all();
        // return view('search', compact('searchResults'));
        return view('support', compact('searchResults'));

    }


    public function search(Request $request)
    {

        if($request->ajax())
        {
            $output="";
            $shops = DB::table('new_service_centers')->where('address', 'LIKE', '%'.$request->search.'%')
                                                   ->orWhere('city','LIKE','%'.$request->search.'%')
                                                   ->orWhere('state','LIKE','%'.$request->search.'%')
                                                   ->orWhere('pin','LIKE','%'.$request->search.'%')->get();

                  if($shops)
                      {
                foreach($shops as $key => $shop)
                {
                    $output.='<div class="col-md-6">
                         <div>
                            <span class="address"></span>'.$shop->address.'
                        </div>
                        <div>
                            <i class="fa fa-clock-o icon"></i>
                            '.$shop->opening_hour.'
                        </div>
                        <div>
                            <a class="tel" href="tel:'.$shop->phone.'">'.$shop->phone.'</a>
                        </div>
                    <br><br>
             </div>';


                   }
                return Response($output);

          }

        }
    }
}
