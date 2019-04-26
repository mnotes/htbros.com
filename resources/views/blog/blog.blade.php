@extends('_layouts.default')

@section('title')@lang('blog_blog.ht_tin_tuc__htbros') @stop
@section('keywords') @lang('blog_blog.ht_tong_hop_cac_tin_tuc_moi_nhat') @stop
@section('description') @lang('blog_blog.ht_tong_hop_cac_tin_tuc_moi_nhat') @stop
@section('image') {{url('resources/assets/image/htbros-logo.png')}} @stop
@section('url') {{url()->full()}} @stop
@section('author') @lang('blog_blog.ht_htbros_editer') @stop

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

    <div class="blog-container-1">
        <div class="main-center">
            <div style="width: 100%; float: left; margin-top: 40px;">
                    <a class="btn-sm" href="{{url('tin-tuc/rss')}}" style="float: right;" title="RSS"> <i class="fa fa-rss"></i> rss</a>
                    <a class="translate-btn btn-sm" id="translate-btn" onclick="translateToEnglish()">
                    <i class="fa fa-globe"></i> Translate</a>

                    {{-- Tất cả code định nghĩa của bing translate --}}
                    <script src="https://ssl.microsofttranslator.com/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**" type="text/javascript"></script>
                    <script type="text/javascript">
                        function translateToEnglish() {
                            console.log("translate called");
                            Microsoft.Translator.Widget.Translate('vi', 'en', onProgress, onError, onComplete, onRestoreOriginal, 30000);
                        }
                        function onProgress(value) {$('#translate-btn').html("Translate "+ Math.round(value)+ "%") }
                        function onError(error) {console.log("Translation Error: " + error);}
                        function onComplete() {}
                        function onRestoreOriginal() {$('#translate-btn').html("Translate "); console.log("restore to original");}
                    </script>
                </div>
        </div>
    </div>

	<div class="main">
	    <div class="blog-body">

            <div class="blog-body-left">

                @if(Auth::check())
                <div class="panel panel panel-default blog-post">
                    <div class="panel-body blog-post-focus">
                        <input class="post-blog-title"  id="post-blog-title" placeholder="Tiêu đề"/>
                        <input type="hidden" id="blog-thumbnail"/>
                        <div class="blog-upload-image" onclick="OpenFileManager('new-blog-thumbnail')">
                            <i class="fa fa-camera" aria-hidden="true"></i>
                        </div>
                        <textarea class="post-blog-brief" id="post-blog-brief" placeholder="Giới thiệu ngắn"></textarea>
                        <textarea class="post-blog-content" id="post-blog-content"></textarea>
                    </div>
                    <div class="post-bottom-area">
                        <select style="width: 100%; float: left;" class="blog-tags form-control select2-hidden-accessible" multiple="" tabindex="-1" aria-hidden="true">
                            <option value="@lang('blog_blog.ht_orange')">@lang('blog_blog.ht_orange')</option>
                            <option value="@lang('blog_blog.ht_white')">@lang('blog_blog.ht_white')</option>
                            <option value="@lang('blog_blog.ht_red')">@lang('blog_blog.ht_red')</option>
                            <option value="@lang('blog_blog.ht_blue')">@lang('blog_blog.ht_blue')</option>
                            <option value="@lang('blog_blog.ht_green')">@lang('blog_blog.ht_green')</option>
                        </select>
                        <div class="blog-ct input-and-dropdown">
                            <select class="input-and-dropdown-select"
                                    onchange="document.getElementById('blog-category').value=this.options[this.selectedIndex].value;">
                                <option></option>
                                @foreach($listCategory as $ct)
                                    <option value="{{$ct->category}}">{{$ct->category}}</option>
                                @endforeach
                            </select>
                            <input class="ddsi" placeholder="@lang('blog_blog.ht_chuyen_muc')" id="blog-category" onfocus="this.select()" type="text">
                        </div>

                        <button onclick="addNewBlogArticle();" type="button" class="btn btn-primary btn-sm post-btn">@lang('blog_blog.ht_post')</button>
                    </div>
                </div>
                @endif

                @foreach($articles as $index=>$article)
                <article class="blog-item">
                    <p class="article-detail-info"> 
                        <img class="author-avatar" src="{{ $article->getAuthor()->avatar }}"/> 
                        <a target="_blank" href="#"><b>{{ $article->getAuthor()->name }}</b></a><br> 
                        <span> {{$article->showFriendlyTime()}} </span>

                        <div class="fb-like" style="float: right; margin-top: -45px;" data-layout="button_count" data-action="like" 
                        data-href="{{url("tin-tuc")}}/{{$article->id}}-bai-viet" data-show-faces="false" data-share="true"></div>
                    </p>
                    <a href="{{url("tin-tuc")}}/{{$article->id}}-{{$article->friendly_url}}">

                        {{-- Nếu là ảnh bằng đường link và ảnh lưu trữ trên máy chủ --}}
                        @if(strpos($article->thumbnail,'http') !== false)
                            <img class="article-image" src="{{$article->thumbnail}}" />
                        @else
                            <img class="article-image" src="{{ asset('') }}../{{$article->thumbnail}}" />
                        @endif
                    </a>
                    <a href="{{url("tin-tuc")}}/{{$article->id}}-{{$article->friendly_url}}"> 
                        <h1 class="blog-title">{{$article->title}}</h1>
                    </a>
                    
                    <div class="article-detail-info">
                        <i class="fa fa-facebook-square"></i> 0 @lang('blog_blog.ht_binh_luan') &nbsp;
                        <i class="fa fa-check-circle"></i> {{$article->views}} @lang('blog_blog.ht_luot_xem')
                    </div>

                    <div class="article-content">
                        
                        @if(Auth::check())
                        <div class="dropdown blog-option">
                            <div class="dropdown-toggle" style="padding: 0 3px 0 3px;" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-ellipsis-v" style="opacity: 0.5;"></i>
                            </div>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li style="cursor: pointer;" onclick="OpenFileManager('blog-thumbnail-{{ $article->id }}')">
                                    <a><i class="fa fa-camera" aria-hidden="true"></i> &nbsp; @lang('blog_blog.ht_sua_anh')</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li style="cursor: pointer;" onclick="deleteBlogArticle({{ $article->id }})"><a>Xóa</a></li>
                            </ul>
                        </div>
                        <div class="btn-group blog-option-private)">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                @if($article->private == true)
                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-globe" aria-hidden="true"></i>
                                @endif
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a onclick="updateBlogItemStatus({{$article->id}}, 'public')">@lang('blog_blog.ht_public')</a></li>
                                <li><a onclick="updateBlogItemStatus({{$article->id}}, 'private')">@lang('blog_blog.ht_private')</a></li>
                            </ul>
                        </div>
                        @endif
                        <p class="article-short-intro">{{$article->brief}}...</p>
                        <a href="{{url("tin-tuc")}}/{{$article->id}}-{{$article->friendly_url}}">
                            <span class="btn-sm">@lang('blog_blog.ht_doc_chi_tiet')</span>
                        </a>
                    </div>
                </article>
                @endforeach
                <div class="pagination-container">{!! $articles->links() !!}</div>
            </div>

            <div class="blog-body-right">
                <div class="wp-subscribe no-name-field" id="wp-subscribe">
                <h4 class="title">@lang('blog_blog.ht_dang_ky_nhan_tin_moi')
                <span>Htbros</span></h4>
                <p class="text">@lang('blog_blog.ht_nhan_tin_moi')</p>
                <form action="//htbros.us15.list-manage.com/subscribe/post?u=7bc280aa1ec1c6f09bbafaffd&amp;id=0aab67995c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <input type="email" value="" name="EMAIL" class="email email-field" id="mce-EMAIL" placeholder="email address" required  placeholder="@lang('blog_blog.ht_dia_chi_mail')">
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_7bc280aa1ec1c6f09bbafaffd_0aab67995c" tabindex="-1" value=""></div>
                    <input id="mc-embedded-subscribe" class="submit" name="subscribe" type="submit" value="@lang('blog_blog.ht_dang_ky')">
                </form>
                </div>
                <a href="https://m.do.co/c/c55373ec5cc9" target="_blank">
                    <img width="100%" src="{{asset('assets/image/do-banner.png')}}" />
                </a>
            </div>
        </div>
	</div>

    @if(Auth::check())
    <link href="{{url('resources/assets/plugin/bootstrap3-dialog/dist/css/bootstrap-dialog.min.css')}}" rel="stylesheet">
    <script src="{{asset('resources/assets/plugin/bootstrap3-dialog/dist/js/bootstrap-dialog.min.js')}}"></script>
    <script src="{{asset('resources/assets/plugin/tinymce/tinymce.min.js') }}"></script>

    <link href="{{asset('resources/assets/plugin/select2/css/select2.min.css')}}" rel="stylesheet" />
    <script src="{{asset('resources/assets/plugin/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('resources/assets/js/blog.js')}}"></script>
    <script type="text/javascript">$(".blog-tags").select2({placeholder: "Keywords", tags: true})</script>
    @endif
@stop