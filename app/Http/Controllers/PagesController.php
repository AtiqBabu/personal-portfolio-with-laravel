<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function work(){
        return view('pages.work');
    }

    public function services(){
        return view('pages.services');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function feedback(){
        return view('pages.feedback');
    }

    public function contact(){
        return view('pages.contact');
    }
}
