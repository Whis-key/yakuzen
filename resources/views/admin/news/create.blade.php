@extends('admin.template')

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
	<!-- Theme JS files -->
	<script type="text/javascript" src="{{url('/')}}/assets/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
	<!-- /theme JS files -->
	<script type="text/javascript" src="{{url('/')}}/js/news.create.js"></script>
@endsection

@section('content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Thêm bài viết mới<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				Quản trị viên có thể <code>thêm bài viết mới</code>. Phản hồi sẽ được hiển thị trên trang Kiến thức mất ngủ và trang Tư vấn. Một bài viết có thể được phân vào một trong các nhóm <strong>Kiến thức mất ngủ</strong> và <strong>Tư vấn</strong>, có thể được đánh dấu là <strong>bài viết nổi bật</strong>.

			{!!Form::open(['class' => 'form-horizontal', 'url' => route('news-save'), 'files' => true])!!}
				<fieldset class="content-group">
					<legend class="text-bold">Thông tin bài viết</legend>
				</fieldset>

				@php
					$pdata = Session::get('pdata');
				@endphp

				@if ($errors->any())
					<div class="alert alert-danger no-border">
						<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
					    <ul>
					        @foreach ($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>
					</div>
				@endif


				@if(Session::has('success'))
					@php
						$pdata = null;
					@endphp

					<div class="alert alert-success no-border">
						<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
						<strong>Chúc mừng. </strong> Lưu bài viết thành công.
				    </div>
				@endif

				<div class="form-group">
					<label class="control-label col-lg-2">Tiêu đề bài viết</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="name"
						placeholder="Nhập tiêu đề bài viết"
						value="{{$pdata&&$pdata['name'] ? $pdata['name'] : ''}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Nội dung tóm tắt</label>
					<div class="col-lg-10">
						<textarea class="form-control" rows="3" placeholder="Nhập nội dung tóm tắt cho bài viết" name="snippet">{{$pdata&&$pdata['snippet'] ? $pdata['snippet'] : ''}}</textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Hình đại diện</label>
					<div class="col-lg-10">
						{{Form::file('thumbnail', null)}}
					</div>
				</div>

				<div class="form-group">
                	<label class="control-label col-lg-2">Mục</label>
                	<div class="col-lg-10">
                        <select name="category">
                            <option value="0">Kiến thức mất ngủ</option>
                            <option value="1">Tư vấn</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
					<label class="control-label col-lg-2">Bài viết nổi bật</label>
					<div class="col-lg-10">
						<input type="checkbox" name="hot" value="1" style="margin-top:10px">
					</div>
				</div>

				 <div class="form-group">
					<label class="control-label col-lg-2">Nội dung bài viết</label>
					<div class="col-lg-12" style="margin-top:10px">
						<textarea name="content" rows="3" id="editor">{{$pdata&&$pdata['content'] ? $pdata['content'] : ''}}</textarea>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-danger">Lưu lại</button>
				</div>
			{{Form::close()}}
		</div>
	</div>
@endsection