<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Customer;

class Registration extends Controller
{
    public function index(){
    	$data['menu'] = 'registration';

    	return \View::make('admin.registrations')->with($data);
    }

    public function list(Request $request){
    	$total = Customer::get($request, true);


    	return response([
		    "draw" => $request->input('draw'),
		    "recordsTotal" => $total,
		    "recordsFiltered" => $total,
		    "data"=> Customer::get($request)
		]);
    }

    public function mark(Request $request){
    	$id = $request->input('id');
    	if(!$id){
    		return response(['message' => 'id not found'], 500);
    	}

    	Customer::markAsProcessed($id);

    	return response(['message' => 'success']);
    }
}
