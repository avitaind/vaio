<?php

namespace App\Http\Controllers\Auth;

use App\Country;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/member';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:vaio_user_db.users',
            'password' => 'required|string|min:8|confirmed',
            'country' => 'required|size:2',
            'phone' => 'required',
            'age_group' => 'required',
            'birthday' => 'nullable|date',
            'tnc' => 'accepted',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User( $data );
        $user->password = bcrypt($data['password']);
        $user->accept_edm = ( array_get($data, 'edm')  === 'accept' );
        $user->register_region = session('country', 'in');
        $user->save();

        return $user;

    }

    public function showRegistrationForm()
    {
        $genders = [
            'm' => __('common.Male'),
            'f' => __('common.Female'),
        ];

        $age_groups = __('common.age_group');


        $countries = $countries = Country::all()->mapWithKeys(function( $item ) {
            return [ $item['code'] =>  $item->name() ];
        })->toArray();

        $data = compact('genders', 'age_groups', 'countries');

        return view('auth.register', $data);
    }


}
