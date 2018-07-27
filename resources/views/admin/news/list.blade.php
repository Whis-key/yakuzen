@extends('admin.template')

@section('script')
	<script type="text/javascript" src="{{url('/')}}/assets/js/core/app.js"></script>
	<script type="text/javascript" src="{{url('/')}}/js/news.list.js"></script>
@endsection

@section('content')
<div id="news">
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Danh sách bài viết <a class="heading-elements-toggle"><i class="icon-more"></i></a></h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			<p class="content-group-lg">
				<code>Danh sách bài viết</code> sẽ hiển thị trên trang Kiến thức mất ngủ và Tư vấn. Quản trị viên có thể quản lý danh sách bài viết, theo dõi số người đã xem bài viết, đánh đấu một bài viết có phải bài viết nổi bật hay không, chỉnh sửa nội dung bài viết. Do đó có thể tối ưu từng bài viết.
			</p>
		</div>

		<table id="registration-table" class="table datatable-show-all dataTable no-footer square">
			<thead>
				<tr>
					<th>#</th>
					<th>Hình đại diện</th>
					<th width="15%">Tiêu đề</th>
					<th width="20%">Tóm tắt</th>
					<th>Mục</th>
					<th>Ngày đăng</th>
					<th>Nổi bật</th>
					<th>Xem</th>
					<th width="10%" class="text-center">Thao tác</th>
				</tr>
			</thead>
		</table>
	</div>

	<div id="modal" class="modal fade in" style="background: rgba(0,0,0,.8)">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header" style="padding-top: 50px;padding-left: 70px;padding-right: 70px">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h5 class="modal-title" style="font-size: 21px;font-weight: 500">@{{modal.title}}</h5>
				</div>

				<div class="modal-body" style="padding: 20px 70px" v-html="modal.body">

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection