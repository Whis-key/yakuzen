<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vid extends Model
{
    protected $table = 'videos';
    public $timestamps = false;

    public static function saveVideo($link, $text){
    	$v = new Vid();
    	$v->link = $link;
    	$v->text = $text;

    	return $v->save();
    }

    public static function list($request, $counting = false){
    	$keyword = $request->input('search')['value'];

    	$q = Vid::where(function($sq) use ($keyword){
				    		$sq->where('text', 'like', "%$keyword%")
				    			->orWhere('link', 'like', "$%keyword%");
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

        return Vid::where('id', $id)->delete();
    }

    public static function getAll(){
    	$r = Vid::get();
    	$link = [];
    	$text = [];
    	foreach($r as $item){
    		$link[] = $item->link;
    		$text[] = $item->text;
    	}

    	return (object)[
    		'link' => $link,
    		'text' => $text
    	];
    }
}
