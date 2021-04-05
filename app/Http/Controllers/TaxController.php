<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxController extends Controller
{
    public function index(){
        return view("tax/index");
    }
    public function calc(Request $request){
        $tax = $request->tax * 1.10;
        $tax = floor($tax);
    
        return view('tax/calc', compact('tax'));
    }
}