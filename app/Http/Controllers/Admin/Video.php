<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVideo;
use App\Models\Vid;

class Video extends Controller
{
	public function index(){
    	$data['menu'] = 'video-list';

    	return \View::make('admin.video.list')->with($data);
    }

 	public function create(){
 		$data['menu'] = 'video-create';

    	return \View::make('admin.video.create')->with($data);
 	}

 	public function save(StoreVideo $request){
    	Vid::saveVideo(
    		$request->input('link'), 
    		$request->input('text')
    	);

    	$request->session()->flash('success', 1);
    	return redirect()->to(route('video-create'));
    }

    public function list(Request $request){
    	$total = Vid::list($request, true);


    	return response([
		    "draw" => $request->input('draw'),
		    "recordsTotal" => $total,
		    "recordsFiltered" => $total,
		    "data"=> Vid::list($request)
		]);
    }

    public function del(Request $request){
        $id = $request->input('id');

        if(!$id){
            return response(['message' => 'id not found'], 500);
        }

        Vid::del($id);

        return response(['message' => 'Delete feedback success']);
    }
}
