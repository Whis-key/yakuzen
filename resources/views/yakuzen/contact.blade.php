

<div class="contact-form" id="contact-form" style="{{$menu=='feedback' ? 'margin-top: 0' : ''}}">
	<img src="{{url('/')}}/img/contact-doctor.png">

	<div class="block">
		<h3>Đang trong thời gian khuyến mãi, để lại số điện thoại và nhận ngay cuộc gọi tư vấn miễn phí.</h3>

		<div class="timer">
			<h3>Thời gian khuyến mãi chỉ còn lại:</h3>

			<div class="item">
				<span class="number" id="d">00</span> ngày 
			</div>

			<div class="item">
				<span class="number" id="h">00</span> giờ
			</div>

			<div class="item">
				<span class="number" id="m">00</span> phút
			</div>

			<div class="item">
				<span class="number" id="s">00</span> giây
			</div>
		</div>

		<div class="form">
			<div class="form-group">
				<input type="text" name="name" placeholder="Họ và tên *" spellcheck="false" autocomplete="off" data-class="name-error">
				<span class="error-message name-error">Vui lòng nhập họ và tên</span>
			</div>

			<div class="form-group">
				<input type="text" name="phone" placeholder="Số điện thoại *" spellcheck="false" autocomplete="off" data-class="phone-error">
				<span class="error-message phone-error">Vui lòng nhập chính xác số điện thoại của bạn</span>
			</div>

			<!-- <div class="form-group">
				<textarea placeholder="Nội dung cần tư vấn" spellcheck="false" autocomplete="off"></textarea>
			</div> -->
		</div>

	</div>

	<div class="action">
		<a href="#" class="button contact-submit">Nhận cuộc gọi tư vấn</a>
	</div>
</div>