@extends('_layouts.default')

@section('title')@lang('search_search.ht_tim_kiem__htbros') @stop
@section('keywords') @lang('search_search.ht_may_tim_kiem_htbros') @stop
@section('description') @lang('search_search.ht_may_tim_kiem_htbros__tim_kiem_moi_thu_tren_trang_htbros_com') @stop
@section('image') {{url('resources/assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('search_search.ht_htbros_editer') @stop

@section('content')
	<div class="main">
		<div class="main-center search-page">

			<h3>@lang('search_search.ht_ket_qua_tim_kiem')</h3>
			<form action="{{url('tim-kiem')}}" method="get" class="search-page-form">
				<div class="search-icon"></div>
				<input class="search-input" id="search-input" type="text" name="key"
			    value="@if(isset($_GET['key'])){{ $_GET['key'] }}@endif" placeholder="Search..." autocomplete="off"/>
			</form>

		</div>
		<div class="search-page-result">
			<script>
			  (function() {
			    var cx = '015184188147565162425:6yv_jt2yyru';
			    var gcse = document.createElement('script');
			    gcse.type = 'text/javascript';
			    gcse.async = true;
			    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			    var s = document.getElementsByTagName('script')[0];
			    s.parentNode.insertBefore(gcse, s);
			  })();
			</script>
			<gcse:searchresults-only></gcse:searchresults-only>
		</div>
	</div>
@stop