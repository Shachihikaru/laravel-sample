<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index(){
        return view("auto/index");
    }
    public function calc(Request $request){
        $auto = $request->auto;
        $num = $request->num;
        $sum =$auto + $num;
        return view('auto/calc', compact('sum'));
    }
}