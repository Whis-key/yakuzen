<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Http\Requests\StoreFeedback;

class Quote extends Controller
{
    public function index(){
    	$data['menu'] = 'feedback-list';

    	return \View::make('admin.feedback.list')->with($data);
    }

    public function list(Request $request){
    	$total = Feedback::get($request, true);


    	return response([
		    "draw" => $request->input('draw'),
		    "recordsTotal" => $total,
		    "recordsFiltered" => $total,
		    "data"=> Feedback::get($request)
		]);	
    }

    public function del(Request $request){
    	$id = $request->input('id');

    	if(!$id){
    		return response(['message' => 'id not found'], 500);
    	}

    	Feedback::del($id);

    	return response(['message' => 'Delete feedback success']);
    }

    public function create(){
    	$data['menu'] = 'feedback-create';
    	return \View::make('admin.feedback.create')->with($data);
    }

    public function save(StoreFeedback $request){
    	
    	$file = $request->file('image');
    	$path = $file->store('/img/quo');
    	
    	Feedback::saveFeedback(
    		$request->input('name'),
    		$request->input('address'),
    		$request->input('age'),
    		$request->input('content'),
    		'/storage/'.$path
    	);

    	$request->session()->flash('success', 1);
    	return redirect()->to(route('feedback-create'));
    }
}
