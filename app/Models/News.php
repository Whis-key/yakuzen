<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public static function get($category, $limit = 10000, $offset = 0, $hot = false){
    	if($hot){
    		$q = News::where('hot', 1)
    			->orderByRaw('rand()')
    			->limit($limit);
    	} else {
    		$q = News::where('category', $category)
    				->limit($limit)->offset($offset)
    				->orderBy('created_at', 'desc');
    	}
    		
    	return $q->get();
    }

    public static function saveNews($name, $snippet, $thumbnail, $category, $hot, $content){
    	$nw = new News();
    	$nw->title = $name;
    	$nw->snippet = $snippet;
    	$nw->thumbnail = $thumbnail;
    	$nw->category = $category;
    	$nw->hot = $hot;
    	$nw->content = $content;

    	return $nw->save();
    }

    public static function list($request, $counting = false){
    	$keyword = $request->input('search')['value'];

    	$q = News::where(function($sq) use ($keyword){
				    		$sq->where('title', 'like', "%$keyword%")
				    			->orWhere('snippet', 'like', "$%keyword%");
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

        return News::where('id', $id)->delete();
    }
}
