<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';

    public static function saveRegistration($name='', $phone=''){
    	if(!$name || !$phone){
    		return;
    	}

    	$r = new Registration();
    	$r->name = $name;
    	$r->phone = $phone;

    	return $r->save();
    }
}
