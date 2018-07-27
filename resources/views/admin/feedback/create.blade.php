@extends('admin.template')

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
@endsection

@section('content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Thêm phản hồi khách hàng mới<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				Quản trị viên có thể <code>thêm phản hồi khách hàng mới</code>. Phản hồi sẽ được hiển thị trên trang chủ tại phần <strong>Khách hàng nói gì về trà Yakkuzen</strong>.

			{!!Form::open(['class' => 'form-horizontal', 'url' => route('feedback-save'), 'files' => true])!!}
			<!-- <form class="form-horizontal" method="POST" action="{{url('/')}}/save-config"> -->
				<fieldset class="content-group">
					<legend class="text-bold">Thông tin khách hàng phản hồi</legend>
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
					<div class="alert alert-success no-border">
						<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
						<strong>Chúc mừng. </strong> Lưu phản hồi thành công.
				    </div>
				@endif

				<div class="form-group">
					<label class="control-label col-lg-2">Tên khách hàng</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="name"
						placeholder="Nhập tên khách hàng"
						value="{{$pdata&&$pdata['name'] ? $pdata['name'] : ''}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Hình đại diện</label>
					<div class="col-lg-10">

						{{Form::file('image', null)}}
						<!-- <input type="file" class="file-styled" name="avatar"> -->
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Địa chỉ khách hàng</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="address" placeholder="Nhập địa khách hàng"
						value="{{$pdata&&$pdata['address'] ? $pdata['address'] : ''}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Tuổi của khách hàng</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="age" placeholder="Nhập tuổi khách hàng"
						value="{{$pdata&&$pdata['age'] ? $pdata['age'] : ''}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Nội dung phản hồi</label>
					<div class="col-lg-10">
						<textarea rows="3" placeholder="Nhập nội dung phản hồi" class="form-control" name="content">{{$pdata&&$pdata['content'] ? $pdata['content'] : ''}}</textarea>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-danger">Lưu lại</button>
				</div>
			<!-- </form> -->
			{{Form::close()}}
		</div>
	</div>
@endsection