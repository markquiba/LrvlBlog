<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home(){
    	$people = ['Mark', 'Armel', 'Vito'];
	    return view('welcome', compact('people'));
    }

    public function about(){
    	return view('about');
    }
}
