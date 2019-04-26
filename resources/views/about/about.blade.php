@extends('_layouts.default')

{{-- Đặt các thông tin cho SEO --}}
@section('title')@lang('about_about.ht_gioi_thieu__htbros_software') @stop
@section('keywords') @lang('about_about.ht_gioi_thieu__htbros_software') @stop
@section('description')@lang('about_about.ht_htbros_about') @stop
@section('image') {{url('assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('about_about.ht_admin') @stop
@section('head')
    {{-- Nếu là host thật -> enable google analytics --}}
    @if(strpos(URL::to('/'), 'htbros.com') !== false)
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-51115269-1', 'auto');
            ga('send', 'Visit about');
        </script>
    @endif
@stop

@section('content')

<div class="about-container-1">
    <div class="about-left lightbub-bg"></div>
    <div class="about-right">
        <div class="about-right-container">
            <img style="margin: 50px 0 0 -60px; float: left; height: 350px; width: 10px;" src="{{url('assets/image/hr-vertical-gradient.png')}}"/>
            <p style="width: 100%; float: left;">
                <img style="width: 50px; margin: 80px 0 20px 0; float: left;" src="{{url('assets/image/htbros-studio.png')}}"/>
                <span class="company-name">Htbros Software</span>
                <span class="company-cat">@lang('about_about.ht_cong_ty_khoi_nghiep')</span>
            </p>
            <p style="font-size: 14px; margin-bottom: 15px; line-height: 125%;">
                @lang('about_about.ht_htbros_about')
            </p>
            <p>
                <i class="fa fa-facebook-square"></i>Facebook :
                <a target="_blank" href="https://www.facebook.com/htbros">Htbros Software</a>
            </p>
            <p>
                <i class="fa fa-twitter-square"></i>Twitter :
                <a target="_blank" href="https://twitter.com/htbros1">Htbros Software</a>
            </p>
            <p>
                <i class="fa fa-instagram"></i>Instagram :
                <a target="_blank" href="https://www.instagram.com/htbr0s">Htbros Software</a>
            </p>
            <p>
                <i class="fa fa-linkedin-square"></i>Linkedin :
                <a target="_blank" href="https://www.linkedin.com/company/htbros">Htbros Software</a>
            </p>
            <p>
                <i class="fa fa-github-square"></i>Github :
                <a target="_blank" href="https://github.com/htbros">Htbros Software</a>
            </p>
        </div>
    </div>
</div>

<div class="about-container-2">
    <div class="main-about-center">

        <h1 style="width: 100%; float: left; padding: 60px 0 20px 0; text-align: center;">
            @lang('about_about.ht_timeline')
        </h1>

        <img style="opacity: 0.8; margin-bottom: 30px;" src="{{url('assets/image/about-timeline.png')}}"/>
    </div>
</div>

<div class="about-container-4">
    <div class="main-about-center">
        <div style="padding: 80px 0; font-size: 14px;">
            <p class="lead">@lang('about_about.ht_press')</p>
            <img src="{{url('assets/image/hr-gradient-left.png')}}" style="width:50%; height:2px; margin-bottom: 50px;"/>
            <p><strong>UET</strong> - <a target="_blank" href="http://uet.vnu.edu.vn/coltech/taxonomy/term/398/4275">
                    15 sản phẩm KHCN tiêu biểu tham gia triển lãm "Tuổi trẻ sáng tạo"
                </a>[01/05/2016]
            </p>
            <p><strong>UET</strong> - <a target="_blank" href="http://uet.vnu.edu.vn/coltech/taxonomy/term/398/4445">
                    Lễ khai mạc giải đấu phần mềm Cờ toán Việt Nam
                </a>[29/03/2016]
            </p>
            <p><strong>FIT UET</strong> - <a target="_blank" href="http://fit.uet.vnu.edu.vn/tham-tac-gia-co-toan-viet-nam/">
                    Thăm chúc Tết tác giả Cờ toán Việt Nam
                </a>[23/02/2016]
            </p>
            <p><strong>Dân Trí</strong> - <a target="_blank" href="http://dantri.com.vn/giao-duc-khuyen-hoc/cong-trinh-nghien-cuu-khoa-hoc-sinh-vien-duoc-cong-bo-tren-tap-chi-quoc-te-20151127161341512.htm">
                    Công trình NCKH sinh viên được công bố trên tạp chí quốc tế
                </a>[16/12/2015]
            </p>
            <p><strong>Dân Trí</strong> - <a target="_blank" href="http://dantri.com.vn/giao-duc-khuyen-hoc/gap-go-nhom-sinh-vien-dua-co-toan-viet-nam-len-he-dieu-hanh-ios-va-android-20151204100053435.htm">
                    Gặp gỡ nhóm SV đưa “Cờ toán Việt Nam” lên iOS và Android
                </a>[04/12/2015]
            </p>
            <p><strong>Vnexpress</strong> - <a target="_blank" href="http://vnexpress.net/tin-tuc/giao-duc/sinh-vien-viet-phan-mem-co-toan-bat-kha-chien-bai-3328343.html">
                    Sinh viên viết phần mềm cờ toán bất khả chiến bại
                </a>[16/12/2015]
            </p>
            <p><strong>VNU </strong> -
                <a target="_blank" href="https://www.vnu.edu.vn/ttsk/?C1654/N18673/Co-toan-Viet-Nam:-San-pham-tri-tue-mang-dam-triet-li-Viet.htm">
                    Cờ toán Việt Nam: Sản phẩm trí tuệ mang đậm triết lí Việt
                </a>
                [27/11/2015]
            </p>
            <p><strong>Songkhoe.vn </strong> -
                <a target="_blank" href="http://songkhoe.vn/ket-qua-cuoc-thi-viet-ung-dung-mobile-ve-y-te-suc-khoe-s2964-0-104261.html">
                Kết quả cuộc thi Viết ứng dụng mobile về Y tế sức khỏe
                </a>
                [25/09/2014]
            </p>
        </div>
    </div>
</div>

<div class="about-container-3">
    <div class="about-left">
        <div class="about-left-container">
            <h3>@lang('about_about.ht_lien_he_chung_toi')</h3>

            <p>CÔNG TY TNHH CÔNG NGHỆ VÀ GIẢI PHÁP PHẦN MỀM HTBROS</p>
            <p>HTBROS TECHNOLOGY AND SOFTWARE SOLUTION COMPANY LIMITED</p>
            <p>Tên viết tắt : HTBROS SOFTWARE</p>
            <p>@lang('_layouts_default.ht_sdt') : <a href="tel:0973019862">(04) 6650 5464</a></p>
            <p>@lang('_layouts_default.ht_email') : <a href="mailto:contact@htbros.com">contact@htbros.com</a></p>
            <p>Website : <a href="#">https://www.htbros.com</a></p>
        </div>
    </div>
    <div class="about-right">
        <!-- Begin MailChimp Signup Form -->
        <div id="mc_embed_signup" class="about-contact-container">
            <h3>@lang('about_about.ht_send_mail')</h3>
            <form action="//htbros.us15.list-manage.com/subscribe/post?u=7bc280aa1ec1c6f09bbafaffd&amp;id=a92ac83c06" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-contact" target="_blank" novalidate>
                <input name="FNAME" id="mce-FNAME" type="text" class="form-control" placeholder="@lang('about_about.ht_name')">
                <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="required email form-control" placeholder="(*) Email">
                <textarea id="mce-MMERGE2" name="MMERGE2" class="form-control" rows="3"  placeholder="@lang('about_about.ht_content')"></textarea>

                <div id="mce-responses" class="clear" style="background: white; border-radius: 4px; margin-bottom: 5px;" >
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7bc280aa1ec1c6f09bbafaffd_a92ac83c06" tabindex="-1" value=""></div>
                <button id="mc-embedded-subscribe" name="subscribe" type="submit" class="btn btn-primary">@lang('about_about.ht_submit')
                </button>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
    </div>
</div>

{{--Đánh dấu trạng thái menu blog được chọn--}}
<script async>$("#about-tab").css("color","#2895f1");</script>
@stop