<?php

namespace App\Http\Controllers;

use App\Content;

class PagesController extends Controller
{
    public function home(){
        $contents = Content::all();
    	$people = ['Mark', 'Armel', 'Vito'];
	    return view('welcome', compact('people', 'contents'));
    }

    public function about(){
    	return view('about');
    }

    public function single(){
    	return view('single');
    }
}
