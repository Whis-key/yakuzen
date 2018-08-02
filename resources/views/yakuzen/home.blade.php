@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Trang chủ
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/home.js"></script>
@endsection

@section('content')
	<div class="hidden" 
		id="config"
		data-expiration="{{$expiration}}">
	</div>

	<div class="banner">
		<img src="{{url('/')}}/img/banner/doctor.png" class="doctor">

		<img src="{{url('/')}}/img/banner/tea.png" class="tea right">
		<img src="{{url('/')}}/img/banner/tea.png" class="tea left">
		<img src="{{url('/')}}/img/banner/tea.png" class="tea">

		<div class="message">
			<h2>Bí quyết sống khỏe từ Nhật Bản</h2>

			<p>Trà Yakuzen với các thành phần hoàn toàn tự nhiên, nhờ đó giúp bạn không những có được giấc ngủ ngon và sâu mà còn đem lại vóc dáng như mong đợi.</p>
		</div>

		<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
	</div>

	<div class="i-block odd">
		<h2 class="title">Vấn đề <span class="highlight">có thể bạn đang gặp phải</span></h2>

		<div class="content">
			<div class="c-row">
				<div class="card-item">
					<h4><b>Mất ngủ</b> hành hạ triền miên, khiến thần trí suy nhược</h4>
				</div>

				<div class="card-item">
					<h4>Dùng mọi giải pháp vẫn <b>không hiệu quả</b></h4>
				</div>

				<div class="card-item">
					<h4>Quá lạm dụng an thần mà dẫn tới lệ thuộc, không sử dụng thì không ngủ được</h4>
				</div>

				<div class="card-item">
					<h4><b>Cáu gắt, khó chịu</b> với mọi người xung quanh bởi vì mệt mỏi thần kinh do mất ngủ</h4>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<div class="i-block">
		<h2 class="title">Trà Yakuzen - <span class="highlight">Giải pháp hàng đầu</span> cho bệnh mất ngủ</h2>

		<div class="content">
			<div class="s-line">
				<div class="s-left">
					<img src="{{url('/')}}/img/rose.png" class="rose">

					<div class="adv">
						<h4>Công dụng chính</h4>
						<ul>
							<li>Lấy lại giấc ngủ ngon, sâu giấc chỉ từ 10 ngày sử dụng</li>
							<li>An thần, giảm stress, mệt mỏi giúp tinh thần thư thái, nâng cao chất lượng cuộc sống</li>
						</ul>
					</div>
				</div>

				<div class="s-right">
					<p><b>Trà Thực Dưỡng là sản phẩm đem lại cho khách hàng một lối sống đẹp, lành mạnh theo nguyên lý thực dưỡng, sử dụng những nguyên liệu thực dưỡng, giúp khách hàng có một cơ thể khỏe mạnh từ bên trong</b></p>

					<p>Trà thực dưỡng được nghiên cứu và điều chế dựa theo phương pháp nguyên lý Thực dưỡng từ Nhật Bản - nhằm đưa cơ thể con người trở về quân bình âm - dương. Dưới quan điểm của thực dưỡng, mọi bệnh tật đều xuất phát từ sai lầm của con người, trước tiên là việc tiêu thụ thực phẩm đi   ngược lại với quy luật của vũ trụ khiến cơ thể bị mất quân bình âm dương.</p>
				</div>

				<div class="clear"></div>

				<img src="{{url('/')}}/img/s-line.png" class="ov">
			</div>
		</div>
	</div>

	<!-- <div class="i-block odd probs">
		<div class="pt-left">
			<img src="{{url('/')}}/img/insomnia.png">
		</div>

		<div class="pt-right">
			<h2 class="title">Vấn đề <span class="highlight">có thể bạn đang gặp phải</span></h2>

			<ul>
				<li><i class="fa fa-square"></i> <b>Mất ngủ</b> hành hạ triền miên, khiến thần trí suy nhược</li>
				<li><i class="fa fa-square"></i> Dùng mọi giải pháp vẫn <b>không hiệu quả</b></li>
				<li><i class="fa fa-square"></i> Quá lạm dụng an thần mà dẫn tới lệ thuộc, không sử dụng thì không ngủ được</li>
				<li><i class="fa fa-square"></i> <b>Cáu gắt, khó chịu</b> với mọi người xung quanh bởi vì mệt mỏi thần kinh do mất ngủ</li>
			</ul>

			<a href="{{url('/')}}/lien-he" class="button">Đăng ký nhận tư vấn ngay</a>
		</div>

		<div class="clear"></div>
	</div> -->

	<!-- <div class="i-block intro">
		<div class="pt-left">
			<h2 class="title">Trà Yakuzen - <span class="highlight">Giải pháp hàng đầu</span> cho bệnh mất ngủ</h2>

			<ul>
				<li><i class="fa fa-square"></i> Lấy lại giấc ngủ ngon, sâu giấc chỉ từ 10 ngày sử dụng</li>
				<li><i class="fa fa-square"></i> Giảm lượng cholesterol và triglyceride giúp giảm khả năng đột quỵ, tai biến, tim mạch</li>
				<li><i class="fa fa-square"></i> Kiểm soát căng thẳng, lo lắng và thay đổi trạng thái, có tác dụng bảo vệ mạnh mẽ đối với thần kinh và hệ thống thần kinh khỏi bị hư hỏng</li>
				<li><i class="fa fa-square"></i> An thần, giảm stress, mệt mỏi giúp tinh thần thư thái, nâng cao chất lượng cuộc sống</li>
			</ul>

			<a href="{{url('/')}}/lien-he" class="button">Nhận cuộc gọi tư vấn mua hàng</a>
		</div>

		<div class="pt-right">
			<img src="{{url('/')}}/img/prod.png">
		</div>

		<div class="clear"></div>
	</div> -->


	<div class="i-block odd">
		<h2 class="title"><span class="highlight">THỰC Y TRÀ YAKUZEN</span> DÙNG CHO NHỮNG AI?</h2>

		<div class="content">
			<div class="c-row">
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ1.png">
					</div>

					<h4 class="main">Người mất ngủ triền miên, thần trí suy nhược</h4>
				</div>


				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ2.png">
					</div>

					<h4 class="main">Phụ nữ sau sinh, stress, áp lực trong cuộc sống</h4>
				</div>


				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ3.png">
					</div>

					<h4 class="main">Người hay bị đau đầu, đau mỏi vai gáy, thiếu mão lên não</h4>
				</div>
			</div>

			<div class="clear"></div>

			<div class="c-row">
				
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ4.png">
					</div>

					<h4 class="main">Người lao động trí óc căng thẳng hay gặp stress</h4>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ5.png">
					</div>

					<h4 class="main">Người muốn có một lối sống thực dưỡng khỏe mạnh</h4>
				</div>


				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ6.png">
					</div>

					<h4 class="main">Người muốn được ngủ một <b>giấc ngủ</b> đúng nghĩa dù đã thử rất nhiều cách</h4>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="action">
			<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
		</div>
	</div>

	<div class="i-block">
		<h2 class="title">Khách hàng nói gì về <span class="highlight">Trà Yakuzen</span></h2>

		<div class="content customer">
			<div class="sl-row">
				<a href="#" class="slide-trigger b-left" data-trigger="quote"><i class="fa fa-angle-left"></i></a>
				<a href="#" class="slide-trigger b-right" data-trigger="quote"><i class="fa fa-angle-right"></i></a>

				<div class="slider" style="width: {{sizeof($feedbacks)*50 . 'vw'}}" id="quote" data-left="0" data-right="{{sizeof($feedbacks) - 2}}">
					@foreach ($feedbacks as $feedback)
						<div class="item quote">
							<div class="cus">
								<img src="{{url('/') . $feedback->avatar}}">
								<h4 class="name">{{$feedback->name}}</h4>
								<span class="info">{{$feedback->address}}, {{$feedback->age}} tuổi</span>
								<div class="clear"></div>
							</div>
							<p class="text">"{{$feedback->content}}"</p>
						</div>
					@endforeach

					<div class="clear"></div>

				</div>
			</div>
			<div class="video center">
				<h3>Video chia sẻ của khách hàng đã sử dụng Yakuzen</h3>

				<iframe width="800" height="450" src="{{$feedbackVideoLink}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>


			<div class="action" style="padding-top: 0;padding-bottom: 50px">
				<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
			</div>
		</div>
		
	</div>

	@include('yakuzen.contact')

	<div class="i-block news odd">
		<h2 class="title">Tin tức mới nhất</h2>

		<div class="content">
			@php
				$i=0;
			@endphp

			@foreach($news as $item)
				@php
					$i++;
				@endphp

				<div class="item {{$i==sizeof($news) ? 'last' : ''}}">
					<h3 class="news-title">{{$item->title}}</h3>
					<p>{{$item->snippet}}...
					<br>
					<a href="{{url('/') . '/bai-viet/' . $nobj->convertVietnamese($item->title) . '-' . $item->id}}" target="_blank">Xem thêm</a></p>
				</div>
			@endforeach

			<div class="clear"></div>

			<div class="center action">
				<a href="{{url('/')}}/kien-thuc-mat-ngu" class="button">Xem thêm tin khác</a>
			</div>
		</div>
	</div>

	<a href="#" class="back2top button"><i class="fa fa-angle-up"></i></a>

	<a href="https://www.facebook.com/messages/t/biquyetngungonNhatBan" target="_blank" class="fb-m"><img src="{{url('/')}}/img/facebook-mess.png">
		<span>Trò chuyện qua Facebook Messager</span>
	</a>
@endsection