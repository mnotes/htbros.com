@extends('_layouts.default')

@section('title')@lang('errors_404.ht_404_page_not_found__htbros') @stop

@section('content')
    <div class="main">
        <div class="main-center search-page" style="text-align: center;">

            <div style=" font-size: 40px; margin: 100px auto 20px auto; height: 100px; width: 100px; padding-top: 20px; border-radius: 50%; background: #e0e0e0; font-weight: bold;">404</div>
            <h3>Sorry, this page isn't available</h3>
            <a target="_blank" style="color: #1d9bd9;" href="{{url('sitemap.xml')}}">@lang('errors_404.ht_sitemaps') ></a>

        </div>
    </div>
@stop