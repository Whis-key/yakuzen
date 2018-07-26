<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'registrations';

    public static function get($request, $counting = false){
    	$keyword = $request->input('search')['value'];

    	$q = Customer::where(function($sq) use ($keyword){
				    		$sq->where('name', 'like', "%$keyword%")
				    			->orWhere('phone', 'like', "%$keyword%");
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

    public static function markAsProcessed($id){
    	if(!$id){
    		return;
    	}

    	Customer::where('id', $id)
    			->update(['status' => 1]);
    }
}
