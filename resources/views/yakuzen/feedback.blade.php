@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen - Liên hệ
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/feedback.js"></script>
@endsection

@section('content')
	@include('yakuzen.contact')
@endsection