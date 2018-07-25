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

			<!-- <div class="price">
				<span>Chỉ với</span>
			<span class="number"> 1.438.000đ</span>/hộp
			</div> -->
		</div>

		<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
	</div>

	<div class="i-block odd probs">
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
	</div>

	<div class="i-block intro">
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
	</div>

	<!-- <div class="i-block odd">
		<h2 class="title">Công dụng <span class="highlight">trà Yakuzen</span></h2>


		<div class="content">
			<div class="c-row">
				<div class="item">
					<img src="{{url('img/uses/uses1.png')}}">
					<h4 class="main">Lấy lại giấc ngủ ngon, sâu giấc chỉ từ 10 ngày sử dụng</h4>
					<p class="desc">Elitr quando accusata his ut, in eos agam principes, dictas imperdiet scripserit per et. Tale inciderint eloquentiam ius cu. Ei pro maluisset constituam, vim agam conceptam ei </p>
				</div>

				<div class="item right">
					<img src="{{url('/')}}/img/uses/uses3.png">
					<h4 class="main">Giảm lượng cholesterol và triglyceride giúp giảm khả năng đột quỵ, tai biến, tim mạch</h4>
					<p class="desc">Elitr quando accusata his ut, in eos agam principes, dictas imperdiet scripserit per et
				</div>

				<div class="clear"></div>
			</div>

			<div class="c-row">
				<div class="item">
					<img src="{{url('/')}}/img/uses/uses2.png">
					<h4 class="main">Kiểm soát căng thẳng, lo lắng và thay đổi trạng thái, có tác dụng bảo vệ mạnh mẽ đối với thần kinh và hệ thống thần kinh khỏi bị hư hỏng</h4>
					<p class="desc">Elitr quando accusata his ut, in eos agam principes</p>
				</div>

				<div class="item right">
					<img src="{{url('/')}}/img/uses/uses4.png">
					<h4 class="main">An thần, giảm stress, mệt mỏi giúp tinh thần thư thái, nâng cao chất lượng cuộc sống</h4>
					<p class="desc">Elitr quando accusata his ut, in eos agam principes, dictas imperdiet scripserit per et.</p>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="action">
			<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
		</div>
	</div> -->

	<!-- <div class="i-block">
		<h2 class="title">Thành phần <span class="highlight">thực y trà Yakuzen</span></h2>

		<div class="content">

			<div class="c-row">
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece1.jpg">
					</div>
					<h4 class="main">Lá sen Nhật Bản</h4>
					<p class="desc">An thần tốt hơn cả tâm sen, mang đến giấc ngủ sâu và ngon hơn</p>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece2.jpg">
					</div>
					<h4 class="main">Nấm Linh Chi Đỏ Hàn Quốc</h4>
					<p class="desc">Đào thải gốc tự do, kháng độc tố, giảm tối đa các triệu chứng đau đầu</p>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece3.jpg">
					</div>
					<h4 class="main">Thiên Chi Ma</h4>
					<p class="desc">Lọc, bổ sung dưỡng chất cho máu, điều trị suy giảm trí nhớ, chữa chóng mặt, choáng váng, đau đầu</p>
				</div>
			</div>

			<div class="c-row">
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece4.jpg">
					</div>
					<h4 class="main">Giảo cổ lam</h4>
					<p class="desc">Tiêu mỡ, hạ mỡ máu, ổn định đường huyết và huyết áp</p>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece5.jpg">
					</div>
					<h4 class="main">Đương quy</h4>
					<p class="desc">Cân bằng hormone, điều chỉnh trạng thái cơ thể</p>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece6.jpg">
					</div>
					<h4 class="main">Gạo lứt</h4>
					<p class="desc">Phòng chống loãng xương, viêm khớp, giảm cholesteron, ngăn đông máu, tốt cho tim mạch</p>
				</div>
			</div>

			<div class="c-row">
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece7.jpg">
					</div>
					<h4 class="main">Khổ Qua Rừng</h4>
					<p class="desc">Thanh nhiệt, giải độc, làm mát gan, xóa mờ vết nám da</p>
				</div>

				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece8.jpg">
					</div>
					<h4 class="main">Hạt Dẻ</h4>
					<p class="desc">Giảm căng thẳng, chống Stress, kiểm soát và ổn định huyết áp</p>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="action">
			<a href="#" class="button">Đăng ký tư vấn</a>
		</div>
	</div> -->

	<div class="i-block odd">
		<h2 class="title"><span class="highlight">THỰC Y TRÀ YAKUZEN</span> DÙNG CHO NHỮNG AI?</h2>

		<div class="content">
			<div class="c-row">
				<div class="item double">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ1.png">
					</div>

					<h4 class="main">Người mất ngủ triền miên, thần trí suy nhược</h4>
				</div>


				<div class="item double right">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ2.png">
					</div>

					<h4 class="main">Phụ nữ sau sinh, stress, áp lực trong cuộc sống</h4>
				</div>

				<div class="clear"></div>
			</div>

			<div class="c-row">
				<div class="item double">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ3.png">
					</div>

					<h4 class="main">Người hay bị đau đầu, đau mỏi vai gáy, thiếu mão lên não</h4>
				</div>


				<div class="item double right">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ4.png">
					</div>

					<h4 class="main">Người lao động trí óc căng thẳng hay gặp stress</h4>
				</div>

				<div class="clear"></div>
			</div>

			<div class="c-row">
				<div class="item double">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ5.png">
					</div>

					<h4 class="main">Người muốn có một lối sống thực dưỡng khỏe mạnh</h4>
				</div>


				<div class="item double right">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ6.png">
					</div>

					<h4 class="main">Người muốn được ngủ một <b>giấc ngủ</b> đúng nghĩa dù đã thử rất nhiều cách</h4>
				</div>

				<div class="clear"></div>
			</div>
		</div>

		<div class="action">
			<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
		</div>
	</div>

	<div class="i-block">
		<h2 class="title">Khách hàng nói gì về <span class="highlight">Trà Yakuzen</span></h2>

		<div class="content customer">
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

			<div class="video center">
				<h3>Video chia sẻ của khách hàng đã sử dụng Yakuzen</h3>

				<iframe width="800" height="450" src="{{$feedbackVideoLink}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>


			<div class="action">
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
					<a href="#">Xem thêm</a></p>
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