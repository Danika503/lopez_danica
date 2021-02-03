<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editorial extends Controller
{
    public function index(){
        
        $editoriales = DB::table('editorial')->get();
        return view('editorial', ['editoriales' => $editoriales]);
    }
    public function listado(){
        $libros = DB::table('libro')->get();
        return view('listado', ['libros' => $libros]);

    }
}
