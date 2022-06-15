<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class PageController extends Controller
{
	public function rewards(){
	   return view('pages.rewards');
	 }
	public function product(){
	return view('pages.product');
	}
	public function story(){
	return view('pages.story');
	}
	public function sustainability(){
	return view('pages.sustainability');
	}
 
}
