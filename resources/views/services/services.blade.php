@extends('_layouts.default')

@section('title')@lang('services_services.ht_cac_dich_vu__htbros') @stop
@section('keywords') Htbros application mobile cross-platform, web apps, mobile apps, online game @stop
@section('description')Htbros is a startup in Vietnam, operating in producing web applications, mobile applications on multi-platform and  online games @stop
@section('image') {{url('assets/image/outsource-mobile.png')}} @stop
@section('author') @lang('services_services.ht_htbros_editer') @stop
@section('url') {{url()->full()}} @stop

@section('content')

{{--đánh dấu trạng thái menu blog được chọn--}}
<script>
$("#services-tab").css("color","#2895f1");
</script>
<div class="main-service">
	<div class="as-container service-1">
        <article class="as-container-center">
            <div class="as-img">
                <img src="{{url('assets/image/app-bg.png')}}">
            </div>
            <div class="as-box">
                <p class="out-sources-text">@lang('services_services.ht_the_manh')</p>
                <h1>@lang('services_services.ht_dich_vu_lam_ung_dung_di_dong')</h1>
                <p>@lang('services_services.ht_mien_phi_tu_van_dich_vu')</p>
                <p>@lang('services_services.ht_thoi_gian_phat_trien_sieu_toc')</p>
                <p>@lang('services_services.ht_ung_dung_da_nen_tang')</p>
                <p>@lang('services_services.ht_thiet_ke_dep_gon_gang_bat_mat')</p>
                <p>@lang('services_services.ht_chi_phi_hop_ly')</p>
                <p>@lang('services_services.ht_ho_tro_kip_thoi_nhanh_chong')</p>
                <br/>
                <a href="#" class="btn"><i class="fa fa-phone"></i>&nbsp; @lang('services_services.ht_dat_hang')</a>
            </div>
        </article>
	</div>
    <div class="ws-container">
        <article class="ws-container-center">
            <h1>@lang('services_services.ht_dich_vu_thiet_ke_website_theo_yeu_cau')</h1>
            <div class="ws-box">
                <p>@lang('services_services.ht_mien_phi_tu_van_dich_vu'), @lang('services_services.ht_giao_dien_tuy_bien_theo_moi_nen_tang')</p>
                <p>@lang('services_services.ht_thiet_ke_gon_gang_dep_mat'), @lang('services_services.ht_thoi_gian_phat_trien_nhanh'), @lang('services_services.ht_toi_uu_hoa_seo'), @lang('services_services.ht_ho_tro_kip_thoi_nhanh_chong')</p>
                <br/>
                <a href="#" class="btn"><i class="fa fa-phone"></i>&nbsp; @lang('services_services.ht_dat_hang')</a>
            </div>
            <div class="ws-img">
                <img src="{{url('assets/image/service-web-bg.png')}}">
            </div>
        </article>
    </div>

    <div class="gs-container">
        <article class="gs-container-center">
            <div class="gs-box">
                <h1>@lang('services_services.ht_dich_vu_lam_game_di_dong')</h1>
                <p>@lang('services_services.ht_xay_dung_tro_choi_di_dong_da_nen_tang_theo_yeu_cau_khach_hang')</p>
                <p>@lang('services_services.ht_cac_tua_game_2d_don_gian')</p>
                <p>@lang('services_services.ht_ho_tro_da_nen_tang')</p>
                <p>@lang('services_services.ht_cong_nghe_unity')</p>
                <p>@lang('services_services.ht_thoi_gian_phat_trien_nhanh')</p>
                <br/>
                <a href="#" class="btn"><i class="fa fa-phone"></i>&nbsp; @lang('services_services.ht_dat_hang')</a>
            </div>
            <div class="gs-box-right">
               <img src="{{asset('assets/image/as-mb-bg.png')}}"/>
            </div>
        </article>
    </div>


</div>
@stop