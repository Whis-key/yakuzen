
<div class="top-info">
	<!-- <span class="name"><b>Công ty cổ phần thương mại và dịch vụ StarVi</b></span> -->

	<span class="address"><i class="fa fa-map-marker-alt"></i>P2602 tòa nhà Thăng Long Tower, Yên Hòa, Cầu Giấy, Hà Nội</span>

	<span class="phone">
		<i class="fa fa-phone flip"></i>
		<a href="tel:+84981735115">0981.73.5115</a> - <a href="tel:+84936358226">0936.358.226</a>
	</span>
	
	<div class="clear"></div>
</div>
<div class="header {{$menu!='home' && $menu!='feedback' ? 'alt' : ''}}">
	<div class="drd">
		<a href="{{url('/')}}"><img src="{{url('/')}}/img/drd.png"></a>
	</div>
	<div class="menu">
		<ul>
			<li class="{{$menu=='home' ? 'active' : ''}}"><a href="{{url('/')}}">Trang chủ</a></li>
			<li class="{{$menu=='product' ? 'active' : ''}}"><a href="{{url('/')}}/gioi-thieu-san-pham">Giới thiệu sản phẩm</a></li>
			<li class="{{$menu=='news' ? 'active' : ''}}"><a href="{{url('/')}}/kien-thuc-mat-ngu">Kiến thức mất ngủ</a></li>
			<li class="{{$menu=='qa' ? 'active' : ''}}"><a href="{{url('/')}}/tu-van">Tư vấn</a></li>
			<li class="last {{$menu=='feedback' ? 'active' : ''}}"><a href="{{url('/')}}/lien-he">Liên hệ</a></li>
			<span class="clear"></span>
		</ul>
	</div>

	<div class="clear"></div>
</div>  <!-- /header -->