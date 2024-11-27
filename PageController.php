<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('ctrlr_home');
    }
    public function about(){
        return view('ctrlr_about');
    }
    public function contact(){
        return view('ctrlr_contact');
    }
}
