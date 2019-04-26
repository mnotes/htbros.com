@extends('_layouts.default')

@section('title') {{$article->title}} - @lang('blog_blog_detail.ht_htbros') @stop
@section('keywords') {{$article->keyword}} @stop
@section('description') {{$article->brief}} @stop
@section('image') {{ asset('') }}{{$article->thumbnail}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('blog_blog_detail.ht_htbros_admin') @stop

@section('content')

    {{-- Đánh dấu trạng thái menu blog được chọn --}}
    <script>$("#blog-tab").css("color","#2895f1");</script>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=860155880708814";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

	<div class="main">
        <div class="blog-body">
            <div class="blog-body-left">
                <div style=" float: left; border-bottom: 1px solid #EEE; width: 100%; padding: 30px 0 20px 0;">

                    <div style="float: left;">

                        <a class="btn-sm" href="#" id="translate-btn" onclick="translateToEnglish()">Translate</a>

                        {{-- Tất cả code định nghĩa của bing translate --}}
                        <script src="https://ssl.microsofttranslator.com/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**" type="text/javascript"></script>
                        <script type="text/javascript">
                            function translateToEnglish() {
                                console.log("translate called");
                                Microsoft.Translator.Widget.@lang('blog_blog_detail.ht_translate')('vi', 'en', onProgress, onError, onComplete, onRestoreOriginal, 30000);
                            }
                            function onProgress(value) {$('#translate-btn').html("@lang('blog_blog_detail.ht_translate') "+ Math.round(value)+ "%") }
                            function onError(error) {console.log("Translation Error: " + error);}
                            function onComplete() {}
                            function onRestoreOriginal() {$('#translate-btn').html("@lang('blog_blog_detail.ht_translate') "); console.log("restore to original");}
                        </script>
                    </div>

                    <div style="float: right;" class="fb-like" data-layout="button_count" data-action="like" data-show-faces="false"
                     data-share="true" data-href="{{url("tin-tuc")}}/{{$article->id}}-bai-viet" ></div>
                </div>

                <h1 class="article-detail-title">{{$article->title}}</h1>

                <input class="hidden-input article-input-update-title" value="{{$article->title}}" data-toggle="tooltip" title="@lang('blog_blog_detail.ht_sua_tieu_de')" data-placement="left"/>
                <textarea class="hidden-input article-input-update-brief" placeholder="@lang('blog_blog_detail.ht_gioi_thieu_ngan')" rows="6" data-toggle="tooltip" title="@lang('blog_blog_detail.ht_sua_tom_tat')" data-placement="left">{{$article->brief}}</textarea>
                <input class="hidden-input article-input-update-keyword" placeholder="keywords" value="{{$article->keyword}}" data-toggle="tooltip" title="@lang('blog_blog_detail.ht_sua_keyword_cach_nhau_dau_phay')" data-placement="left" />
                <script>$(document).ready(function(){ $('[data-toggle="tooltip"]').tooltip();});</script>

                <div class="article-detail-info" style="margin-top: 10px; font-size: 13px;">

                    <i class="fa fa-facebook-square"></i> 0 @lang('blog_blog.ht_binh_luan') &nbsp;
                    <i class="fa fa-check-circle"></i> {{$article->views}} @lang('blog_blog.ht_luot_xem')

                    @if(Auth::check())
                        <div class="dropdown blog-option" style="margin-top: -1px;" onclick="enableEditBlogArticle()">
                            <div class="dropdown-toggle" type="button">
                                <i class="fa fa-pencil-square" style="opacity: 0.6;"></i>
                            </div>
                        </div>
                        <div class="btn-group blog-option-private" style="margin-top: -2px;">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                @if($article->private == true)
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                @endif
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a onclick="updateBlogItemStatus({{$article->id}}, 'public')">public</a></li>
                                <li><a onclick="updateBlogItemStatus({{$article->id}}, 'private')">private</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="article-detail-content">

                {{-- Nếu là ảnh bằng đường link và ảnh lưu trữ trên máy chủ --}}
                @if(strpos($article->thumbnail,'http') !== false)
                    <img src="{{$article->thumbnail}}" class="blog-detail-thumb" />
                @else
                    <img  src="{{ asset('') }}/{{$article->thumbnail}}" class="blog-detail-thumb" />
                @endif
                <br/><br/>

                {!! $article->viewMarkdownInHtml() !!}
                </div>

                @if(Auth::check())
                <div class="edit-blog-article-container">
                    <textarea class="edit-blog-article-content">{!! $article->content !!}</textarea>
                    <button onclick="saveBlogArticleChange({{ $article->id }})" type="button" class="btn btn-primary btn-sm save-btn">@lang('blog_blog_detail.ht_save')</button>
                    <button onclick="cancelChangeBlogArticle();" type="button" class="btn btn-sm save-btn">@lang('blog_blog_detail.ht_cancel')</button>
                </div>
                @endif

                <div class="fb-cmt-box" style="width: 100%; float: left;">
                    <h3 style="float:left; width:100%; font-size: 24px;">@lang('blog_blog_detail.ht_binh_luan_2')</h3>
                    <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id;
                      js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-comments" data-href="{{url("tin-tuc")}}/{{$article->id}}-bai-viet" data-width="100%" data-numposts="10"></div>
                </div>
            </div>

            <div class="blog-body-right" style="padding-top: 14px;">

                <h3 class="suggest-head">@lang('blog_blog_detail.ht_bai_viet_de_xuat')</h3>

                @foreach($suggestArticle as $sArticle)
                <div class="suggest-article-item">
                    <a href="{{url('tin-tuc')}}/{{ $sArticle->id }}-{{ $sArticle->friendly_url }}">

                        {{-- Nếu là ảnh bằng đường link và ảnh lưu trữ trên máy chủ --}}
                        @if(strpos($article->thumbnail,'http') !== false)
                            <img class="suggest-article-thumbnail" src="{{$sArticle->thumbnail}}" />
                        @else
                            <img class="suggest-article-thumbnail" src="{{ asset('') }}../{{$sArticle->thumbnail}}" />
                        @endif
                    </a>
                    <a href="{{url('tin-tuc')}}/{{ $sArticle->id }}-{{ $sArticle->friendly_url }}">
                        <h2 class="suggest-article-title">{{ $sArticle->title }}</h2>
                    </a>
                    <p class="suggest-article-detail">
                        <img class="author-avatar" src="{{ asset('') }}/{{ $article->getAuthor()->avatar }}"/>
                        <a target="_blank">{{ $article->getAuthor()->name }}</a> &nbsp;
                        <i class="fa fa-clock-o" aria-hidden="true"></i> {{ $sArticle->showFriendlyTime() }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    @if(Auth::check())
        <link href="{{url('resources/assets/plugin/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css')}}" rel="stylesheet">
        <script src="{{asset('resources/assets/plugin/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js')}}"></script>
        <script src="{{asset('resources/assets/plugin/tinymce/tinymce.min.js') }}"></script>

        <link href="{{asset('resources/assets/plugin/select2/css/select2.min.css')}}" rel="stylesheet" />
        <script src="{{asset('resources/assets/plugin/select2/js/select2.full.min.js')}}"></script>
        <script src="{{asset('resources/assets/js/blog-detail.js')}}"></script>
        <script type="text/javascript">$(".blog-tags").select2({placeholder: "Keywords", tags: true})</script>
    @endif

@stop