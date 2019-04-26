@extends('_layouts.default')

@section('title')@lang('home_home.ht_htbros_software') | @lang('home_home.ht_title') @stop
@section('keywords') @lang('home_home.ht_htbros_keywords')  @stop
@section('description')@lang('home_home.ht_htbros_description') @stop
@section('image') {{url('assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('home_home.ht_quan_tri_htbros') @stop
@section('head')

	<script> $( document ).ready(function() { $(".htbros-logo").attr('src','assets/image/logo-active.png'); }); </script>

    {{-- Náº¿u lÃ  host tháº­t -> enable google analytics --}}
    @if(strpos(URL::to('/'), 'htbros.com') !== false)
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-51115269-1', 'auto');
            ga('send', 'Visit home');
        </script>
    @endif


@stop
@section('content')

	<div class="home-container-1">
		<div class="main-center">
			<div class="cover-content">
				<h2><span id="typed">@lang('home_home.ht_muc_tieu_lon_giac_mo_lon') </span></h2>
			</div>
		</div>
	</div>
	<div class="main home-container-2">
		<div class="main-center">
			<h1>@lang('home_home.ht_chung_toi_nhan_dat_hang_outsource')</h1>
			<p>@lang('home_home.ht_lien_he_de_dat_hang')</p>
			<p class="home-contact"><a class="btn" href="mailto:contact@htbros.com"><i class="fa fa-envelope"></i> contact@htbros.com</a></p>
			<div class="col-sm-4" style="padding-left: 0;">
				<div class="wwd">
					<div class="wwd-head">
						<img class="_5y00 img" src="{{asset('assets/image/home-icon/mobile-design.png')}}" alt="outsource á»©ng dá»¥ng di Ä‘á»™ng icon">
						<span class="wwd-head-title">@lang('home_home.ht_ung_dung_di_dong')</span>
					</div>
					<div class="wwd-intro">
						<span>@lang('home_home.ht_phat_trien_ung_dung_tren_di_dong_theo_yeu_cau_cua_khach_hang')</span>
					</div>
					<div class="wwd-body">
						<a>@lang('home_home.ht_thoi_gian_phat_trien_sieu_toc')</a>
						<a>@lang('home_home.ht_ung_dung_da_nen_tang')</a>
						<a>@lang('home_home.ht_ho_tro_kip_thoi')</a>
						<a>@lang('home_home.ht_gia_ca_canh_tranh')</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wwd">
					<div class="wwd-head">
						<img class="_5y00 img" src="{{asset('assets/image/home-icon/web-design.png')}}" alt="">
						<span class="wwd-head-title">@lang('home_home.ht_ung_dung_web')</span>
					</div>
					<div class="wwd-intro">
						<span>@lang('home_home.ht_xay_dung_ung_dung_web_theo_yeu_cau_cua_khach_hang')</span>
					</div>
					<div class="wwd-body">
						<a>@lang('home_home.ht_mien_phi_tu_van')</a>
						<a>@lang('home_home.ht_giao_dien_ho_tro_day_du_man_hinh')</a>
						<a>@lang('home_home.ht_toi_uu_hoa_seo')</a>
						<a>@lang('home_home.ht_thiet_ke_gon_gang_dep_mat')</a>
						<a>@lang('home_home.ht_ho_tro_kip_thoi')</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="wwd">
					<div class="wwd-head">
						<img class="_5y00 img" src="{{asset('assets/image/home-icon/gaming-icon.png')}}" alt="">
						<span class="wwd-head-title">@lang('home_home.ht_tro_choi_di_dong')</span>
					</div>
					<div class="wwd-intro">
						<span>@lang('home_home.ht_xay_dung_tro_choi_di_dong_da_nen_tang_theo_yeu_cau_khach_hang')</span>
					</div>
					<div class="wwd-body">
						<a>@lang('home_home.ht_cac_tua_game_2d_don_gian')</a>
						<a>@lang('home_home.ht_ho_tro_da_nen_tang')</a>
						<a>@lang('home_home.ht_cong_nghe_unity')</a>
						<a>@lang('home_home.ht_thoi_gian_phat_trien_nhanh')</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main home-container-3">
		<div class="main-left"></div>
		<div class="main-content">
			<h1>@lang('home_home.ht_khach_hang_cua_htbros')</h1>
			<p>@lang('home_home.ht_tom_tat_ve_doi_tac')</p>
			<div class="count-container-box">
				<div class="circle-count-container"> <div class="circle-count"><span class="count-up">5</span></div></div>
				<span class="circle-count-title">@lang('home_home.ht_quoc_gia')</span>
			</div>
			<div class="count-container-box">
				<div class="circle-count-container"  style="width: 80px; height: 80px;">
					<div class="circle-count cc-20" style="width: 60px; height: 60px; padding-top: 12px;">
						<span class="count-up">20</span>+</div>
					</div>
				<span class="circle-count-title">@lang('home_home.ht_du_an_da_hoan_thanh')</span>
			</div>
		</div>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
        <script src="{{ asset('assets/plugin/counterup/jquery.counterup.min.js') }}"></script>
		<script type="text/javascript">

			var showCount = 0;

			$(window).on('scroll', function () {

			    var scrollTop     = $(window).scrollTop();
			    var elementOffset = $('.home-container-3').offset().top
			    var distance      = (elementOffset - scrollTop);

			    if(distance <= 150 && showCount == 0){
			        $('.count-up').counterUp({
	                    delay: 10,
	                    time: 500
	                });
	                showCount = 1;
	            }
			});
        </script>
	</div>

	<div class="main home-container-4">
		<div class="main-center">
			<h1>@lang('home_home.ht_nen_tang_cong_nghe_chung_toi_su_dung')</h1>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-unity-logo.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-ios-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-android-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-apache-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-nginx-icon.png')}}"/></div>

			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-php-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-laravel-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-git-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-ionic-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-cordova-logo.png')}}"/></div>
			
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-angular-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-vue-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-jquery-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-xbox-icon.png')}}"/></div>
			<div class="technology-box"><img src="{{asset('assets/image/home-icon/home-vr-logo.png')}}"/></div>
		</div>
	</div>

	<div class="main home-container-5">
		<div class="main-center">
		<div class="tech-partner btn">@lang('home_home.ht_doi_tac_cong_nghe')</div>
			<img class="partner" height="50px" src="{{asset('assets/image/home-icon/home_partner_ubuntu.png')}}"/>
			<img class="partner" height="40px" src="{{asset('assets/image/home-icon/logo_azure.png')}}"/>
			<img class="partner" height="47px" src="{{asset('assets/image/home-icon/home_partner_apple.png')}}"/>
			<img class="partner" height="43px" src="{{asset('assets/image/home-icon/home_partner_gg.png')}}"/>
			<img class="partner" height="55px" src="{{asset('assets/image/home-icon/home_partner_godaddy.png')}}"/>
			<img class="partner" height="70px" style="margin-right: 0;" src="{{asset('assets/image/home-icon/logo_do.svg')}}"/>
		</div>
	</div>

	<div class="main home-container-6">
		<div class="main-center">
			<h1>@lang('home_home.ht_thong_diep_nha_sang_lap')</h1>
			<div class="mb-item">
				<a href="#Tran Huu Trung">
					<div>
						<img class="_5z1g img" src="{{url('assets/image/ava-trung.jpg')}}" alt="@lang('home_home.ht_tran_huu_trung')">
						<div class="mb-name">@lang('home_home.ht_mr__trung_tran')</div>
					</div>
				</a>
				<div class="mb-i">@lang('home_home.ht_cofounder')</div>
				<div class="_5z1j">@lang('home_home.ht_manager_design') </div>
			</div>
			<div class="mb-item">
				<a href="#Nguyen Ha Thanh">
					<div>
						<img class="_5z1g img" src="{{url('assets/image/avatar-thanh.jpg')}}" alt="@lang('home_home.ht_nguyen_ha_thanh')">
						<div class="mb-name">@lang('home_home.ht_mr__thanh_nguyen')</div>
					</div>
				</a>
				<div class="mb-i">@lang('home_home.ht_cofounder')</div>
				<div class="_5z1j">@lang('home_home.ht_ceo_legal') </div>
			</div>
			<div class="mb-item last-child">
				<a href="#Tran Van Hung">
					<div>
						<img class="_5z1g img" src="{{url('assets/image/avatar-hung.jpg')}}" alt="@lang('home_home.ht_tran_van_hung')">
						<div class="mb-name">@lang('home_home.ht_mr__hung_tran')</div>
					</div>
				</a>
				<div class="mb-i">@lang('home_home.ht_cofounder')</div>
				<div class="_5z1j">Tech Leader </div>
			</div>
			<div class="mb-item mb-quote">

				<div class="circle-icon">
					<i class="fa fa-quote-left"></i>
				</div>

				<span id="quote">@lang('home_home.ht_chat_luong_san_pham_va_niem_tin_khach_hang')</span>
				<script src="{{url('assets/plugin/typed.js/js/typed.js')}}"></script>
				<script>
					$("#quote").typed({
						strings: [" @lang('home_home.ht_la_nen_mong_vung_chac_de_phat_trien') ", " @lang('home_home.ht_la_su_thanh_cong_cua_chung_toi')",  " @lang('home_home.ht_la_gia_tri_cot_loi_lam_nen_thuong_hieu_htbros')"],
						typeSpeed: 50,
						loop: true,
						callback: function(){
							lift();
						}
					});
					function lift(){
						$(".head-text").addClass("lift-text");
					}
				</script>
			</div>
		</div>
	</div>

@stop