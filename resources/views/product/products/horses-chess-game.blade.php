@extends('_layouts.default')

@section('title')@lang('product_products_horses_chess_game.ht_co_bay_ngua__htbros') @stop
@section('keywords') @lang('product_products_horses_chess_game.ht_co_bay_ngua_co_bay_ngua_bay_ngua_hoang_co_bay_ngua_co_bay_ngua_co_bay_ngua_co_bay_ngua_co_ngua_choi_game_co_bay_ngua_co_bay_ngua_htbros') @stop
@section('description') @lang('product_products_horses_chess_game.ht_co_bay_ngua_la_mot_tro_choi_tri_tue_don_gian_nhung_lai_doi_hoi_nhieu_su_thong_minh_va')
@lang('product_products_horses_chess_game.ht_tinh_toan_nuoc_di_kheo_leo_o_nguoi_choi_hay_tai_game_co_bay_ngua_ve_va_choi_ngay_hom_nay') @stop
@section('image') {{url('upload/product/horses-chess-icon-1.0.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('product_products_horses_chess_game.ht_htbros_editer') @stop

@section('content')

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "@lang('product_products_horses_chess_game.ht_tro_choi_co_bay_ngua')",
  "image": "{{url('assets/upload/product/horses-chess-icon-1.0.png')}}",
  "description": "@lang('product_products_horses_chess_game.ht_co_bay_ngua_la_mot_tro_choi_tri_tue_don_gian_nhung_lai_doi_hoi_nhieu_su_thong_minh_va_tinh_toan_nuoc_di_kheo_leo_o_nguoi_choi_hay_tai_game_co_bay_ngua_ve_va_choi_ngay_hom_nay')",
  "mpn": "925872",
  "brand": {
    "@type": "Thing",
    "name": "Htbros"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.4",
    "reviewCount": "15"
  }
}
</script>

<!--đánh dấu trạng thái menu blog được chọn-->
<script>$("#apps-tab").css("color","#2895f1");</script>

<link href="{{url('assets/css/san-pham.css')}}" property="stylesheet" rel="stylesheet">

<section class="section">
	<div class="section-center">
		<div class="product-icon-frame">
			<img alt="Horses Chess Game" src="{{ url('upload/product/horses-chess-icon-1.0.png')}}" width="150" height="150">
		</div>
		<h3 class="product-big-text">@lang('product_products_horses_chess_game.ht_co_bay_ngua_1_0')</h3>
		<div class="product-content">@lang('product_products_horses_chess_game.ht_co_bay_ngua_la_mot_tro_choi_tri_tue_don_gian_nhung_lai_doi_hoi_nhieu_su_thong_minh_va')
			@lang('product_products_horses_chess_game.ht_tinh_toan_nuoc_di_kheo_leo_o_nguoi_choi__hay_nghi_ra_nhung_phuong_an_chien_luoc_va_ban_se_gianh_chien_thang_tren_ban_co')<br/>
			@lang('product_products_horses_chess_game.ht_hay_tai_ve_va_choi_ngay_hom_nay')
		</div>
		<div class="product-download">
			<a target="_blank" href="https://itunes.apple.com/us/app/horses-chess-game/id1116154036">
				<img alt="@lang('product_products_horses_chess_game.ht_tai_game_co_bay_ngua_tren_apple_appstore__htbros')" src="{{ url('assets/image/btn-appstore.png')}}">
			</a>
			<a target="_blank" href="https://play.google.com/store/apps/details?id=com.htbros.horseschess">
				<img alt="@lang('product_products_horses_chess_game.ht_tai_game_co_bay_ngua_tren_google_playstore__htbros')" src="{{ url('assets/image/btn-googleplay.png')}}">
			</a>
		</div>
	</div>
</section>


<section class="section bg-light" style="padding-bottom: 100px;">
	<div class="section-center">
		<div class="product-img-area">
			<img alt="@lang('product_products_horses_chess_game.ht_horses_chess_game__htbros')" width="450" src="{{url('upload/product/horses-chess-game-art.png')}}"/>
		</div>
		<div class="product-content-area"  style="padding-top: 50px;">
			<h3>@lang('product_products_horses_chess_game.ht_cac_tinh_nang')</h3>
			<p >@lang('product_products_horses_chess_game.ht_tro_choi_co_bay_ngua')
				<br>
			<ul style="float: left; margin-left: 20px;">
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_xay_dung_mot_tua_game_moi_doc_dao_hap_dan_ren_luyen_tu_duy_logic_va_tinh_toan_cho_moi_lua_tuoi')</li>
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_ap_dung_ly_thuyet_tri_tue_nhan_tao_de_xay_dung_mot_game_co_thong_minh_co_the_thach_thuc_nguoi_choi')</li>
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_nguoi_choi_co_the_chia_se_ket_qua_cua_minh_len_cac_trang_mang_xa_hoi_va_moi_ban_be_neu_muon')</li>
			</ul>
			</p>
		</div>
	</div>
</section>


<section class="section" style="padding: 30px 0 60px 0;">
	<div class="section-center">
		<div class="product-content-area">
			<h3>@lang('product_products_horses_chess_game.ht_suc_manh_tri_tue_nhan_tao_trong_chuong_trinh')</h3>
			<p>
			<ul style="float: left; margin-left: 20px;">
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_hieu_qua_tinh_toan_cho_moi_nuoc_di')</li>
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_quyet_dinh_nuoc_di_dua_vao_danh_gia_toan_bo_the_tran')</li>
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_cat_nhanh_toi_uu_giam_thoi_gian_suy_nghi_cua_may')</li>
				<li style="list-style-type:square;"> @lang('product_products_horses_chess_game.ht_may_tu_hoc_qua_lich_su_cac_van_co_va_cac_the_co')</li>
			</ul>
			</p>
		</div>
		<div class="product-img-area" style="margin-bottom: 40px;">
			<img alt="cờ bầy ngựa  ai - Htbros " style="margin-left: 50px;" width="400" src="{{url('upload/product/ai-1.0.png')}}"/>
		</div>
	</div>
</section>

@stop