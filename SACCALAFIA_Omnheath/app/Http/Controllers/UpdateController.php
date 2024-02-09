<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function Modifier(){
        return view('Update.Modifier');
    }

    public function Ajouter(){
        return view('Update.Ajouter');
    }
    public function Supprimer(){
        return view('Update.Supprimer');
    }
}
