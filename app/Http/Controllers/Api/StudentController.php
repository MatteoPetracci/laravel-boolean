<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function age(Request $request)
    {
        // salvo i dati che arrivano dalla request in una variabile 
        //array php da trasformare in json
        $data = $request->all();
        dd($data);
        // Stampo con postman

    }
}

// devo passare l'age e controllare quali degli studenti corrisponde con la age passata
// e stampare solo gli studenti che coincidono 