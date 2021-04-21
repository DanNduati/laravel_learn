<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome To Malipo";
        //return view('pages.index',compact('title')); //method1
        return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        //passing multiple values - associative array
        $data = [
            'title'=>"Todo Page",
            'services'=>['C2B simulation','Lipa na mpesa online','Reversals']
        ];  
        return view('pages.services')->with($data);
    }
}
