@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Trang chủ
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/home.js"></script>
@endsection

@section('content')
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
			<div class="item quote">
				<div class="cus">
					<img src="{{url('/')}}/img/quo/quo1.jpg">
					<h4 class="name">Nguyễn Thanh Tâm</h4>
					<span class="info">Hà Nội, 23 tuổi</span>
					<div class="clear"></div>
				</div>
				<p class="text">
					"Cách đây 3 tháng, mất ngủ là nỗi ám ảnh với tôi, hàng đêm thức trắng, có hôm chỉ ngủ được 2-3 tiếng làm tôi cực kì căng thẳng, stress, có những lúc tưởng như bị trầm cảm. Tôi biết đến thực y trà Yakuzen qua hội nghị doanh nhân nữ châu Á, ở đó Yakuzen được sử dụng là thương hiệu độc quyền. Tôi mua 2 hộp về uống. Uống hơn nửa hộp đầu tiên không thấy tiến triển nhiều, tôi định bỏ nhưng được chuyên gia bên Yakuzen khuyên phải dùng đúng liệu trình. Hết hộp thứ nhất tôi ngủ được 4 tiếng mỗi đêm. Hiện tôi đang dùng sang hộp thứ 2, tôi đã ngủ được 6-7 tiếng mỗi đêm. Thật tuyệt vời."
				</p>
			</div>

			<div class="item quote">
				<div class="cus">
					<img src="{{url('/')}}/img/quo/quo2.jpg">
					<h4 class="name">Phạm Thanh Hằng</h4>
					<span class="info">Hả Phòng, 24 tuổi</span>
					<div class="clear"></div>
				</div>
				<p class="text">
					"Tôi bị mất ngủ đã 6 năm, mỗi đêm chỉ ngủ được 1-2 tiếng, cuộc sống rất mệt mỏi nhiều khi hay nghĩ quẩn. Gần đây con trai tôi có mua 1 hộp thực y trà Yakuzen nói là chữa mất ngủ, tôi uống thử, thấy người khỏe, nhẹ nhàng hơn, ngủ cũng được 3-4 tiếng rồi. Tôi vẫn đang sử dụng sang hộp thứ 2, cảm ơn thực y trà Yakuzen."
				</p>
			</div>

			<div class="item quote last">
				<div class="cus">
					<img src="{{url('/')}}/img/quo/quo3.jpg">
					<h4 class="name">Nguyễn Trần Cảm Tú</h4>
					<span class="info">Hà Nội, 26 tuổi</span>
					<div class="clear"></div>
				</div>
				<p class="text">
					"Chồng tôi là giám đốc của một công ty bất động sản, công việc anh ấy cũng áp lực và căng thẳng, gần đây anh ấy bị mất ngủ, mỗi đêm chỉ ngủ được 1-2 tiếng, tâm sinh lý cũng cáu gắt với tôi nhiều hơn. Tôi cũng cho anh ấy sử dụng đủ các sản phẩm khác nhau nhưng không hiệu quả. Rồi một ngày đọc quảng cáo thực y trà Yakuzen là 1 thương hiệu của Nhật Bản, tôi đặt thử. Chồng tôi uống đến nay được 20 ngày, giấc ngủ đã được 6-8 tiếng trở lại, anh ấy không cáu gắt với tôi nữa. Cảm ơn thực y trà Yakuzen!"
				</p>
			</div>

			<div class="video center">
				<h3>Video chia sẻ của khách hàng đã sử dụng Yakuzen</h3>

				<iframe width="800" height="450" src="https://www.youtube.com/embed/K7jcknnIbl0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			</div>


			<div class="action">
				<a href="{{url('/')}}/lien-he" target="_blank" class="button">Đăng ký tư vấn</a>
			</div>
		</div>
		
	</div>

	@include('yakuzen.contact')

	<div class="i-block news odd">
		<h2 class="title">Tin tức nổi bật</h2>

		<div class="content">
			<div class="item">
				<h3 class="news-title">Mất ngủ nên ăn gì, kiêng ăn gì?</h3>
				<p>Khi bạn chẳng may là một trong vô vàn người bị mất ngủ, bạn sẽ mong muốn tìm lại được một giấc ngủ sâu tự nhiên mà không ảnh hưởng tới sức khỏe. Vậy bạn bị mất ngủ nên ăn gì, uống gì để có được giấc ngủ ngon <a href="#">Xem thêm</a></p>
			</div>

			<div class="item">
				<h3 class="news-title">Mất ngủ khi mang thai: Triệu chứng và cách chữa bà bầu nên biết</h3>
				<p>Tình trạng bà bầu bị mất ngủ khi mang thai là một trong những trường hợp không còn quá xa lại nữa. Nếu như tình trạng này kéo dài sẽ ít nhiều gây ra ảnh hưởng không tốt tới sức khỏe của thai nhi và người mẹ. Vì vậy <a href="#">Xem thêm</a></p>
			</div>

			<div class="item last">
				<h3 class="news-title">Top 16 nguyên nhân mất ngủ mà bạn “không ngờ tới”</h3>
				<p>Nếu như tìm kiếm "nguyên nhân mất ngủ" lên Google.com, bạn sẽ thấy kết quả trả về lên tới 40.300.000 kết quả tìm kiếm. Điều đấy cho thấy rằng có rất nhiều người mất giấc giống như bạn, nhưng lại không biết tại sao mất ngủ. Chính vì vậy <a href="#">Xem thêm</a></p>
			</div>

			<div class="clear"></div>

			<div class="center action">
				<a href="#" class="button">Xem thêm tin khác</a>
			</div>
		</div>
	</div>

	<a href="#" class="back2top button"><i class="fa fa-angle-up"></i></a>

	<a href="https://www.facebook.com/messages/t/biquyetngungonNhatBan" target="_blank" class="fb-m"><img src="{{url('/')}}/img/facebook-mess.png">
		<span>Trò chuyện qua Facebook Messager</span>
	</a>
@endsection