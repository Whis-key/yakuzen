<div class="sidebar sidebar-main">
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="category-content">
				<div class="media">
					<!-- <a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a> -->
					<div class="media-body">
						<span class="media-heading text-semibold">Administrator</span>
						<div class="text-size-mini text-muted">
							<i class="icon-pin text-size-small"></i> &nbsp;Ha Noi, Vietnam
						</div>
					</div>

					<div class="media-right media-middle">
						<ul class="icons-list">
							<li>
								<!-- <a href="#"><i class="icon-cog3"></i></a> -->
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->


		<div class="sidebar-category sidebar-category-visible">
			<div class="category-content no-padding">
				<ul class="navigation navigation-main navigation-accordion">
					<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
					<li class="{{$menu=='index' ? 'active' : ''}}"><a href="{{url('/')}}/admin"><i class="icon-cog3"></i> <span>Cấu hình chung</span></a></li>
					<li class="{{in_array($menu, ['feedback-list', 'feedback-create']) ? 'active' : ''}}">
						<a href="javascript:;" class="has-ul"><i class="icon-people"></i> <span>Phản hồi khách hàng</span></a>
						<ul style="display: {{in_array($menu, ['feedback-list', 'feedback-create']) ? 'block' : 'none'}}">
							<li class="{{$menu=='feedback-create' ? 'active' : ''}}""><a href="{{url('/')}}/admin/phan-hoi-khach-hang/them-moi">Thêm phản hồi mới</a></li>
							<li class="{{$menu=='feedback-list' ? 'active' : ''}}"><a href="{{url('/')}}/admin/phan-hoi-khach-hang/ds">Danh sách phản hồi</a></li>
						</ul>
					</li>
					<li class="{{in_array($menu, ['news-list', 'news-create']) ? 'active' : ''}}">
						<a href="javascript:;" class="has-ul"><i class="icon-file-text2"></i> <span>Quản lý tin tức</span></a>
						<ul style="display: {{in_array($menu, ['news-list', 'news-create']) ? 'block' : 'none'}}">
							<li class="{{$menu=='news-create' ? 'active' : ''}}""><a href="{{url('/')}}/admin/tin-tuc/them-moi">Thêm bài viết mới</a></li>
							<li class="{{$menu=='news-list' ? 'active' : ''}}"><a href="{{url('/')}}/admin/tin-tuc/ds">Danh sách bài viết</a></li>
						</ul>
					</li>
					<li class="{{$menu=='registration' ? 'active' : ''}}"><a href="{{url('/')}}/admin/danh-sach-dang-ky"><i class="icon-phone-wave"></i> <span>Danh sách đăng ký tư vấn</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>