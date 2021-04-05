<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
       
        return view("product/index",compact('products'));
    }
    
    public function create(){
        return view("product/create");
    }
    
    public function store(Request $request){
        $name = $request->name;
        $price = $request->price;
        $product = new Product();
        $product->name = $name;
        $product->price = $price;
        $product->save();
        
        return redirect('/product');
    }
}