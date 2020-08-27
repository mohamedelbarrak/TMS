<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\user;
use auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$listcv = Cv::all();
        $listcv = Cv::orderBy('id', 'DESC')->paginate(9);
        
        return view('layouts.accueil', ['cvs' =>$listcv]);//return view('home');
       // return redirect('cvs');
    }
}
