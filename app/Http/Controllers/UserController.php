<?php

namespace App\Http\Controllers;
use App\Http\Requests\UsersRequest;
use Illuminate\Http\Request;
use App\Cv;
use App\User;
use auth;
class UserController extends Controller
{

public function __construct(){ //constructeure
        $this->middleware('auth')->except('show');
        $this->middleware('admin')->except(['show','listUsers','devenAdmin','listAdmins','edit','update']); 

    $this->middleware('supadmin')->except(['show','listUsers','destroy','edit','update']);
    }

public function devenAdmin($id){
        $user = User::find($id);
        
            $user->situa = 'admin';
       
        $user->save();
        return redirect('/users');

    }

    public function listAdmins(){

/*if(Auth::user()->situa == 'admin'){
            //$usersList = User::all();
            //$usersList = User::where( auth::user()->situa != 'admin');
    //$usersList = User::where( auth::user()->situa != 'admin');
    $usersList = User::where('situa','!=','admin')->get();
        }
        else{
            $usersList = User::find($id);
            
        }*/


        //$usersList = User::all();
$usersList = User::where('situa','=','admin')->get();
        //dd($contacts);//afficher
        return view('usersAdmin', ['usersList' => $usersList]);//view('nomView', les variable affecte) et $contacts c'est cariable affecter au controller
    }






    public function listUsers(){

/*if(Auth::user()->situa == 'admin'){
            //$usersList = User::all();
            //$usersList = User::where( auth::user()->situa != 'admin');
    //$usersList = User::where( auth::user()->situa != 'admin');
    $usersList = User::where('situa','!=','admin')->get();
        }
        else{
            $usersList = User::find($id);
            
        }*/


    //	$usersList = User::all()->orWhereNull('situa');
     $usersList = User::WhereNull('situa')->get();
//$usersList = User::WhereNotIn('situa',['admin' , 'supAdmin'])->get();
    	//dd($contacts);//afficher
        return view('users', ['usersList' => $usersList]);//view('nomView', les variable affecte) et $contacts c'est cariable affecter au controller
    }
    public function destroy(Request $request, $id){//permet de supprimer un user (Non recommandé)
    	// return $request->all();
        $user = User::find($id);
if ($user->situa == 'admin') {
    $user->delete();
    return redirect('/users/Admins');
}
        $user->delete();//suppression physique définitivement
//$user->onDelete(CASCADE);
        return redirect('/users');
    }



    public function show($id){
       $user = User::find($id);

        //$this->authorize('update', $cv);

        return view('auth.show', ['user' => $user]);
    }

    public function edit($id){//permet de recuper un cv pui le mettre dans un formulaire
        if (Auth::user()->id == $id) {
        $user = User::find($id);

       // $this->authorize('update', $cv);

        return view('auth.edit', ['user' => $user]);
                                      }
        else {
            return redirect('/errors/403');
        }
    }
    public function update(UsersRequest $request, $id){//permet de modifier un cv
        if (Auth::user()->id == $id) {
        
        $user = User::find($id);

        $user->name = $request->input('name');
        $user->prenom = $request->input('prenom');

        $user->entrepr = $request->input('entrepr');
        $user->email = $request->input('email');
        $user->téléphone = $request->input('téléphone');
        $user->adresse = $request->input('adresse');
        $user->pays = $request->input('pays');
        $user->ville = $request->input('ville');
if (Auth::user()->id == 1) {
    $user->situa = "supAdmin";
}
// st

        $user->save();

        return redirect('/cvs');}
        else {
            return redirect('/errors.403');
        }
        //return redirect('/users/'.$id.'/show');
    }
}
