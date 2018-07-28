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

    public static function convertVietnamese($str) {
        $str = strtolower($str);
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);

        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
        $str = preg_replace("/(Đ)/", 'D', $str);

        $str = preg_replace("/[^a-z\s]/", '', $str);

        $str = preg_replace("/[\s]+/", '-', $str);        

        return $str;
    }
}
