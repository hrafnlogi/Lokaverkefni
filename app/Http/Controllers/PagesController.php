<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    //
    public function home(){
        $people = ["hrafn", "Harold", "kim yong un"];
        return view('welcome', compact('people'));
    }
    public function about(){
        return view('pages.about');
    }
    public function hrafn(){
        return view('pages.hrafn');
    }
}
