@extends('_layouts.default')

@section('title')@lang('product_apps.ht_san_pham__htbros') @stop
@section('keywords') @lang('product_apps.ht_htbros_san_pham_ung_dung_tro_choi') @stop
@section('description')@lang('product_apps.ht_tong_hop_tat_ca_nhung_san_pham_ung_dung__tro_choi_duoc_san_xuat_boi_nhom_htbros') @stop
@section('image') {{url('assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('product_apps.ht_admin') @stop

@section('content')

{{--đánh dấu trạng thái menu  được chọn--}}
<script> $("#apps-tab").css("color","#2895f1"); </script>

<div class="apps-container-1">
    <div class="htbros-profile-container">
        <img class="" src="{{asset('assets/image/htbros-studio.png')}}" />
        <span class="big-title">Htbros Software</span>
        <p class="small-title">@lang('product_apps.ht_xuong_game')</p>
    </div>
</div>

<div class="new-app">
    <div class="new-app-center">

        <div class="game-card">
            <img class="game-icon" alt="Horses chess game" src="{{ url('upload/product/world-of-trollface-icon.png')}}"/>
            <div class="game-des">
                <a target="_blank" href="{{url('san-pham/the-gioi-trollface')}}">
                    <h1>@lang('product_apps.ht_the_gioi_trollface')</h1>
                </a>
                <span class="rate-box">
                    <a class="free">@lang('product_apps.ht_mien_phi')</a>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i>
                </span>
                <div class="short-des"> @lang('product_apps.ht_the_gioi_trollface_la_mot_tro_choi_thu_vi_nhieu_cam_bay_va_thu_thach')<br>
                    @lang('product_apps.ht_hay_tai_ve_va_choi_ngay_hom_nay')
                </div>
                <div class="link-store">
                    <a target="_blank" class="btn-sm m-r-10" href="https://itunes.apple.com/us/app/world-of-trollface/id1118343772">
                        <i class="fa fa-apple"></i> @lang('product_apps.ht_tai_ve_cho_ios')
                    </a>
                    <a target="_blank" class="btn-sm" href="https://play.google.com/store/apps/details?id=com.htbros.worldoftrollface">
                        <i class="fa fa-android"></i> @lang('product_apps.ht_tai_ve_cho_android')
                    </a>
                </div>
            </div>
            <div class="game-detail">
                <span class="game-detail-title">@lang('product_apps.ht_phien_ban') </span>
                <span class="game-detail-content">@lang('product_apps.ht_chinh_thuc') 1.0</span>

                <span class="game-detail-title">@lang('product_apps.ht_ngay_dang') </span>
                <span class="game-detail-content">28 tháng 5, 2016</span>
            </div>
        </div>


        <div class="game-card" style="border-bottom: none;">
            <img class="game-icon" alt="@lang('product_apps.ht_co_bay_ngua') 1.0" src="{{ url('upload/product/horses-chess-icon-1.0.png')}}"/>
            <div class="game-des">
                <a target="_blank" href="{{url('san-pham/co-bay-ngua')}}">
                    <h1>@lang('product_apps.ht_co_bay_ngua')</h1>
                </a>
                <span class="rate-box">
                    <a class="free">@lang('product_apps.ht_mien_phi')</a>
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i>
                </span>
                <div class="short-des"> @lang('product_apps.ht_co_bay_ngua_tom_tat')
                </div>
                <div class="link-store">
                    <a target="_blank" class="btn-sm m-r-10" href="https://itunes.apple.com/us/app/horses-chess-game/id1116154036">
                        <i class="fa fa-apple"></i> @lang('product_apps.ht_tai_ve_cho_ios')
                    </a>
                    <a target="_blank" class="btn-sm" href="https://play.google.com/store/apps/details?id=com.htbros.horseschess">
                        <i class="fa fa-android"></i> @lang('product_apps.ht_tai_ve_cho_android')
                    </a>
                </div>
            </div>
            <div class="game-detail">
                <span class="game-detail-title">@lang('product_apps.ht_phien_ban') <span/>
                <span class="game-detail-content">@lang('product_apps.ht_thu_nghiem') 1.0</span>

                <span class="game-detail-title">@lang('product_apps.ht_ngay_dang') <span/>
                <span class="game-detail-content">18 tháng 5, 2016</span>
            </div>
        </div>

    </div>
</div>
@stop