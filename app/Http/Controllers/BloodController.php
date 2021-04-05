<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodController extends Controller
{
    public function blood(){
        return view('blood/blood');
    }
    public function bloodtype(Request $request){
        $blood= $request->blood;
        $message;
        if($blood=="bloodA"){
            $message="几帳面です";
        }elseif($blood=="bloodB"){
            $message="マイペースです";
        }elseif($blood=="bloodO"){
            $message="おおざっぱです";
        }elseif($blood=="bloodAB"){
            $message="珍しい";
        }
    
        return view('blood/bloodtype', compact("message"));
    }
}
