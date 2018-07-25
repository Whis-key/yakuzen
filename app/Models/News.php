<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    public static function get($limit = 10, $offset = 0){
    	return News::limit($limit)->offset($offset)
    				->orderBy('created_at', 'desc')
    				->get();
    }
}
