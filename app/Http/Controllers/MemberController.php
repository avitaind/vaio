<?php

namespace App\Http\Controllers;

use App\ProductSurvey;
use App\Services\ASPAPIService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Country;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    /**
     * Get Profile Page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getProfile() {

        $genders = [
            'm' => __('common.Male'),
            'f' => __('common.Female'),
        ];

        $age_groups = __('common.age_group');

        $countries = $countries = Country::all()->mapWithKeys(function( $item ) {
            return [ $item['code'] =>  $item->name() ];
        })->toArray();

        $data = compact('genders', 'age_groups', 'countries');


        return view('member.profile', $data);
    }

    /**
     * Handle Profile Update
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleProfileUpdate(Request $request) {

        $this->validate($request, [
            'name'      => 'required',
            'age_group' => 'required',
            'birthday'  => 'nullable|date',
            'country'   => 'required',
            'phone'     => 'required',
        ]);

        $user = \Auth::user();
        $user->update( $request->all( ) );

        return redirect()->back()->with('message', 'Profile Updated');

    }


    /**
     *  Show Change Password Form
     */
    public function getChangePasswordForm( ) {
        return view('member.change_password');
    }

    /**
     * handleChangePassword
     */
    public function handleChangePassword(Request $request) {

        $user = \Auth::user();
        //dd($request);

        $validator = \Validator::make($request->all(), [
            'origin_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
            'new_password_confirmation' => 'required|same:new_password'
        ]);

        $validator->after(function($validator) use ($request, $user) {
            // dd($request);

            if( !\Hash::check($request->get('origin_password'), $user->password) ){
                $validator->errors()->add('origin_password', 'The current password does not correct.');
            }
        });

        if ( $validator->fails()){
            return redirect()->back()->withErrors( $validator );
        }

        $user->password = \Hash::make( $request->get('new_password') );
        $user->update();

        return redirect()->back()->with('message', 'Password has changed');

    }

    public function getMyProductList(){
        $user = \Auth::user();

        $json_data = ASPAPIService::getMyRegisteredProducts( $user );

        $products = array();

        foreach ( $json_data as $json ) {

            $product = new \stdClass();
            $product->serial_num = $json['serial_number'];
            $product->purchase_date = $json['purchase_date'];
            $product->expiration_date = $json['expiration_date'];
            $product->purchase_from = $json['purchase_from'];
            $product->model_number = $json['model_number'];
            $product->product_name = $json['model_name'];
            $products[] = $product;
        }

        return view('member.product_list', compact('products'));
    }

    public function getProductRegistrationForm( ) {


        $model_numbers = array_map(function( $item ) {
            return $item['model_number'];
        }, ASPAPIService::getProductModels());

        $age_groups = __('common.age_group');

        return view('member.product_reg_form', compact('model_numbers', 'age_groups'));

    }

    public function handleProductSNCheck(Request $request) {

       $this->validate($request, ['sn' => "required", 'model' => 'required']);

       return ASPAPIService::getSNRegistrationStatus( $request->sn, $request->model );

   }

    public function handleProductRegistration(Request $request) {


        $validator = \Validator::make($request->all(), [
            'serial_num'    => 'required|string|max:255',
            'product_model' => 'required|string',
            'purchase_from' => 'required|string|max:255',
            'purchase_date' => 'required|date',


        ])->after(function ($validator) use ($request) {

            $sn_result = ASPAPIService::getSNRegistrationStatus( $request->serial_num, $request->product_model );

            if ( !$sn_result['exists'] ) {
                $validator->errors()->add('serial_num', __('validation.serial_number_error'));
            } else if ( !$sn_result['can_register'] ) {
                $validator->errors()->add('serial_num',  __('validation.serial_number_error'));
            }
        });

        $this->validateWith( $validator );

        // Store Survery into db

        \DB::beginTransaction();

        $survey = ProductSurvey::where('serial_number', $request->serial_num)->where('user_id', \Auth::user()->id)->first();

        if (!$survey) {
            $survey = new ProductSurvey();
        }

        $survey->version = 1;
        $survey->completed_at = Carbon::now();
        $survey->user_id = \Auth::user()->id;
        $survey->gender = $request->gender;
        $survey->birthday = $request->birthday;
        $survey->age_group = $request->age;
        $survey->model_number = $request->product_model;
        $survey->serial_number = $request->serial_num;
        $survey->data = [
            'q1' => $request->question1,
            'q2' => $request->question2,
            'q3' => $request->question3,
        ];

        $survey->save();

        $result = ASPAPIService::submitProductRegistration( \Auth::user(), $request->serial_num, $request->product_model, $request->purchase_from, $request->purchase_date );

//        $expiration_timestamp = array_get($result, 'expiration_date');
//
//        $model_number = array_get($result, 'model_number');
//
//        if ( $expiration_timestamp ) {
//
//            $registration               = new ProductRegistration( $request->all() );
//            $registration->model_description = $model_number;
//            $registration->basic_month  = array_get($result, 'basic_month');
//            $registration->extra_month  = array_get($result, 'extra_month');
//            $registration->user_id      = \Auth::user()->id;
//            // Calculate Expire Date
//            $registration->warranty_expire_date = Carbon::createFromTimestamp($expiration_timestamp);
//
//            return redirect('/member/product_reg_success')->with('registration', $registration);
//        }

        \DB::commit();

        return redirect()->route('member.reg_product.complete');

    }

    public function showProductRegistrationComplete( ) {
        return view('member.product_reg_complete');
    }


}
