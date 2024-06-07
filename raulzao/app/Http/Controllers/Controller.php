<?php

namespace App\Http\Controllers;

class Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        return "Hello World!";
    }
    public function form(){
        return view('form');
    }
    public function payrollTaxes(){
        return view('payroll-taxes');
    }
}
