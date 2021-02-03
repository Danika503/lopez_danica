<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editorial extends Controller
{
    public function index(){
        return view('editorial');
    }
    public function listado(){
        return view('listado');
    }
}
