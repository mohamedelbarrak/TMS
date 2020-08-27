<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\AnRequest;
use App\Cv;
use App\user;
use auth;
class CvController extends Controller
{
    public function __construct(){ //constructeure
         $this->middleware('auth')->except('show'); //ç'est pas la peine de mettre return
    $this->middleware('admin')->except(['index','create','store','edit','update','destroy','show']);
    }



    public function index(){//lister les Cvs
        //$listcv = auth::user()->cvs;// $listcv = Cv::where('user_id', auth::user()->id)->get(); //$listcv = Cv::all();
//$listuser = Auth::user()->is_admin;
        $user = Auth::user();
        if(Auth::user()->situa == 'admin' || Auth::user()->situa == 'supAdmin'){
            $listcv = Cv::orderBy('id', 'DESC')->get();
 //$listcv = Cv::orderBy('id', 'DESC')->paginate(9);       
        }
        else{
            $listcv = Auth::user()->cvs;
            
        }
        return view('cv.index', ['cvs' =>$listcv], ['user' => $user]);
    }


// /////////////////////////////////////////////////////////////////////////////////
public function mesannonces(){
            $listcv = Auth::user()->cvs;
        
        return view('cv.index', ['cvs' =>$listcv]);
    }

    public function annoncesNonTretee(){
            
        $listcv = Cv::where('situacv','=', 'off')->get();
        return view('cv.index', ['cvs' =>$listcv]);
    }
/////////////////////////////////////////////////////////////////////////////////////

    public function create(){//affiche le formulaire de creation de cv
    	return view('cv.create');
    }

    public function store(AnRequest $request){//enregistrer un cv
    	//return $request->all();
        $cv = new Cv();


        $cv->depart = $request->input('depart');//$user->name
        $cv->arrive = $request->input('arrive');
        $cv->reel = $request->input('reel');
        $cv->palette = $request->input('palette');
        $cv->volume = $request->input('volume');
        $cv->datecomme = $request->input('datecomme');
        $cv->typemarch = $request->input('typemarch');
$cv->more = $request->input('more');



        if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('image');//image c'est le nom du fichier de stockage   we need use Illuminate\Http\UploadeFile;
        }

        $cv->user_id = auth::user()->id;
        $cv->save();
        session()->flash('success', 'La commande à été bien enregistrée.');//L\'annonce
        return redirect('cvs');
    }

    public function edit($id){//permet de recuper un cv pui le mettre dans un formulaire
    	$cv = Cv::find($id);

        $this->authorize('update', $cv);

        return view('cv.edit', ['cv' => $cv]);
    }



public function OnOff1($id){//permet de recuper un cv pui le mettre dans un formulaire
        $cv = Cv::find($id);
        
            $cv->situacv = 'on';
       
        $cv->save();
        return redirect('cvs');
    }
public function OnOff2($id){//permet de recuper un cv pui le mettre dans un formulaire
        $cv = Cv::find($id);
        
            $cv->situacv = 'offa';
       
        $cv->save();
        return redirect('cvs');
    }


    public function update(AnRequest $request, $id){//permet de modifier un cv
    	
        $cv = Cv::find($id);


        $cv->depart = $request->input('depart');//$user->name
        $cv->arrive = $request->input('arrive');
        $cv->reel = $request->input('reel');
        $cv->palette = $request->input('palette');
        $cv->volume = $request->input('volume');
        $cv->datecomme = $request->input('datecomme');
        $cv->typemarch = $request->input('typemarch');
$cv->more = $request->input('more');



        // $cv->titre = $request->input('titre');
        // $cv->presentation = $request->input('presentation');
        // $cv->adresse = $request->input('adresse');
        // $cv->numero = $request->input('numero');
if($request->hasFile('photo')){
            $cv->photo = $request->photo->store('image');//image c'est le nom du fichier de stockage   we need use Illuminate\Http\UploadeFile;
        }

        $cv->save();

        return redirect('cvs');
    }

    public function destroy(Request $request, $id){//permet de supprimer un cv (Non recommandé)
    	// return $request->all();
        $cv = Cv::find($id);
$this->authorize('delete', $cv);
        $cv->delete();//suppression physique définitivement

        return redirect('cvs');
    }

    public function show($id){
       $cv = Cv::find($id);
$user = User::find($cv->user_id);
        //$this->authorize('update', $cv);

        return view('cv.show', ['cv' => $cv], ['user' => $user]);
    }
}