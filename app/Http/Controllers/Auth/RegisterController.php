<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'username'=>['required', 'string', 'unique:users,username', 'min:6'],
            // 'phone'=>['nullable', 'string', 'max:11'],
            'role_as'=>['nullable', 'string'],
            // 'country'=>['nullable', 'string'],
            // 'state'=>['nullable', 'string'],
            // 'city'=>['nullable', 'string'],
            // 'zip'=>['nullable', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_as' => $data['role_as'],
            // 'username' => $data['username'],
            // 'phone' => $data['phone'],
            // 'country' => $data['country'],
            // 'state' => $data['state'],
            // 'city' => $data['city'],
            // 'zip' => $data['zip'],
            'password' => Hash::make($data['password']),
        ]);
    }


    protected function redirectTo()
    {
        $role = auth()->user()->role_as;

        switch ($role) {
            case 'lecture':
                return RouteServiceProvider::LECTURE;
            case 'school':
                return RouteServiceProvider::SCHOOL;
            case 'student':
                return RouteServiceProvider::STUDENT;
            default:
                return '/home';
        }
    }
}
