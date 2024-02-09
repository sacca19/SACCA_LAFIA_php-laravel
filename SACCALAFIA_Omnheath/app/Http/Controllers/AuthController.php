<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConnexionRequest;
use App\Http\Requests\InscriptionRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function get_Inscription(){
        return view ('Auth.Inscription');
    }
    public function Inscription(InscriptionRequest $InscriptionRequest){
        $access = $InscriptionRequest->only('email','Password');

        if(Auth::attempt($access)){
            return redirect()->route('home');
        }
        return back();
    }

    public function get_Connexion(){
        return view ('Auth.Connexion');
    }
    public function Connexion(ConnexionRequest $ConnexionRequest){

        User::create([
            'nom'=>$ConnexionRequest->nom,
            'Prenom'=>$ConnexionRequest->Prenom,
            'email'=>$ConnexionRequest->email,
            'Password'=> Hash::make($ConnexionRequest->Password),
            'avatar'=>$ConnexionRequest->avatar

        ]);
   }
}

