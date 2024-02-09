<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;



class ContactsController extends Controller
{

    public function Contact(){

        return view('Contacts');
    }

    public function Store(Request $request){
        Contacts::create([
        'nom' => $request->nom,
        'Prenom' => $request->Prenom,
        'Telephone' => $request->Telephone,
        'email'=> $request->email,
        'avatar'=> $request->file('avatar')->store('avatars'),

        ]);
        return redirect()->route('Contact');
    }

 }
