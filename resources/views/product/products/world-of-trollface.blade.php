@extends('_layouts.default')

@section('title') @lang('product_products_world_of_trollface.ht_the_gioi_trollface__htbros') @stop
@section('keywords') @lang('product_products_world_of_trollface.ht_the_gioi_trollface_la_mot_tro_choi_thu_vi_nhieu_cam_bay_va_thu_thach_hay_tai_ve_va_choi_ngay_hom_nay') @stop
@section('description') @lang('product_products_world_of_trollface.ht_the_gioi_trollface_la_mot_tro_choi_thu_vi_nhieu_cam_bay_va_thu_thach_hay_tai_ve_va_choi_ngay_hom_nay') @stop
@section('image') {{url('upload/product/world-of-trollface-icon.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('product_products_world_of_trollface.ht_htbros_editer') @stop

@section('content')

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "@lang('product_products_world_of_trollface.ht_the_gioi_cua_trollface')",
  "image": "{{url('assets/upload/product/world-of-trollface-icon.png')}}",
  "description": "@lang('product_products_world_of_trollface.ht_the_gioi_trollface_la_mot_tro_choi_thu_vi_nhieu_cam_bay_va_thu_thach_hay_tai_ve_va_choi_ngay_hom_nay')",
  "mpn": "925872",
  "brand": {
    "@type": "Thing",
    "name": "Htbros"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.0",
    "reviewCount": "2"
  }
}
</script>


<!--đánh dấu trạng thái menu blog được chọn-->
<script>$("#apps-tab").css("color","#2895f1");</script>

<link href="{{url('assets/css/san-pham.css')}}" property='stylesheet' rel="stylesheet">

<section class="section">
	<div class="section-center">
		<div class="product-icon-frame">
			<img alt="@lang('product_products_world_of_trollface.ht_the_gioi_trollface')" src="{{ url('upload/product/world-of-trollface-icon.png')}}" width="150" height="150">
		</div>
		<h3 class="product-big-text">@lang('product_products_world_of_trollface.ht_the_gioi_trollface_1_0')</h3>
		<div class="product-content">
			@lang('product_products_world_of_trollface.ht_the_gioi_trollface_la_mot_tro_choi_thu_vi_nhieu_cam_bay_va_thu_thach')br>
			@lang('product_products_world_of_trollface.ht_hay_tai_ve_va_choi_ngay_hom_nay')
		</div>
		<div class="product-download">
			<a target="_blank" href="https://itunes.apple.com/us/app/world-of-trollface/id1118343772">
				<img alt="@lang('product_products_world_of_trollface.ht_tai_tro_choi_the_gioi_trollface_tren_apple_appstore__htbros')" src="{{ url('assets/image/btn-appstore.png')}}">
			</a>
			<a target="_blank" href="https://play.google.com/store/apps/details?id=com.htbros.worldoftrollface">
				<img alt="@lang('product_products_world_of_trollface.ht_tai_tro_choi_the_gioi_trollface_tren_google_playstore__htbros')" src="{{ url('assets/image/btn-googleplay.png')}}">
			</a>
		</div>
	</div>
</section>

<!--
<section class="section bg-light" style="padding-bottom: 100px;">
	<div class="section-center">
		<div class="product-img-area">
			<img alt="cờ toán việt nam" width="450" src="{{url('upload/product/ctvn-tinh-nang.png')}}"/>
		</div>
		<div class="product-content-area"  style="padding-top: 50px;">
				<h3>Các tính năng mới</h3>
				<p >
					Phiên bản 2.0 được bổ sung nhiều tính năng hoàn toàn mới<br>
					<li style="list-style-type:square;"> Tính năng chơi online giúp người chơi có thể giao lưu với nhiều cao thủ cờ toán khác</li>
					<li style="list-style-type:square;"> Tính năng chơi đối kháng trên 1 máy thỏa mãn các cuộc thách đấu gay cấn</li>
					<li style="list-style-type:square;"> Trí thông minh cũng như hiệu năng tính toán của máy được cải thiện rõ rệt trong cuộc đọ sức người với máy</li>
				</p>
		</div>
	</div>
</section>

<section class="section">
	<div class="section-center">
		<div class="product-content-area">
			<h3>Sức mạnh Trí tuệ nhân tạo trong chương trình</h3>
			<p>
				<li style="list-style-type:square;"> Tăng hiệu quả tính toán cho mỗi nước đi</li>
				<li style="list-style-type:square;"> Quyết định nước đi dựa vào đánh giá toàn bộ thế trận</li>
				<li style="list-style-type:square;"> Cắt nhánh tối ưu, giảm thời gian suy nghĩ của máy </li>
				<li style="list-style-type:square;"> Máy tự học qua lịch sử các ván cờ và các thế cờ  </li>
			</p>
		</div>
		<div class="product-img-area" style="margin-bottom: 40px;">
			<img alt="cờ toán việt nam ai" style="margin-left: 50px;" width="400" src="{{url('upload/product/ai.png')}}"/>
		</div>
	</div>
</section>


<section class="section bg-light">
	<div class="section-center"  style="padding: 0 !important;">
		<div class="product-img-area">
			<img alt="cờ toán việt nam iphone" width="490" src="{{url('upload/product/hand-holding.png')}}"/>
		</div>
		<div class="product-content-area" style="margin-top: 80px;">
			<h3>Thiết kế mới phẳng</h3>
			<p >
				Trò chơi được thiết kế với giao diện phẳng đột phá<br/>
				chú trọng tính đơn giản, thiết kế gọn gàng, tiện dụng nhất cho người dùng<br/>
				Bạn có thể tận hưởng một trải nghiệm hoàn toàn mới <br/>
				với bố cục mới mở rộng không gian cho các nút bấm<br/>
			</p>
		</div>
	</div>
</section>

<section class="section" style="padding-bottom: 100px;">
	<div class="section-center">
		<div class="product-content-area">
			<h3>Hướng dẫn chơi</h3>
			<p>
				Xem video hướng dẫn chơi game Cờ Toán <br/> Việt Nam để hiểu thêm về
				<li style="list-style-type:square;">Luật đi quân</li>
				<li style="list-style-type:square;">Luật ăn quân</li>
				<li style="list-style-type:square;">Luật thắng</li>
			</p>
			<p>
				<a target="_blank" class="more" href="https://www.youtube.com/watch?v=7WkE12gbZZg">
					Xem video hướng dẫn chơi
					<i class="fa fa-angle-right" aria-hidden="true"></i>
				</a>
			</p>
		</div>
		<div class="product-img-area" style="margin-top: 30px;">
			<iframe style="border-radius: 20px; border: 10px solid #c92c08;" width="420" height="250" src="https://www.youtube.com/embed/7WkE12gbZZg?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>
-->
@stop