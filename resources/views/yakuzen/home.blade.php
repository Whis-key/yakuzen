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

	<!-- <div class="i-block odd problems">
		<h2 class="title">Vấn đề <span class="highlight">có thể bạn đang gặp phải</span></h2>

		<div class="content">
			<div class="c-row">
				<div class="card-item">
					<h4><b>Mất ngủ</b> hành hạ triền miên, khiến thần trí suy nhược</h4>
				</div>

				<div class="card-item">
					<h4>Dùng đủ mọi giải pháp Đông Tây y vẫn <b>không hiệu quả</b></h4>
				</div>

				<div class="card-item">
					<h4>Quá lạm dụng an thần, không sử dụng thì sẽ không ngủ được</h4>
				</div>

				<div class="card-item">
					<h4><b>Cáu gắt, khó chịu</b> với mọi người xung quanh do mất ngủ</h4>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</div> -->

	<div class="i-block" style="background: #fcfcfc">
		<h2 class="title"><span class="highlight">Thực y trà Yakuzen</span> - Giải pháp hàng đầu cho <span class="">bệnh mất ngủ</span></h2>

		<div class="content">
			<div class="s-line">
				<div class="s-left">
					<img src="{{url('/')}}/img/rose.png" class="rose">

					<div class="adv">
						<h4>Công dụng chính</h4>
						<ul>
							<li>• Lấy lại giấc ngủ ngon, sâu giấc chỉ từ 1 liệu trình</li>
							<!-- <li>• An thần, giảm stress, mệt mỏi giúp tinh thần thư thái, nâng cao chất lượng cuộc sống</li> -->
							<li>• Thanh lọc đào thải mọi độc tố ra khỏi cơ thể và hạn chế sự tích tụ độc tố giúp tinh thần thư thái</li>
							<li>• Cân bằng âm - dương trong cơ thể, gia tăng khí huyết, tăng cường máu lên não để có sức khỏe từ sâu bên trong</li>
							<li>• Tăng cường sức đề kháng, phòng ngừa các bệnh lý: Thiếu máu não, tai biến mạch máu não, ung thư...</li>
						</ul>
					</div>
				</div>

				<div class="s-right">
					<!-- <h3>Thực Y Trà Yakuzen là gì?</h3> -->
					<p class=""><b>Thực Y Trà Yakuzen là sản phẩm đem lại cho khách hàng một giác ngủ ngon, một lối sống đẹp, lành mạnh theo nguyên lý Dược Thiện, nhằm đưa cơ thể con người trở về quân bình âm - dương, giúp người dùng có một cơ thể khỏe mạnh từ bên trong.</b></p>

					<!-- <p>Thực Y Trà Yakuzen được nghiên cứu và điều chế dựa theo phương pháp nguyên lý Thực dưỡng từ Nhật Bản - . Dưới quan điểm của thực dưỡng, mọi bệnh tật đều xuất phát từ sai lầm của con người, trước tiên là việc tiêu thụ thực phẩm đi   ngược lại với quy luật của vũ trụ khiến cơ thể bị mất quân bình âm dương.</p> -->
					<p>Dược Thiện là một nguyên lý chế biến các món ăn kết hợp với các thành phần thực phẩm, các loại thuốc (thảo dược tự nhiên dựa trên lý thuyết Y học cổ truyền phương Đông) và nó là một chế độ ăn uống với tất cả dinh dưỡng, hiệu ứng, màu sắc, mùi hương, hương vị, hình dạng cùng nhau.<br>
					<!-- <span>Trong chữ "dược" của Dược Thiện đã thể hiện tính chất chữa bệnh, bảo vệ cơ thể của phương pháp sử dụng thực phẩm để nuôi dưỡng cơ thể này.</span> -->
					</p>
				</div>

				<div class="clear"></div>

				<img src="{{url('/')}}/img/s-line.png" class="ov">
			</div>
		</div>
	</div>

	<div class="i-block odd">
		<h2 class="title">Thành phần <span class="highlight">thực y trà Yakuzen</span></h2>

		<div class="content">

			<div class="c-row">
				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece1.jpg">
					</div>
					<h4 class="main">Lá sen Nhật Bản</h4>
					<p class="desc">An thần tốt hơn cả tâm sen, mang đến giấc ngủ sâu và ngon hơn</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece2.jpg">
					</div>
					<h4 class="main">Nấm Linh Chi Đỏ</h4>
					<p class="desc">Đào thải gốc tự do, kháng độc tố, giảm tối đa các triệu chứng đau đầu</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece3.jpg">
					</div>
					<h4 class="main">Thiên Chi Ma</h4>
					<p class="desc">Lọc, bổ sung dưỡng chất cho máu, trị suy giảm trí nhớ, choáng váng, đau đầu</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece6.jpg">
					</div>
					<h4 class="main">Gạo lứt huyết rồng</h4>
					<p class="desc">Phòng chống viêm khớp, giảm lượng cholesterol, tốt cho tim mạch</p>
				</div>
			</div>

			<div class="clear"></div>

			<div class="c-row">
				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece5.jpg">
					</div>
					<h4 class="main">Đương quy</h4>
					<p class="desc">Cân bằng lượng hormone, điều chỉnh trạng thái cơ thể</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece4.jpg">
					</div>
					<h4 class="main">Giảo cổ lam</h4>
					<p class="desc">Tiêu mỡ, hạ mỡ máu, ổn định đường huyết, huyết áp</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece7.jpg">
					</div>
					<h4 class="main">Khổ Qua Rừng</h4>
					<p class="desc">Thanh nhiệt, giải độc, làm mát gan, xóa mờ vết nám da</p>
				</div>

				<div class="item quart">
					<div class="center">
						<img src="{{url('/')}}/img/rece/rece8.jpg">
					</div>
					<h4 class="main">Hạt Dẻ</h4>
					<p class="desc">Giảm căng thẳng, stress, kiểm soát huyết áp ổn định</p>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="action">
			<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
		</div>
	</div>

	<div class="i-block targ">
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

					<h4 class="main">Phụ nữ sau sinh, stress, <br>áp lực trong cuộc sống</h4>
				</div>


				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ3.png">
					</div>

					<h4 class="main">Người hay bị đau đầu, <br>đau mỏi vai gáy, thiếu mão lên não</h4>
				</div>
			</div>

			<div class="clear"></div>

			<div class="c-row">
				
				<div class="item triple">
					<div class="center">
						<img src="{{url('/')}}/img/targ/targ4.png">
					</div>

					<h4 class="main">Người lao động trí óc <br>căng thẳng hay gặp stress</h4>
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

					<h4 class="main">Người muốn có một <b>giấc ngủ</b> đúng nghĩa dù đã thử rất nhiều cách</h4>
				</div>
			</div>

			<div class="clear"></div>
		</div>

		<div class="action">
			<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
		</div>
	</div>

	<div class="i-block odd">
		<h2 class="title">Khách hàng nói gì về <span class="highlight">Thực Y Trà Yakuzen</span></h2>

		<div class="content customer">
			<div class="video center">
				<!-- <h3>Video chia sẻ của khách hàng</h3> -->

				<div class="sl-row">
					<a href="#" class="slide-trigger b-left prev-video" data-trigger="vid"><i class="fa fa-angle-left"></i></a>
					<a href="#" class="slide-trigger b-right next-video" data-trigger="vid"><i class="fa fa-angle-right"></i></a>
					
					<div class="slider" id="fb-video" data-index="0" data-videos="{{implode(';', $video->link)}}" data-texts="{{implode('~', $video->text)}}">
						<iframe width="100%" height="500" src="{{$video->link[0]}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen data-index="0"></iframe>
					</div>

					<div class="text-video" id="video-text">{{$video->text[0]}}</div>
				</div>
			</div>

			<!-- <div class="sl-row">
				<a href="#" class="slide-trigger b-left" data-trigger="quote"><i class="fa fa-angle-left"></i></a>
				<a href="#" class="slide-trigger b-right" data-trigger="quote"><i class="fa fa-angle-right"></i></a>

				<div class="slider" style="width: {{sizeof($feedbacks)*80 . 'vw'}}" id="quote" data-left="0" data-right="{{sizeof($feedbacks) - 2}}">
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
			</div> -->

			<div class="action" style="padding-top: 0;padding-bottom: 50px">
				<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
			</div>
		</div>
		
	</div>

	<div class="i-block">
		<h2 class="title">Giấy chứng nhận <span class="highlight">Thực Y Trà Yakuzen</span></h2>

		<div class="content">
			<div class="cert">
				<img src="{{url('/')}}/img/cert1.jpg">
				<img src="{{url('/')}}/img/cert1.jpg">
			</div>
			<div class="clear"></div>
		</div>
	</div>

	@include('yakuzen.contact')

	<div class="i-block news odd" style="background: #fcfcfc">
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