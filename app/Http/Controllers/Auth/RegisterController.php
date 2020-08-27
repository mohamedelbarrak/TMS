<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
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
    protected $redirectTo = '/accueil';

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
            'entrepr' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'prenom' => ['required', 'string', 'max:255'],
            'pays' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'téléphone' => ['required', 'string', 'max:255'],
         //   'situa' => ['required'],
            //'compte_bancaire111' => ['string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        session()->flash('success', 'Bienvenue sur notre site, vous êtes connecté(e).');
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'entrepr' => $data['entrepr'],
            'password' => Hash::make($data['password']),
            'prenom' => $data['prenom'],
            'pays' => $data['pays'],
            'ville' => $data['ville'],
            'adresse' => $data['adresse'],
            'téléphone' => $data['téléphone'],
        //    'situa' => $data['situa'],
            //'compte_bancaire111' => $data['compte_bancaire111'],
        ]);
    }
    
}
