<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function data (){

        $lap = contact::create ([
            'Name' => '',
            'Email' => '',
            'message' => '',

        ]);

        $lap->save();
    }
}
