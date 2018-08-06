<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRegistration;
use App\Models\Config;
use App\Models\CustomerFeedback;
use App\Models\News;
use App\Models\Registration;
use App\Models\Vid;

class Yakuzen extends Controller
{
    public function index(){
        $expiration = Config::getSaleOffExpiration();
        $feedbackVideoLinks = Config::getFeedBackVideoLinks();
        $feedbacks = CustomerFeedback::getAll();
        $news = News::get(null, 3, 0, true);
        $videos = Vid::getAll();

        $data['video'] = $videos;
        $data['nobj'] = new News();
        $data['news'] = $news;
        $data['feedbacks'] = $feedbacks;
        $data['feedbackVideoLink'] = $feedbackVideoLinks;
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
        $news = News::get(0);
        $hot = News::get(0, 6, 0, true);

        $data['hotItems'] = $hot;
        $data['items'] = $news;
    	$data['menu'] = 'news';
        $data['news'] = new News();
    	return \View::make('yakuzen/news')->with($data);
    }

    public function qa(){
        $news = News::get(1);
        $hot = News::get(null, 6, 0, true);

        $data['hotItems'] = $hot;
        $data['items'] = $news;
        $data['menu'] = 'qa';
        $data['news'] = new News();
        return \View::make('yakuzen/news')->with($data);
    }

    public function registration(StoreRegistration $request){
        $phone = $request->input('phone');
        $name = $request->input('name');

        Registration::saveRegistration($name, $phone);

        return response(['message' => 'Registration saved'], 200);
    }

    public function apost($params){
        $expiration = Config::getSaleOffExpiration();
        $id = preg_replace("/[^0-9]/", "", $params);
        $n = News::where('id', $id)->first();

        if(empty($n)){
            return redirect()->to(route('homepage'));
        }

        $data['expiration'] = $expiration;
        $data['menu'] = $n->category ? 'qa' : 'news';
        $data['post'] = $n;

        return \View::make('yakuzen.post')->with($data);
    }

    public function product(){
        $expiration = Config::getSaleOffExpiration();
        $price = Config::getPrice();

        $hot = News::get(0, 6, 0, true);
        $data['news'] = new News();
        $data['hotItems'] = $hot;
        $data['expiration'] = $expiration;
        $data['price'] = $price;
        $data['menu'] = 'product';

        return \View::make('yakuzen.product')->with($data);
    }
}
