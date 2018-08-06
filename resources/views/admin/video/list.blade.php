@extends('admin.template')

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/js/video.list.js"></script>
@endsection

@section('content')
<div id="feedback-list">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Danh sách phản hồi từ khách hàng <a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				<code>Phản hồi khách hàng</code> hiển thị trên Trang chủ. Quản trị viên có thể quản lý danh sách cùng với các thao táo <strong>Chỉnh sửa</strong>, <strong>xóa bỏ</strong> các phản hồi.
			</p>
		</div>

		<table id="registration-table" class="table datatable-show-all dataTable no-footer">
			<thead>
				<tr>
					<th>#</th>
					<th>Id</th>
					<th>Link nhúng</th>
					<th width="30%">Text</th>
					<th class="text-center">Thao tác</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
@endsection