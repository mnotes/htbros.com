@extends('_layouts.default')

{{-- Đặt các thông tin cho SEO --}}
@section('title')Giới thiệu - Htbros Software @stop
@section('keywords') Giới thiệu - Htbros Software @stop
@section('description')Htbros là một nhóm khởi nghiệp (startup) tại việt nam, hoạt động trong lĩnh vực sản xuất các ứng dụng web, các ứng dụng di động đa nền tảng và xuất bản trò chơi trên di động @stop
@section('image') {{url('assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') Admin @stop
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
{{--Đánh dấu trạng thái menu blog được chọn--}}
<script>$("#help-tab").css("color","#2895f1");</script>

<div class="main-service-center">
	<div style="width: 100%; text-align: center; margin-top: 150px;">
		<div style="width: 100%; text-align: center; margin-top: 150px;">
			Đang cài đặt <br/> Vui lòng quay lại vào lúc khác
		</div>
	</div>
</div>
@stop