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
    
    public function edit($id){
        $product = Product::where('id','=',$id)->first();

        return view("product/edit",compact('product'));
    }

    public function update(Request $request,$id){
        $product = Product::where('id','=',$id)->first();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();
        return redirect('/product');    
    }

    
    public function delete($id){
        $product = Product::where('id','=',$id)->first();
        $product->delete();

        return redirect('/product');    
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