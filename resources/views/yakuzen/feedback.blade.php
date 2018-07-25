@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Liên hệ
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/feedback.js"></script>
@endsection

@section('content')
	<div class="hidden" 
		id="config"
		data-expiration="{{$expiration}}">
	</div>

	@include('yakuzen.contact')


	<div class="map">

		<h2 class="title center">Địa chỉ văn phòng Công ty cổ phần thương mại và dịch vụ StarVi</h2>

		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.3780323608844!2d105.78850751430797!3d21.01755479353805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5abfe9afbd%3A0x67206045e240bafe!2sThang+Long+Tower!5e0!3m2!1sen!2s!4v1528042260914" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen=""></iframe>
	</div>
@endsection