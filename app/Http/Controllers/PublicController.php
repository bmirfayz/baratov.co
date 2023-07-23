<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request){
        return view("index");
    }
    public function aboutus(Request $request){
        return view("aboutus");
    }
    public function portfolio(Request $request){
        $portfolios = Portfolio::all();
        return view("portfolio",compact('portfolios'));
    }
    public function contactus(Request $request){
        return view("contactus");
    }
    public function post(Request $request){
        return view("post");
    }
    public function blogs(Request $request){
        return view("blogs");
    }
    public function blog(Request $request){
        return view("blog");
    }
}
