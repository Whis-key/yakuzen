@extends('yakuzen.template')

@section('title')
	Trà thực dưỡng Yakuzen | Kiến thức mất ngủ
@endsection

@section('content')
	<div class="i-block news-block">
		<div class="left">
			@foreach($items as $item)
			<div class="news-item">
				<img src="{{url('/') . $item->thumbnail}}">

				<h4>{{$item->title}}</h4>
				<div class="info"><i class="fa far-calendar-o"></i>Ngày {{date_format($item->created_at, 'd/m/Y')}} lúc {{date_format($item->created_at, 'H:i')}}</div>

				<p>{{\Illuminate\Support\Str::words($item->snippet, 30, '...')}}</p>

				<a href="#">Xem thêm</a>
			</div>
			@endforeach
		</div>

		<div class="right">
			<h3 class="right-title">Tin tức nổi bật</h3>

			@foreach($hotItems as $item)
			<div class="f-item">
				<a href="#">
					<img src="{{url('/') . $item->thumbnail}}">

					<h4>{{\Illuminate\Support\Str::words($item->title, 8, '...')}}</h4>
				</a>

				<div class="clear"></div>
			</div>
			@endforeach

			<h4 class="right-title" style="margin-bottom: 10px;margin-top: 40px">Fanpage</h4>

			<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FbiquyetngungonNhatBan&amp;tabs&amp;width=270&amp;height=180&amp;small_header=false&amp;adapt_container_width=true&amp;hide_cover=false&amp;show_facepile=true&amp;appId=481481692186545" width="280" height="190" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowtransparency="true"></iframe>
		</div>
		
		<div class="clear"></div>
	</div>
@endsection