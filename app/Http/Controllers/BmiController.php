<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BmiController extends Controller
{
    public function index(){
        return view('bmi/index');
    }
    
    public function calc(Request $request){
        $height= $request->height / 100;
        $weight= $request->weight;
        $bmi=$weight / $height **2;
        $bmi=round($bmi,2);
        return view('bmi/calc', compact('bmi'));
    }
}
