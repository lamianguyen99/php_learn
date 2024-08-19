<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	public function index(){
		return view('task1.index');
	}
        public function index2(){
                return view('task2.index');
        }

}
