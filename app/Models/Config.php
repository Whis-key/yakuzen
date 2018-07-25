<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'configs';

    public $timestamps = false;

    public static function getSaleOffExpiration(){
    	$cf = Config::where('name', 'sale_off_expire')->first();
    	return $cf->value;
    }

    public static function getFeedbackVideoLink(){
    	$cf = Config::where('name', 'feedback_video_link')->first();
    	return $cf->value;
    }

    public static function getPrice(){
    	$cf = Config::where('name', 'price')->first();
    	return $cf->value;	
    }

    public static function store($price = 0, $expiration = 0, $video = ''){
    	$c = new Config();
    	Config::where('name', 'price')->update(['value' => $price]);
    	Config::where('name', 'sale_off_expire')->update(['value' => $expiration]);
    	Config::where('name', 'feedback_video_link')->update(['value' => $video]);

    }
}
