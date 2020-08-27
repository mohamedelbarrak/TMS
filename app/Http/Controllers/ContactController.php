<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class ContactController extends Controller
{
    public function newContact(){
    
    }

    public function listContacts(){

    	$usersList = Users::all();

    	//dd($contacts);//afficher
        return view('layouts.users', ['usersList' => $usersList]);//view('nomView', les variable affecte) et $contacts c'est cariable affecter au controller
    }
}
