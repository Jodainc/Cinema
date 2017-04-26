<?php

namespace Cinema\Http\Controllers;

use Illuminate\Http\Request;

class PruController extends Controller
{
    public function index(){
    	return view('index');
    }

     public function contac(){
     	return view('contac');
    }
     public function reviews(){
     	return view('reviews');
    }
}
