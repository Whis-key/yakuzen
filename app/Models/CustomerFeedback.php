<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerFeedback extends Model
{
    protected $table = 'customer_feedbacks';

    public static function getAll(){
    	return CustomerFeedback::limit(1000)->offset(0)->get();
    }
}
