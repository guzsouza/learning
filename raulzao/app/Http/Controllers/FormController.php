<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController
{
    public function formSubmit(Request $request){
        echo $request->first_name . " " .$request->last_name;
    }
}