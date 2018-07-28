<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use App\Http\Requests\StoreConfig;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{

    public function index(){
    	$data['price'] = Config::getPrice();
    	$data['customerFeedbackVideoLink'] = Config::getFeedbackVideoLink();
    	$data['expiration'] = Config::getSaleOffExpiration();
    	$data['menu'] = 'index';
    	return \View::make('admin.index')->with($data);
    }

    public function saveConfig(StoreConfig $request){
    	Config::store(
    		$request->input('price'),
    		$request->input('expiration'),
    		$request->input('video')
    	);

    	$request->session()->flash('configSuccess', 1);
    	return redirect()->action('Admin@index');
    }

    public function test(Request $request){
    	die(json_encode($request->all()));
    }
}
