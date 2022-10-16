<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToPerdidoController extends Controller
{
    public function index(){
        
        return view('index');
    }

    public function login(){
        return view('to-perdido.login');
    }
}
