@extends('admin.template')

@section('content')
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Danh sách khách hàng đăng ký nhận tư vấn <a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				<code>Khách hàng đăng ký nhận tư vấn</code> bằng việc điền thông vào form liên hệ trên Trang chủ và trang Liên hệ sẽ được hệ thống lưu lại để quản trị viên có thể theo dõi và <strong>gọi điện tư vấn</strong> cho khách hàng. Đồng thời có thể thực hiện các thao tác <strong>đánh dấu</strong> khách hàng đã liên hệ hay chưa.
			</p>
		</div>

		<table id="registration-table" class="table datatable-show-all dataTable no-footer">
			<thead>
				<tr>
					<th>#</th>
					<th>Họ tên</th>
					<th>Số điện thoại</th>
					<th>Thời gian đăng ký</th>
					<th>Trạng thái</th>
					<th>Thao tác</th>
				</tr>
			</thead>
		</table>
	</div>
@endsection