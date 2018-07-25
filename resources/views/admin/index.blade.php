@extends('admin.template')

@section('content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Cấu hình hệ thống<a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				Thay đổi các giá trị <code>cấu hình</code> và lưu lại để thay đổi giá trị đang được thể hiện trên trang chủ, Danh sách cấu hình bao gồm <strong>Giá sản phẩm</strong> - Thể hiện trong trang chi tiết sản phẩm và Trang chủ, <strong>Số ngày hết hạn khuyến mãi</strong> - Thể hiện trong form liên hệ đăng ký tư vấn, <strong>Link video phản hồi từ khách hàng</strong> - Thể hiện phần phản hồi khách hàng trên trang chủ
			</p>

			{{Form::open(['class' => 'form-horizontal', 'action' => 'Admin@saveConfig'])}}
			<!-- <form class="form-horizontal" method="POST" action="{{url('/')}}/save-config"> -->
				<fieldset class="content-group">
					<legend class="text-bold">Danh sách cấu hình</legend>
				</fieldset>

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


				@if(Session::has('configSuccess'))
					<div class="alert alert-success no-border">
						<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
						<strong>Chúc mừng. </strong> Lưu cấu hình thành công.
				    </div>
				@endif

				<div class="form-group">
					<label class="control-label col-lg-2">Giá sản phẩm</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="price" placeholder="Nhập giá sản phẩm" value="{{$price}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Số ngày hết hạn khuyến mãi</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="expiration" placeholder="Nhập giá trị" value="{{$expiration}}">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-lg-2">Video phản hồi khách hàng</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="video" placeholder="Nhập link video" value="{{$customerFeedbackVideoLink}}">
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