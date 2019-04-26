<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('assets/fav.png')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content=""/>
    <meta name="robots" content="noindex">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')"/>
    <meta name="author" content="@yield('author')"/>

    <link rel="alternate" href="https://www.htbros.com?lang=vi" hreflang="vi"/>
    <link rel="alternate" href="https://www.htbros.com?lang=en" hreflang="en"/>
    <link rel="alternate" href="https://www.htbros.com" hreflang="x-default"/>

    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:image" content="@yield('image')"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="Htbros"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="og:image:type" content=".png"/>
    <meta property="og:image:width" content="469"/>
    <meta property="og:image:height" content="470"/>

    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:url" content="@yield('url')"/>
    <meta name="twitter:title" content="@yield('title')"/>
    <meta name="twitter:description" content="@yield('description')"/>
    <meta name="twitter:image" content="@yield('image')"/>
    <meta name="twitter:site" content="@htbros1"/>

    <link rel="stylesheet" href="{{asset('assets/plugin/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugin/bootflat/css/bootflat.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugin/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugin/simplemde-markdown/dist/simplemde.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/phone-ring.css?version=')}}{{config('app.code_version')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-pc.css?version=')}}{{config('app.code_version')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style-mobile.css?version=')}}{{config('app.code_version')}}">

    <script src="{{asset('assets/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('assets/plugin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugin/simplemde-markdown/dist/simplemde.min.js')}}"></script>
    <script src="{{asset('assets/js/default.js?version=')}}{{config('app.code_version')}}"></script>

    {{-- Rich text for SEO --}}
    <script type="application/ld+json">
    [{
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Htbros Software",
      "url": "https://www.htbros.com",
      "logo": "https://www.htbros.com/assets/image/htbros-logo.png",
      "sameAs": [
        "https://www.facebook.com/htbros",
        "https://www.twitter.com/htbros1",
        "https://www.linkedin.com/company/htbros",
        "https://github.com/htbros",
        "https://www.flickr.com/photos/htbros",
        "https://www.youtube.com/user/htbr0s",
        "https://www.pinterest.com/htbros",
        "https://plus.google.com/117730426384208590908"
        
      ],
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+84 04 6650 5464",
        "contactType": "customer service",
        "contactOption": "TollFree",
        "areaServed": "VN",
        "availableLanguage": [
          "Vietnamese",
          "English"
        ]
      }]
    }, {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "url": "https://www.htbros.com",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.htbros.com/tim-kiem?key={keywords}",
        "query-input": "required name=keywords"
      }
    }]
    </script>
    <script type="application/ld+json">
       {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Htbros",
      "alternateName": "Công ty khởi nghiệp Htbros",
      "url": "https://www.htbros.com"
    }
    </script>
    <script type="text/javascript">
        var thisUrl = window.location.href;
        if(thisUrl.indexOf("/index.php") !=-1){
            config_url= thisUrl.replace("/index.php", "");
            window.location.replace(config_url);
        }
    </script>

    @yield('head')

</head>
<body>
<header>
    <nav class="header-center header-pc">
        <ul id="nav-menu">
            <li class="item-logo">
                <a href="{{url('')}}">
                    <img class="htbros-logo" alt="Htbros Software Logo" src="{{asset('assets/image/logo.png')}}" />
                </a>
            </li>
            <li style="height: 40px; font-size: 10px; color: #AAA;"><span style="float: left; margin-top: 0;">|</span></li>
            <li><a href="{{url('dich-vu')}}"    id="services-tab">@lang('_layouts_default.ht_dich_vu')</a></li>
            <li><a href="{{url('san-pham')}}"   id="apps-tab">@lang('_layouts_default.ht_san_pham')</a></li>
            <li><a href="{{url('tin-tuc')}}"    id="blog-tab">@lang('_layouts_default.ht_tin_tuc')</a></li>
            <li><a href="{{url('gioi-thieu')}}" id="about-tab">@lang('_layouts_default.ht_gioi_thieu')</a></li>
            <li class="item-lang">
                @if(Cookie::get('lang') == "en")
                    <a href="{{url('lang/vi')}}"><img title="Tiếng Việt" src="{{asset('assets/image/lang-vi.png')}}" /></a>
                @else
                    <a href="{{url('lang/en')}}"><img title="English" src="{{asset('assets/image/lang-en.png')}}" /></a>
                @endif
            </li>
            <li class="item-search">
                <div id="search-submit">&nbsp;</div>
                <form action="{{url('tim-kiem')}}" method="get" class="header-search">
                    <input type="text" name="key" class="search-input" id="search-input" placeholder="@lang('_layouts_default.ht_tim_kiem')..." autocomplete="off"/>
                </form>
            </li>

            @if(Auth::check())
            <div class="btn-group">
                <div class="dropdown-memmber-option dropdown-toggle" data-toggle="dropdown">
                    @if(Auth::user()->avatar != "")
                        <img class="profile-avatar" src="{{asset('')}}{{Auth::user()->avatar}}" />
                    @else
                        <img class="profile-avatar" src="{{asset('assets/image/avatar.jpg')}}" />
                    @endif
                    <span class="caret"></span>
                </div>
                <ul class="dropdown-memmber dropdown-menu" role="menu">
                    <li><a href="#">{{Auth::user()->name}}</a></li>
                    <li><a onclick="OpenFileManager('change-profile-avatar')">@lang('_layouts_default.ht_doi_avatar')</a></li>
                    <div class="divider"></div>
                    <li><a href="{{url('logout')}}">@lang('_layouts_default.ht_logout')</a></li>
                </ul>
            </div>
            @endif

        </ul>
    </nav>
    <nav class="header-center header-mobile">
        <div class="mobile-header-menu">
            <div id="nav-icon">
                <span></span><span></span><span></span>
                <ul class="mobile-nav-menu">
                    <li><a href="{{url('dich-vu')}}"><p>@lang('_layouts_default.ht_dich_vu')</p></a></li>
                    <li><a href="{{url('san-pham')}}"><p>@lang('_layouts_default.ht_san_pham')</p></a></li>
                    <li><a href="{{url('tin-tuc')}}"><p>@lang('_layouts_default.ht_tin_tuc')</p></a></li>
                    <li><a href="{{url('gioi-thieu')}}"><p>@lang('_layouts_default.ht_gioi_thieu')</p></a></li>
                </ul>
            </div>
            <div class="mobile-nav-logo">
                <div class="mobile-logo">
                    <a href="{{url('')}}">
                        <img alt="Htbros logo" src="{{asset('assets/image/mobile-logo2.png')}}"/>
                    </a>
                </div>
            </div>
            <div class="mobile-nav-search">
                <a href="{{url('tim-kiem?key=')}}">
                    <div class="mobile-nav-search-icon"></div>
                </a>
            </div>
        </div>
    </nav>
</header>
<div class="main">
    @yield('content')
</div>
<footer>
    <div class="footer-center">
        <div style="width: 680px; float: left;">
            <div class="footer-column"  style="width: 140px;">
                <h4 class="footer-title">
                    <img width="12px" style="margin: -2px 2px 0 0;" src="{{asset('assets/image/htbros-gray.png')}}" /> Software
                </h4>
                <p><a title="Giới thiệu" href='{{url("tin-tuc")}}'>@lang('_layouts_default.ht_gioi_thieu')</a></p>
                <p><a title="Trợ giúp" href='{{url("tro-giup")}}'>@lang('_layouts_default.ht_tro_giup')</a></p>
                <p><a title="Tin tức Htbros" href='{{url("tin-tuc")}}'>@lang('_layouts_default.ht_tin_tuc_moi')</a></p>
                <p><a title="Htbros @lang('_layouts_default.ht_rss')" href='{{url("tin-tuc/rss")}}'>
                    <i class="fa fa-rss"></i> @lang('_layouts_default.ht_rss')
                </a></p>
            </div>
            <div class="footer-column">
                <h4 class="footer-title">@lang('_layouts_default.ht_san_pham')</h4>
                <p><a title="@lang('_layouts_default.ht_the_gioi_troll_face')" href='{{url("san-pham/the-gioi-trollface")}}'>@lang('_layouts_default.ht_the_gioi_troll_face')</a></p>
                <p><a title="@lang('_layouts_default.ht_co_bay_ngua')" href='{{url("san-pham/co-bay-ngua")}}'>@lang('_layouts_default.ht_co_bay_ngua')</a></p>
            </div>
            <div class="footer-column" style="width: 230px;">
                <h4 class="footer-title">@lang('_layouts_default.ht_dich_vu')</h4>
                <p><a href='{{url("dich-vu#ung-dung-di-dong")}}'>@lang('_layouts_default.ht_thiet_ke_ung_dung_di_dong')</a></p>
                <p><a href='{{url("dich-vu#thiet-ke-web")}}'>@lang('_layouts_default.ht_thiet_ke_website')</a></p>
                <p><a href='{{url("dich-vu#tro-choi-di-dong")}}'>@lang('_layouts_default.ht_thiet_ke_tro_choi_di_dong')</a></p>
            </div>
            <div class="footer-column" style="width: 140px;">
                <h4 class="footer-title">@lang('_layouts_default.ht_nha_phat_trien')</h4>
                <p><a href="#@lang('_layouts_default.ht_api')">@lang('_layouts_default.ht_api')</a></p>
                <p><a href="#Lập-trình">@lang('_layouts_default.ht_lap_trinh')</a></p>
                <p><a href="{{url('developer/documentation')}}">@lang('_layouts_default.ht_tai_lieu')</a></p>
            </div>
        </div>
        <div class="footer-column contact-us">
            <h4 class="footer-title">@lang('_layouts_default.ht_lien_he_chung_toi')</h4>
            <p>@lang('_layouts_default.ht_sdt') : <a href="tel:@lang('_layouts_default.ht_sdt_so')">@lang('_layouts_default.ht_sdt_so')</a></p>
            <p>@lang('_layouts_default.ht_email') : <a href="mailto:contact@htbros.com">contact@htbros.com</a></p>
            <p>@lang('_layouts_default.ht_dia_chi') : <a href="https://goo.gl/R9jPdg" target="_blank">@lang('_layouts_default.ht_dia_chi_chi_tiet')</a></p>
            <p><a style="float:left;" href="https://goo.gl/RoK3Ks" target="_blank" title="@lang('_layouts_default.ht_dia_chi')">
                    <img class="htbros-address" alt="@lang('_layouts_default.ht_dia_chi_htbros')" src="{{url('assets/image/home-address.png')}}">
                </a>
            </p>
        </div>
        <div class="footer-column social-colum">
            <a href="https://www.facebook.com/htbros" title="Facebook" target="_blank"><i class="fa fa-facebook-square fa-lg"></i></a>
            <a href="https://twitter.com/htbros1" title="Twitter" target="_blank"><i class="fa fa-twitter-square fa-lg"></i></a>
            <a href="https://www.linkedin.com/company/htbros" title="Linkedin" target="_blank"><i class="fa fa-linkedin-square fa-lg"></i></a>
            <a href="https://plus.google.com/118120389176349847157" title="Google+" target="_blank"><i class="fa fa-google-plus-square fa-lg"></i></a>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-bottom-center">
            <span>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2017 Htbros Software</span>
			<span class="footer-bottom-center-right">
				<a title="@lang('_layouts_default.ht_gioi_thieu') về Htbros" target="_blank" href="{{url('gioi-thieu')}}">@lang('_layouts_default.ht_gioi_thieu')</a>
				<a title="@lang('_layouts_default.ht_lien_he') Htbros" href="#Liên-hệ-Htbros">@lang('_layouts_default.ht_lien_he')</a>
				<a title="@lang('_layouts_default.ht_dieu_khoan') Htbros" href="#Điều-khoản-Htbros">@lang('_layouts_default.ht_dieu_khoan')</a>
				<a title="@lang('_layouts_default.ht_ho_tro') Htbros" href="#Hỗ-trợ-Htbros">@lang('_layouts_default.ht_ho_tro')</a>
				<a title="@lang('_layouts_default.ht_so_do_trang') htbros.com" target="_blank" href="{{url('sitemap.html')}}">
                    @lang('_layouts_default.ht_so_do_trang')
                </a>
			</span>
        </div>
    </div>
</footer>
</body>
</html>
