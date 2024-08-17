<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;

class ContactController extends Controller
{

    public function data (Request $request){

         //  dd($request->name);

        $lap = contact::create ([
            'Name' => $request->name,
            'Email' => $request->email,
            'message' => $request->message,

        ]);

        $lap->save();

         return redirect('/hj');
    }
   
}