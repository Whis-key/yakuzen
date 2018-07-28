@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Giới thiệu sản phẩm
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/main.js"></script>
@endsection


@section('content')
	<div class="hidden" 
		id="config"
		data-expiration="{{$expiration}}">
	</div>

	<div class="i-block probs">
		<div class="pt-left">
			<img src="{{url('/')}}/img/prod.png">
		</div>

		<div class="pt-right" style="padding-top: 0px">
			<h2 class="title" style="margin-top: 10px;font-size: 27px">Trà thực dưỡng <span class="highlight">Yakuzen</span></h2>

			<ul style="padding-bottom: 20px">
				<li><i class="fa fa-square"></i> Lấy lại giấc ngủ ngon, sâu giấc chỉ từ <b>10 ngày sử dụng</b></li>
				<li><i class="fa fa-square"></i> Sản phẩm kế thừa tinh hoa nghiên cứu của <b>Nhật Bản</b> với cơ chế Dược Thiện</li>
				<li><i class="fa fa-square"></i> An thần, giảm stress, mệt mỏi giúp tinh thần thư thái, <b>nâng cao chất lượng cuộc sống</b></li>
			</ul>


			<div class="product-price" style="padding-bottom: 10px">
				<label>Giá bán lẻ</label>
				<span class="number">{{str_replace(',', '.', number_format($price))}}đ</span>
			</div>

			<div class="product-price hotline">
				<label>Hotline</label>
				<span class="number">0981.73.5115 - 0936.358.226</span>
			</div>

			<p class="gift">Đặt mua ngay tại website <span class="highlight">3 hộp sẽ được tặng 1</span> hộp Thực y trà Yakuzen</p>

			<a href="{{url('/')}}/lien-he" class="button">Đăng ký mua hàng</a>
		</div>

		<div class="clear"></div>
	</div>

	<div class="i-block odd">
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
	</div>

	<div class="i-block product-info probs">
		<div class="pt-left" style="text-align: justify;">
			<h2 class="title">Câu hỏi thường gặp</h2>

			<div class="qa">
				<ul>
					<li>
						<h3 class="q">Câu 1: Uống Thực Y Trà Yakuzennhư thế nào?</h3>
						<p class="a">
							Nên sử dụng: 2 lít nước trà thay 2 lít nước lọc mỗi ngày.
							<br>
							Trong quá trình sử dụng nên gọi hotline để được Dược sỹ tư vấn cách sử dụng, chế độ dinh dưỡng, hiệu chỉnh liều dùng trong suốt quá trình sử dụng.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 2: Dùng bao lâu có hiệu quả?</h3>
						<p class="a">
							Theo kinh nghiệm, thông thường:
							<br>
							(3 tuần đầu: 1 hộp): Không mệt mỏi khi thức dậy.
							<br>
							Lấy lại cảm giác thoải mái, nhẹ đầu óc, dễ chịu và không mệt mỏi khi tỉnh dậy. Bắt đầu dễ vào giấc hơn. Sau khi thức dậy thấy khỏe mạnh, tỉnh táo để làm việc, học tập.
							<br><br>
							(1 tháng tiếp theo: 2 hộp): Dễ ngủ, ngủ sâu.
							<br>
							Có cảm giác buồn ngủ, dễ vào giấc hơn, giảm số lần tỉnh giấc giữa đêm và bắt đầu gia tăng số giờ ngủ.
							<br><br>
							(1 tháng tiếp theo: 1 hộp): Gia tăng số giờ ngủ, tạo giấc ngủ tự nhiên.
							<br>
							Tạo giấc ngủ tự nhiên 6 -7 tiếng/ đêm, không mệt mỏi khi thức dậy và bắt đầu phục hồi hoạt động điều tiết giấc ngủ tự nhiên của hệ thần kinh.
							<br><br>
							(1 tháng tiếp theo: 1 hộp): Duy trì giấc ngủ ngon, ổn đinh, bền vững.
							<br><br>
							Sau 2 - 3 tháng, để duy trì giấc ngủ ổn định, hạn chế mất ngủ quay trở lại, phục hồi thần kinh nên uống 1 cốc vào buổi tối
						</p>
					</li>

					<li>
						<h3 class="q">Câu 3: Uống lâu ngày có an toàn không?</h3>
						<p class="a">
							Câu trả lời là hoàn toàn an toàn. Thậm chí, người dùng sẽ cảm thấy khỏe khoắn hơn bao giờ hết, tinh thần luôn sảng khoái, thần trí rõ ràng.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 4: Có uống chung Thực Y Trà với thuốc Nam, thuốc Bắc không?</h3>
						<p class="a">
							Nên ngừng thuốc Nam, thuốc Bắc sau đó mới dùng Thực Y Trà để tránh gây ảnh hưởng đến hiệu quả của Thực Y Trà Yakuzen.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 5: Khi ngủ ngon rồi thì có cần uống nữa không?</h3>
						<p class="a">
							Mất ngủ là bệnh lý dễ tái phát nên các chuyên gia khuyên bạn nên sử dụng thêm 1 cốc thực y trà Yakuzen vào buổi tối trong 3 tháng tiếp theo để giúp hệ thần kinh khỏe mạnh, duy trì giấc ngủ bền vững.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 6: Trẻ sơ sinh có dùng được không?</h3>
						<p class="a">
							Trẻ sơ sinh hoàn toàn vẫn dùng được.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 7: Đang uống Thực Y Trà Yakuzen ngủ ngon, tự nhiên 1 – 2 hôm nay vẫn uống nhưng không ngủ được?</h3>
						<p class="a">
							Trong giai đoạn này, não bộ đang phục hồi nhưng chưa ổn định hoàn toàn nên giấc ngủ còn chập chờn. Bạn nên kiên trì sử dụng, thực tế, sau vài ngày, giấc ngủ sẽ quay trở lại nhé. Các chuyên gia của chúng tôi sẽ luôn bên cạnh theo dõi tình hình của bạn.
						</p>
					</li>

					<li>
						<h3 class="q">Câu 8: Bị huyết áp cao, dùng Thực Y Trà Yakuzen có được không?</h3>
						<p class="a">
							Khác với các sản phẩm khác trên thị trường, Thực Y Trà Yakuzen tạo giấc ngủ ngon, rất phù hợp cho người huyết áp cao. BỞI VÌ, Thực Y Trà Yakuzen tác động trực tiếp vào nguyên nhân gây ra mất ngủ ở người huyết áp cao.
						</p>
					</li>
				</ul>
			</div>
		</div>

		<div class="pt-right">

			<h2 class="title">Thông tin sản phẩm</h2>

			<p class="description">
				Bạn bị <b>khó ngủ, ngủ không sâu</b>, lên giường nằm lăn qua lăn lại vài tiếng mà mắt vẫn mở "thao láo", chỉ cần tiếng động nhỏ cũng làm bạn tỉnh giấc. 

				Dù tình trạng này mới xuất hiện vài ngày cũng đã khiến bạn cảm thấy rất <b>mệt mỏi</b>, sáng dậy không thể làm việc nổi, không muốn giao tiếp, chuyện trò cùng ai. <b>Mắt thâm, da xám xịt, đầu óc căng và đau nhức</b>, lúc nào cũng muốn nằm nghỉ dù nằm cũng chẳng ngủ được.

				Nhiều ngày, nhiều năm trôi qua nhưng tình trạng vẫn chưa được cải thiện dù bạn đã dùng đủ loại từ thuốc ngủ, thuốc Nam, thuốc Bắc. 

				Dùng thuốc ngủ thì ngủ ngay nhưng sáng dậy vô cùng mệt mỏi, <b>người đờ đẫn, hại sức khỏe</b>. Các bệnh: <b>huyết áp, tim mạch, tiểu đường, thoát vị đĩa đêm, thận ứ nước, trầm cảm</b>...cứ ồ ạt kéo về như nước lũ. Chẳng bao lâu thì bị nhờn thuốc ngủ và chẳng còn cách nào để ngủ lại được nữa. 

				Huyết áp thì chập chờn. Nhiều đêm không ngủ, huyết áp tăng 170 - 180 lucs 3 - 4h sáng, lo sợ nguy cơ tai biến rình rập bất cứ lúc nào
				Cuộc sống sao mà khổ thế, cái gì cũng khổ...
				Bạn mong muốn tìm lại giấc ngủ ngon 6-7 giờ/đêm, sức khỏe hồi phục trở lại, không còn lệ thuộc thuốc an thần nữa?

				Thấu hiểu những nỗi vất vả và những khó khăn khi điều trị chứng mất ngủ, các chuyên gia hàng đầu ngành Dược đã cho ra đời sản phẩm <b>Yakuzen</b> với mong muốn giúp người mất ngủ tìm lại giấc ngủ ngon, không còn mệt mỏi khi thức dậy, hạn chế lệ thuộc thuốc an thần.
			</p>
		</div>

		<div class="clear"></div>
	</div>

	@include('yakuzen.contact')
@endsection