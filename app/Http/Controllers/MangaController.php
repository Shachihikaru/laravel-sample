<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Manga;

class MangaController extends Controller
{
    public function index(){
        $products = Manga::get();
       
        return view("manga/index",compact("products"));
    }
    public function create(){
        return view("manga/create");
    }
    
    public function edit($id){
        $product = Manga::where('id','=',$id)->first();

        return view("manga/edit",compact('product'));
    }

    public function update(Request $request,$id){
        $product = Manga::where('id','=',$id)->first();
        $product->name = $request->name;
        $product->num = $request->num;
        $product->save();
        return redirect('/manga');    
    }

    
    public function delete($id){
        $product = Manga::where('id','=',$id)->first();
        $product->delete();

        return redirect('/manga');    
    }
    
    public function store(Request $request){
        $name = $request->name;
        $num = $request->num;
        $product = new Manga();
        $product->name = $name;
        $product->num = $num;
        $product->save();
        
        return redirect('/manga');
    }
}