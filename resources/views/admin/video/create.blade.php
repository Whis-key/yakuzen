@extends('admin.template')

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
@endsection

@section('content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Thêm video phản hồi mới<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				Quản trị viên có thể <code>thêm video phản hồi khách hàng mới</code>. Phản hồi sẽ được hiển thị trên trang chủ tại phần <strong>Khách hàng nói gì về trà Yakkuzen</strong>.

			{!!Form::open(['class' => 'form-horizontal', 'url' => route('video-save')])!!}
			<!-- <form class="form-horizontal" method="POST" action="{{url('/')}}/save-config"> -->
				<fieldset class="content-group">
					<legend class="text-bold">Thông tin video phản hồi</legend>
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
						<strong>Chúc mừng. </strong> Lưu phản hồi thành công.
				    </div>
				@endif

				<div class="form-group">
					<label class="control-label col-lg-2">Link nhúng Youtube</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="link"
						placeholder="Nhập link"
						value="{{$pdata&&$pdata['link'] ? $pdata['link'] : ''}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Text</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="text"
						placeholder="Nhập text"
						value="{{$pdata&&$pdata['text'] ? $pdata['text'] : ''}}">
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