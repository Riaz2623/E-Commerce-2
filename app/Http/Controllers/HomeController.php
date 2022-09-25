<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $this->products =Product::orderBy('id','desc')->get();
        return view('front.app',['products'=>$this->products]);
    }
    
}
