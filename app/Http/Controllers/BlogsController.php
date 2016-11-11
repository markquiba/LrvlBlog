<?php

namespace App\Http\Controllers;

class BlogsController extends Controller
{
    public function index(){
    	$people = ['Mark', 'Armel', 'Vito'];
    	return view('blogs.index', compact('people'));
    }
}
