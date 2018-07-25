<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistration;
use App\Models\Config;
use App\Models\CustomerFeedback;
use App\Models\News;
use App\Models\Registration;

class Yakuzen extends Controller
{
    public function index(){
        $expiration = Config::getSaleOffExpiration();
        $feedbackVideoLink = Config::getFeedBackVideoLink();
        $feedbacks = CustomerFeedback::getAll();
        $news = News::get(3, 0);

        $data['news'] = $news;
        $data['feedbacks'] = $feedbacks;
        $data['feedbackVideoLink'] = $feedbackVideoLink;
        $data['expiration'] = $expiration;
    	$data['menu'] = 'home';
    	
        return \View::make('yakuzen/home')->with($data);
    }

    public function contact(){
        $expiration = Config::getSaleOffExpiration();
        
        $data['expiration'] = $expiration;
    	$data['menu'] = 'feedback';
    	return \View::make('yakuzen/feedback')->with($data);
    }

    public function news(){
    	$data['menu'] = 'news';
    	return \View::make('yakuzen/news')->with($data);
    }

    public function registration(StoreRegistration $request){
        $phone = $request->input('phone');
        $name = $request->input('name');

        Registration::saveRegistration($name, $phone);

        return response(['message' => 'Registration saved'], 200);
    }
}
