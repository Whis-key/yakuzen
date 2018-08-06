@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Nội dung bài viết
@endsection

@section('description')
	<meta name="description" content="{{$post->description}}">
@endsection

@section('keywords')
	<meta name="keywords" content="{{$post->keywords}}">
@endsection

@section('script')
	<script type="text/javascript" src="{{url('/')}}/js/main.js"></script>
@endsection

@section('content')
<div class="hidden" 
	id="config"
	data-expiration="{{$expiration}}">
</div>

<div class="i-block">
	<div class="post-heading">
		<h2>{{$post->title}}</h2>
		<div>
			<span>{{date_format($post->created_at, 'd/m/Y H:i')}}</span>
			@if($post->category==0)
				<a href="{{url('/')}}/kien-thuc-mat-ngu">Kiến thức mất ngủ</a>
			@else
				<a href="{{url('/')}}/tu-van">Tư vấn</a>
			@endif
		</div>
	</div>

	<div class="post-content">
		 {!! $post->content !!}
	</div>
</div>

@include('yakuzen.contact')
@endsection