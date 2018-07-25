<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yakuzen extends Controller
{
    public function index(){
    	$data['menu'] = 'home';
    	return \View::make('yakuzen/home')->with($data);
    }

    public function contact(){
    	$data['menu'] = 'feedback';
    	return \View::make('yakuzen/feedback')->with($data);
    }

    public function news(){
    	$data['menu'] = 'news';
    	return \View::make('yakuzen/news')->with($data);
    }
}
