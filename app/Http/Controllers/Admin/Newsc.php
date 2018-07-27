<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNews;
use App\Models\News;

class Newsc extends Controller
{
    public function index(){
    	$data['menu'] = 'news-list';

    	return \View::make('admin.news.list')->with($data);
    }

    public function create(){
    	$data['menu'] = 'news-create';
    	return \View::make('admin.news.create')->with($data);
    }

    public function save(StoreNews $request){
    	$file = $request->file('thumbnail');
    	if($file){
    		$path = $file->store('/img/news');
    	}

    	News::saveNews(
    		$request->input('name'), 
    		$request->input('snippet'),
    		'/storage/' . $path,
    		$request->input('category'),
    		$request->input('hot') ? 1 : 0,
    		$request->input('content')
    	);

    	$request->session()->flash('success', 1);
    	return redirect()->to(route('news-create'));
    }

    public function list(Request $request){
    	$total = News::list($request, true);


    	return response([
		    "draw" => $request->input('draw'),
		    "recordsTotal" => $total,
		    "recordsFiltered" => $total,
		    "data"=> News::list($request)
		]);
    }

    public function del(Request $request){
        $id = $request->input('id');

        if(!$id){
            return response(['message' => 'id not found'], 500);
        }

        News::del($id);

        return response(['message' => 'Delete feedback success']);
    }

    public function detail(Request $request){
        $n = News::where('id', $request->input('id'))->first();
        return response(['data' => $n]);
    }
}
