<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $title="Welcome to Salon";
        // return view('pages.home',compact('title'));
        return view('pages.home')->with('title',$title);
    }
    
}
