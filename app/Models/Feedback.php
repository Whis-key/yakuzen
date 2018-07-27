<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'customer_feedbacks';
    public $timestamps = false;

    public static function get($request, $counting = false){
    	$keyword = $request->input('search')['value'];

    	$q = Feedback::where(function($sq) use ($keyword){
				    		$sq->where('name', 'like', "%$keyword%");
				    	});
    	if($counting){
    		return $q->count();
    	}


    	$order = $request->input('order')[0];
    	$orderBy = $request->input('columns')[$order['column']]['name'];
    	$orderType = $order['dir'];

    	$q->limit($request->input('length'))
			->offset($request->input('start'))
			->orderBy($orderBy, $orderType);

		return $q->get();
    }

    public static function del($id){
    	if(!$id){
    		return;
    	}

    	return Feedback::where('id', $id)->delete();
    }

    public static function saveFeedback($name, $address, $age, $content, $avatar = ""){
    	$fb = new Feedback();
    	$fb->name = $name;
    	$fb->address = $address;
    	$fb->age = $age;
    	$fb->content = $content;
    	$fb->avatar = $avatar;

    	return $fb->save();
    }
}
