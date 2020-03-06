<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Employe;
use Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(){
        return view("processus/login");
    }

    public function dashboard(){
        
        return view("processus/dashboard");
    }

    public function connexion_verif(Request $request){

        $this->validate($request,[
            "matricule"=>"required|min:8",
            "password"=>"required|alphaNum|min:5"
        ]);

        $user_data= array(
            "matricule"=>$request->get("matricule"),
            "password"=>$request->get("password")
        );

        
        
        if (Auth::attempt($request->only('matricule', 'password'))) {
            return redirect()
                ->route('dashboard')
                ->with('Welcome! Your account has been successfully created!');
        }
    else
        {
            //dd($user_data);
            return back()->with("error",'Matricule/Mot de passe incorrecte');
        }
    }

   
    
}
