<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
    <link rel="icon" href="{{ asset('uploads/logotron (1).png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="" />
    <script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
    <link rel='dns-prefetch' href='//cdn.jsdelivr.net' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="" href="" />
    <link rel="alternate" type="application/rss+xml" title="" href="" />
    <script type="text/javascript">
            window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"{{ asset('js/wp-emoji-release.min.js?ver=4.9.8') }}"}};
            !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='dashicons-css'  href='{{ asset('css/dashicons.min.css?ver=4.9.8') }}' type='text/css' media='all' />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
    </style>
    <link rel='stylesheet' id='menu-icons-extra-css'  href='{{ asset('plugins/menu-icons/css/extra.min.css?ver=0.11.2') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href='{{ asset('plugins/contact-form-7/includes/css/styles.css?ver=5.0.1') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='easy-callnow-css'  href='{{ asset('plugins/easy-call-now/public/css/easy-callnow-public.css?ver=1.0.0') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='menu-image-css'  href='{{ asset('plugins/menu-image/menu-image.css?ver=1.1') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='muahangnhanh-css'  href='{{ asset('plugins/muahangnhanh/style/style.css?ver=4.9.8') }}' type='text/css' media='all' />
    @yield('style2')
    <link rel='stylesheet' id='wpfront-scroll-top-css'  href='{{ asset('plugins/wpfront-scroll-top/css/wpfront-scroll-top.min.css?ver=1.6.2') }}' type='text/css' media='all' />
    @yield('yith_wccl_frontend-css')
    <link rel='stylesheet' id='bfa-font-awesome-css'  href='//cdn.jsdelivr.net/fontawesome/4.7.0/css/font-awesome.min.css?ver=4.7.0' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'  href='{{ asset('themes/flatsome/assets/css/flatsome.css?ver=3.5.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-shop-css'  href='{{ asset('themes/flatsome/assets/css/flatsome-shop.css?ver=3.5.3') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css'  href='{{ asset('themes/o-du/style.css?ver=3.5.3') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('js/jquery/jquery.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('js/jquery/jquery-migrate.min.js?ver=1.4.1') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/easy-call-now/public/js/easy-callnow-public.js?ver=1.0.0') }}'></script>
    <link rel='https://api.w.org/' href='' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="" />
    <meta name="generator" content="WordPress 4.9.8" />
    <meta name="generator" content="WooCommerce 3.3.4" />

    <div class="fix_tel">
        <div class="ring-alo-phone ring-alo-green ring-alo-show" id="ring-alo-phoneIcon" style="right: 150px; bottom: -12px;">
            <div class="ring-alo-ph-circle"></div>
            <div class="ring-alo-ph-circle-fill"></div>
            <div class="ring-alo-ph-img-circle">
                <a href="tel:0358215007">
                    <img class="lazy" src="{{ asset('plugins/easy-call-now/public/images/phone-ring.png') }}" alt="<php _e('Click to Call','call-now'); ?>">
                    <noscript>&amp;lt;img src="{{ asset('plugins/easy-call-now/public/images/phone-ring.png') }}" alt=""&amp;gt;</noscript>
                </a>
            </div>
        </div>
        <div class="tel">
            <p class="fone">0358215007</p>
        </div>
    </div>
    <style type="text/css">
            .ring-alo-phone.ring-alo-green .ring-alo-ph-img-circle {
                background-color: #f00;
            }
            .ring-alo-phone.ring-alo-green .ring-alo-ph-circle{
                background-color: #f00; 
            }
            .ring-alo-phone.ring-alo-green .ring-alo-ph-circle {
                border-color: #f00;
            }

            .ring-alo-phone.ring-alo-green.ring-alo-hover .ring-alo-ph-img-circle, .ring-alo-phone.ring-alo-green:hover .ring-alo-ph-img-circle{
                background-color: #baf5a7;      
            }

            .fone {          
                color: #f00;                
            }

            .tel{
                background-color: #eee;
            }
            .fix_tel{
                top: auto;
                bottom: auto;
                right: auto;
                left: auto;
                bottom: 15px;
                left: 5px;                          
            }
    </style>
    <style>.bg{opacity: 0; transition: opacity 1s; -webkit-transition: opacity 1s;} .bg-loaded{opacity: 1;}</style>
    <script type="text/javascript">
        WebFontConfig = {
          google: { families: [ "Roboto:regular,700","Roboto:regular,regular","Roboto:regular,regular","-apple-system,+BlinkMacSystemFont,+&quot;Segoe+UI&quot;,+Roboto,+Oxygen-Sans,+Ubuntu,+Cantarell,+&quot;Helvetica+Neue&quot;,+sans-serif:regular,regular", ] }
        };
        (function() {
          var wf = document.createElement('script');
          wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
          wf.type = 'text/javascript';
          wf.async = 'true';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(wf, s);
        })(); 
    </script>
    <style>.product-gallery img.lazy-load, .product-small img.lazy-load, .product-small img[data-lazy-srcset]:not(.lazyloaded){ padding-top: 119.83805668016%;}
    </style>
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style id="custom-css" type="text/css">:root {--primary-color: #DD3333;}/* Site Width */.full-width .ubermenu-nav, .container, .row{max-width: 1220px}.row.row-collapse{max-width: 1190px}.row.row-small{max-width: 1212.5px}.row.row-large{max-width: 1250px}.header-main{height: 63px}#logo img{max-height: 63px}#logo{width:120px;}#logo img{padding:5px 0;}.header-top{min-height: 30px}.transparent .header-main{height: 30px}.transparent #logo img{max-height: 30px}.has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title{padding-top: 30px;}.header.show-on-scroll,.stuck .header-main{height:60px!important}.stuck #logo img{max-height: 60px!important}.search-form{ width: 68%;}.header-bg-color, .header-wrapper {background-color: #eee}.header-bottom {background-color: #F1F1F1}.header-main .nav > li > a{line-height: 30px }.stuck .header-main .nav > li > a{line-height: 42px }.header-bottom-nav > li > a{line-height: 16px }@media (max-width: 549px) {.header-main{height: 70px}#logo img{max-height: 70px}}.nav-dropdown-has-arrow li.has-dropdown:before{border-bottom-color: #000000;}.nav .nav-dropdown{border-color: #252525 }.nav-dropdown{border-radius:3px}.nav-dropdown{font-size:107%}.nav-dropdown-has-arrow li.has-dropdown:after{border-bottom-color: #000000;}.nav .nav-dropdown{background-color: #eee}/* Color */.accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary{color: #DD3333;}/* Color !important */[data-text-color="primary"]{color: #DD3333!important;}/* Background */.scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner{background-color: #DD3333;}/* Border */.nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover{border-color: #DD3333}.nav-tabs > li.active > a{border-top-color: #DD3333}.widget_shopping_cart_content .blockUI.blockOverlay:before { border-left-color: #DD3333 }.woocommerce-checkout-review-order .blockUI.blockOverlay:before { border-left-color: #DD3333 }/* Fill */.slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow{fill: #DD3333;}/* Background Color */[data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button{ background-color:#041133; }/* Color */.secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary{color: #041133}/* Color !important */[data-text-color="secondary"]{color: #041133!important;}/* Border */.secondary.is-outline:hover{border-color:#041133}.success.is-underline:hover,.success.is-outline:hover,.success{background-color: #1F7CC4}.success-color, .success.is-link, .success.is-outline{color: #1F7CC4;}.success-border{border-color: #1F7CC4!important;}.alert.is-underline:hover,.alert.is-outline:hover,.alert{background-color: #DD3333}.alert.is-link, .alert.is-outline, .color-alert{color: #DD3333;}body{font-size: 100%;}@media screen and (max-width: 549px){body{font-size: 100%;}}body{font-family:"Roboto", sans-serif}body{font-weight: 0}body{color: #383838}.nav > li > a {font-family:"Roboto", sans-serif;}.nav > li > a {font-weight: 0;}h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a{font-family: "Roboto", sans-serif;}h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2{font-weight: 700;}h1,h2,h3,h4,h5,h6,.heading-font{color: #2B2B2B;}button,.button{text-transform: none;}.nav > li > a, .links > li > a{text-transform: none;}.section-title span{text-transform: none;}h3.widget-title,span.widget-title{text-transform: none;}.alt-font{font-family: "-apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, Oxygen-Sans, Ubuntu, Cantarell, &quot;Helvetica Neue&quot;, sans-serif", sans-serif;}.alt-font{font-weight: 0!important;}.header:not(.transparent) .header-nav.nav > li > a {color: #0A0A0A;}.header:not(.transparent) .header-nav.nav > li > a:hover,.header:not(.transparent) .header-nav.nav > li.active > a,.header:not(.transparent) .header-nav.nav > li.current > a,.header:not(.transparent) .header-nav.nav > li > a.active,.header:not(.transparent) .header-nav.nav > li > a.current{color: #7A7A7A;}.header-nav.nav-line-bottom > li > a:before,.header-nav.nav-line-grow > li > a:before,.header-nav.nav-line > li > a:before,.header-nav.nav-box > li > a:hover,.header-nav.nav-box > li.active > a,.header-nav.nav-pills > li > a:hover,.header-nav.nav-pills > li.active > a{color:#FFF!important;background-color: #7A7A7A;}a{color: #1E73BE;}a:hover{color: #1E73BE;}.tagcloud a:hover{border-color: #1E73BE;background-color: #1E73BE;}.widget a{color: #000000;}.widget a:hover{color: #DD3333;}.widget .tagcloud a:hover{border-color: #DD3333; background-color: #DD3333;}.products.has-equal-box-heights .box-image {padding-top: 100%;}@media screen and (min-width: 550px){.products .box-vertical .box-image{min-width: 247px!important;width: 247px!important;}}.header-main .social-icons,.header-main .cart-icon strong,.header-main .menu-title,.header-main .header-button > .button.is-outline,.header-main .nav > li > a > i:not(.icon-angle-down){color: #8C8C8C!important;}.header-main .header-button > .button.is-outline,.header-main .cart-icon strong:after,.header-main .cart-icon strong{border-color: #8C8C8C!important;}.header-main .header-button > .button:not(.is-outline){background-color: #8C8C8C!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover,.header-main .header-button > .button:hover i,.header-main .header-button > .button:hover span{color:#FFF!important;}.header-main .menu-title:hover,.header-main .social-icons a:hover,.header-main .header-button > .button.is-outline:hover,.header-main .nav > li > a:hover > i:not(.icon-angle-down){color: #9B9B9B!important;}.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{background-color: #9B9B9B!important;}.header-main .current-dropdown .cart-icon strong:after,.header-main .current-dropdown .cart-icon strong,.header-main .header-button > .button:hover{border-color: #9B9B9B!important;}.absolute-footer, html{background-color: #f8f8f8}.page-title-small + main .product-container > .row{padding-top:0;}@media (max-width: 949px){.menu-item a.menu-image-title-below.menu-image-not-hovered img, .menu-item a.menu-image-hovered.menu-image-title-below .menu-image-hover-wrapper {display: block;padding-bottom: 12px;margin: 0 auto;margin: auto;max-height: 30px;display: none;display: none !important;} .flex-left {margin-right: auto;background: #ffffff00 !important;height: 74px;padding-top: 10px;padding-left: 10px;margin-right: 40px;}#logo { background: transparent !important;padding-top: 5px !important;padding-left: 0px!important;}.header-main {height: 63px;background: #d70018;}}.vi-header {border-bottom: solid 1px #ffffff !important;}.pull-right {float: right;font-size: 18px;padding-right: 15px;font-weight: normal !important;}.vi-header {border-bottom: solid 0px #0056a8;background: white;}.vi-left-title {width: auto;background: #000000 !important;color: #fff;padding: 3px 10px;font-size: 18px;position: relative;margin: 0;}.vi-left-title:after {border: 17px solid transparent;border-left-color: #000000;position: absolute;top: 0;left: 100%;content: "";}.pull-left {float: left;}.vi-right-link a.vi-more, .vi-right-link a:hover {color: #0056a8;}.vi-right-link a:first-child {margin-left: 0;}.pull-right {float: right;}.star-rating:before{ color:#FFDB00 !important;}@media (max-width: 849px){.menu-item a.menu-image-title-above, .menu-item a.menu-image-title-below {text-align: left;}.menu-item a.menu-image-title-below.menu-image-not-hovered img, .menu-item a.menu-image-hovered.menu-image-title-below .menu-image-hover-wrapper {display: block;padding-bottom: 12px;margin: 0 auto;margin: auto;max-height: 30px;display: none;}}@media (max-width: 549px){.menu-item a.menu-image-title-above, .menu-item a.menu-image-title-below {text-align: left;}.menu-item a.menu-image-title-below.menu-image-not-hovered img, .menu-item a.menu-image-hovered.menu-image-title-below .menu-image-hover-wrapper {display: block;padding-bottom: 12px;margin: 0 auto;margin: auto;max-height: 30px;display: none;}.vi-right-link a {color: #555;font-size: 14px;margin-left: 15px;display: none;}}.label-new.menu-item > a:after{content:"New";}.label-hot.menu-item > a:after{content:"Hot";}.label-sale.menu-item > a:after{content:"Sale";}.label-popular.menu-item > a:after{content:"Popular";}
    </style>
    <style type="text/css" id="wp-custom-css">
        /*
            Bạn có thể thêm CSS ở đây.

            Nhấp chuột vào biểu tượng trợ giúp phía trên để tìm hiểu thêm.
        */
        .jshop_short_description {
            border: 1px dashed #e62e04;
            padding: 10px 10px 10px 10px;
        }
        .product-info .price {
            font-size: 16px;
        }
        .price-wrapper span {
            font-size: 16px !important;
            color: red;
            color: red;
            font-weight: bold;
            text-shadow: 1px 1px 0 #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 3px 3px 5px #333;
        }
        div.title-wrapper
        {
        font-weight: bold;
        font-size: 11px !important;
        color:black !important;
        }
        .select_option span, .select_option img {
            border: 2px solid #fff;
            display: block;
            width: 50px;
            height: 27px;
            text-decoration: none;
            line-height: 27px;
            text-align: center;
            cursor: pointer;
        }
        .badge-inner.on-sale {
            background-color: #ff3d37 !important;
            border-bottom-right-radius: 12px;
        }
        .box-text p {
            margin-top: .1em;
            margin-bottom: .1em;
            font-size: 14px !important;
        }
        .pull-right {
            float: right;
            font-size: 18px;
            padding: 5px;
        }
        .pull-left {
            float: left;
            width: 100%;
        }
        .nav-uppercase>li>a {
            letter-spacing: .02em;
            text-transform: uppercase;
            font-weight: normal;
        }
        .pull-right {
            margin-right: 0!important;

        }
        .section {
            padding: 3px 0 !important;
        }
        #section_2097714112 {
            padding-top: 6px;
            padding-bottom: 6px;
            background-color: rgb(248, 248, 248);
        }
        .row-dashed .col:after, .row-solid .col:after {
            position: absolute;
            content: " ";
            width: 100%;
            height: 0;
            top: auto;
            left: 0;
            bottom: -1px;
            border-bottom: 0px dashed #ddd;
        }
        .row-dashed .col:before, .row-solid .col:before {
            position: absolute;
            content: " ";
            height: 100%;
            top: 0;
            left: -1px;
            border-left: 0px dashed #ddd;
        }
        .manhphuc-home-header ul {
            list-style: none;
            display: block!important;
            margin: 0;
            padding: 0;
            float: right;
            position: absolute;
            top: 0;
            right: 0;
        }
        .manhphuc-home-header h4 {
            padding: 0 8px 0 12px;
            height: 100%;
            position: relative;
            margin: 0;
            float: left;
        }
        .manhphuc-home-header ul li {
            display: block;
            float: left;
            margin: 0;
        }
        @media screen and (min-width: 880px)
        .manhphuc-home-header ul {
            display: block !important;
        }
        .manhphuc-home-header ul li a {
            display: block;
            height: 44px;
            line-height: 30px;
            color: #444;
            font-size: 12px;
            font-weight: 400;
            white-space: nowrap;
            padding: 7px 9px;
            letter-spacing: .1px;
        }
        .manhphuc-home-header h4 a i.ico {
            font-size: 0;
            width: 28px;
            height: 28px;
            display: inline-block;
            vertical-align: middle;
            background-size: contain;
            background-repeat: no-repeat;
            margin-right: 10px;
            margin-top: -2px;
            background-position: center center;
        }
        .manhphuc-home-header h4 a i.ico.ico-cellphone {
            background-image: url(http://tinhay24h.info/wp-content/uploads/2017/12/ic-cellphone.svg);
        }
        .manhphuc-home-header h4 a {
            font-size: 16px;
            font-weight: 400;
            display: block;
            color: #4a4a4a;
            padding: 0;
            margin: 0;
            line-height: 47px;
        }
        .manhphuc-home-header {
            background: #fff;
            height: 45px;
            margin-bottom: 10px;
            position: relative;
            border-bottom: 1px solid #f2f2f2;
            border-radius: 4px 4px 0px 0px;
        }
        .manhphuc-row-one .manhphuc-row-one-sp .col {
            padding-bottom: 0;
        }
        .header-main .nav > li > a {
            line-height: 20px !important;
            text-align: center !important;
            margin: 0px auto 0px !important;
            display: inline-block;
            padding-top: 10px;
            position: relative;
        }
        .menu-item a.menu-image-title-below.menu-image-not-hovered img, .menu-item a.menu-image-hovered.menu-image-title-below .menu-image-hover-wrapper {
            display: block;
            padding-bottom: 12px;
            margin: 0 auto;
            margin: auto;
            max-height: 30px;
        }
        .button.secondary:not(.is-outline) {
            border-top-right-radius: 0px;
            border-bottom-right-radius: 0px;
            background-color: #000000;
            line-height: 39px;
            padding: 0px 5px;
        }
        .form-flat input:not([type="submit"]), .form-flat textarea, .form-flat select {
            background-color: rgb(255, 255, 255);
            box-shadow: none;
            border-color: rgba(0,0,0,0.09);
            background-position: 99% 50%;
            color: currentColor !important;
            border-radius: 99px;
        }
        .logo-left .logo {
            margin-left: 0;
            margin-right: 0px;
        }
        .flex-left {
            margin-right: auto;
            background: #d70018;
            height: 74px;
        padding-top: 10px;
        padding-left: 10px;
        margin-right: 40px;
        }

        #logo {
            width: 93px;
            background: #d70018;
            height: 74px;
        padding-top: 10px;
        padding-left: 10px;
        }


        .pull-right {
            float: right;
            font-size: 18px;
        }
        .vi-left-title a {
            color: #fff;
        }
        .vi-left-title a:hover {
            color: #FFEBA4;
        }
        .vi-right-link a.vi-more:after {
            content: "\f101";
            font-family: FontAwesome;
            margin-left: 4px;
        }
        .clear:after, .clearfix:after, .container:after, .row:after {
            content: "";
            display: table;
            clear: both;
        }
        .vi-right-link a {
            color: #555;
            font-size: 14px;
            margin-left: 15px;
        }
        .vi-right-link a.vi-more, .vi-right-link a:hover {
            color: #0056a8;
        }
        .pull-right {
            margin-right: 0!important;
        }

        .vi-left-title {
            width: auto;
            background: #0056a8;
            color: #fff !important;
            padding: 3px 10px;
            font-size: 18px;
            position: relative;
            margin: 0;
        }
        .vi-header {
            border-bottom: solid 1px #0056a8;
        }
        pre, blockquote, form, figure, p, dl, ul, ol {
            margin-bottom: 0.33em;
        }
        h1, h2, h3, h4, h5, h6 {
            color: #555;
            width: 100{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984};
            margin-top: 0;
            margin-bottom: .15em;
            text-rendering: optimizeSpeed;
        }
        .widgets-boxed .widget h3 {
            background-color: #ff0000;
            margin-left: -21px;
            margin-top: -16px;
            padding: 5px 20px 5px;
            width: calc(100{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984} + 42px);
            color: #FFF;
            font-size: 16px;
        }
        .section-title-normal {
            border-bottom: 3px solid #ff0000 !important;
        }
        .section-title-normal span {
            font-size: 17px;
            margin-right: 5px;
            padding-bottom: 7.5px;
            /* border-bottom: 5px solid rgba(0,0,0,0.1); */
            margin-bottom: -2px;
            background: none;
            color: black !important;
            padding: 3px 1px;
        }
        .price-wrapper span {
            color: red;
            font-size: 15px;
        }
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        #banner .base, .hotline1 i {
            color: #FFF307;
        }
        .hotline1 p, #banner .base p, #banner .base h3 {
            margin-bottom: 5px;
        }
        .hotline1 p {
            border: 1px solid #d0922c;
            color: #d0922c;
            border-radius: 15px;
            font-style: normal;
            padding: 5px;
        }
        .hotline1 p:first-child {
            background-color: #d0922c;
        }
        .hotline1 p {
            border: 1px solid #d0922c;
            color: #d0922c;
            border-radius: 15px;
            font-style: normal;
            padding: 5px;
        }
        .glyphicon-earphone:before {
            content: "\e182";
        }
        .glyphicon {
            position: relative;
            top: 1px;
            display: inline-block;
            font-family: 'Glyphicons Halflings';
            font-style: normal;
            font-weight: 400;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        #banner .base p {
            color: #fff;
        }
        #banner .base h3 {
            margin-top: 10px;
            font-weight: bold;
            color: #fff307;
            text-transform: uppercase;
        }
        .hotline p, #banner .base p, #banner .base h3 {
            margin-bottom: 1px;
        }
        #banner .base h3 {
            margin-top: 10px;
            font-weight: bold;
        }
        .back-to-top.active {
            opacity: 1;
            pointer-events: inherit;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            display: none;
        }
        .nav-tabs>li>a {
            border-top: 2px solid #ddd;
            border-left: 1px solid #ddd;
            border-right: 1px solid #ddd;
            background-color: rgba(0,0,0,0.04);
            padding-left: 15px;
            padding-right: 15px;
            color: white;
            background: #c22b3b;
            font-family: arial !important;
        }
        p.name.product-title{
        height: 40px;
        overflow-y: hidden;
        }
        .back-to-top {
            margin: 0;
            opacity: 0;
            bottom: 220px;
            right: 20px;
            pointer-events: none;
            -webkit-transform: translateY(30{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984});
            -ms-transform: translateY(30{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984});
            transform: translateY(30{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984});
        }
        #mega_menu > li > a {
            padding-left: 15px;
            background: #f5f4f4;
        }
        #mega-menu-title {
            font-weight: normal;
            text-transform: uppercase;
            color: white;
            background: #ff9600 ;
        }
        .product-main .cart{display:non1e}
        .khuyen-mai{border: 1px solid #bfbfbf;
            padding: 8px;
            font-size: 14px;
            border-radius: 8px;
            margin-bottom: 15px;
            line-height: 18px;}
        .khuyen-mai h4{color:red}
        .khuyen-mai li{    list-style: none; margin-bottom: 5px}
        .khuyen-mai li a{color:#00b9eb}
        .khuyen-mai li.page-wrapper a:hover{color: gray}
        .button-product{width:100{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984}; display: block;padding: 0 9.8px 0px;}
        .product-main .row-small>.col{padding: 0 9.8px 0px;}
        .product-main .button{margin-bottom: 0}
        .product-main{padding: 0px 0;}
        #mega-menu-wrap{background: #ffb302;}
        body{font-weight: normal}
        .header:not(.transparent) .header-bottom-nav.nav > li > a{font-weight: normal}
        #mega-menu-title{font-weight: normal}
        #mega_menu li a{font-size: 15px;color: #404040;}
        .header-1main{background-image: url(http://noithanghoa.hunghaweb.com/wp-content/uploads/2017/08/banner1.jpg);
            background-repeat: no-repeat;
            margin: 0 auto;}
        input[type='search']{border-top-left-radius: 5px;    border: 0px solid #ffb302;    height: 39px;    font-size: 15px;
            border-bottom-left-radius: 5px;}
        .button.secondary:not(.is-outline){border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;background-color: black;
        }
        .page-wrapper {
            padding-top: 30px;
            padding-bottom: 10px;
        }
        #wide-nav > .flex-row > .flex-left{width: 25{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984};
            max-width: 282px;
            margin-right: 15px;}
        #mega_menu > li > a{padding-left: 15px;}
        .row .section{padding-left:0px; padding-right:0}
        .product-main{padding-top: 10px}
        .product-main .product-info .breadcrumbs {
            font-size: 14px;
            margin: 0 0 10px;
            text-transform: none;
        }
        h1.product-title.entry-title{font-size:22px}
        .is-divider{display:None}
        .product-main .price-wrapper .price del{font-size: 15px; color: gray}
        .product-main .price-wrapper .price ins span.amount{color: red}
        .product-main .product-short-description{font-size:15px}
        .product-main .badge-inner.on-sale{background-color: #0092ff;border-bottom-right-radius: 12px;}
        .product-main .badge-container{margin-top: 5px;
        }
        .product-main .badge{    height: 30px;
            width: 50px;}
        .form-flat input:not([type="submit"]){border-radius:4px;font-size: 15px;}
        button.btn.btn-default{background: orange;color: white;
            border: 1px solid orange;
            padding: 0px 10px;
            color: white;
            border-radius: 4px;}
        .detailcall-1 span {
            display: block;
            margin-top: 0px;
            color: white;
            font-size: 14px;
        }
        .detailcall-1 h3{    margin-bottom: 0;}
        .detailcall-1{padding: 3px 20px; box-shadow: 0 0px 0 0 #ffffff inset;}
        .product-main  span.amount{color: red}
        .box-vertical .box-text{padding-left: 8px; padding-right: 8px;vertical-align: top;}
        .best-sale .text-center>div{text-align: right}
        .best-sale .box-text p{margin-bottom: 10px;
            font-size: 15px;}
        .best-sale .price-wrapper .price ins{font-size: 22px;
            display: block;
            margin-top: 10px;}
        .best-sale .price-wrapper .price ins span{color: red}
        category uppercase is-smaller no-text-overflow product-cat op-7{font-size: 13px}
         .badge-container{margin:0}
        .badge{    height: 30px;
            width: 50px;}
        .badge-inner.on-sale{    background-color: #0092ff;
            border-bottom-right-radius: 12px;}
         .price-wrapper{font-size:22px;}
         .price-wrapper span{color: red}
          .price-wrapper del span{font-size:14px; color: gray}
        .woocommerce-Price-currencySymbol{font-size:14px}
        .product-info .price{font-size:22px}
        .best-sale a{color: black}
        .best-sale a:hover{color: #0092ff}
        .title{background: whitesmoke;height: 35px;    border-bottom: 2px solid #0092ff;
            margin-bottom: 15px;}
        .title h3{    line-height: 33px;
            border-left: 15px solid #0092ff;}
        .title h3 a{
            font-size: 15px; color:#0092ff; padding-left:10px; font-weight:normal}
        .cat-title{
            padding-top: 3px;    border-top-left-radius: 0px;
            padding-bottom: 0px;margin:0}
        .cat-title h3{margin: 0;
            text-align: center;}
        .cat-title h3 a{color: white;font-size: 15px;font-weight:normal;    line-height: 36px;}
        .catelogy .cat-title{background: #ff0000;}
        .col{    padding: 0 15px 10px;}
        .has-shadow .box:not(.box-overlay):not(.box-shade){border-radius: 4px}
        .box-vertical .box-image{width: 58{8821892894ce026370d576b7c5047d5dd9903a6e8aedcd35f4a86836f9f97984}}
        .row-small>.col{padding: 0 9.8px 10px;}
        .box-text a:not(.button){margin-bottom: 10px}
        .catelogy2 .cat-title{background: #0092ff;border-top-right-radius: 0px;border-top-left-radius: 0px;}
        .catelogy3 .cat-title{background: #40c317;}

        .no-text-overflow{overflow: initial;}
        .nhan-tin-khuyen-mai p{margin:0}
        .nhan-tin-khuyen-mai .form-flat input:not([type="submit"]){    border: 1px solid white;
            background: white;}
        .form-flat button, .form-flat input{    border-radius: 4px;}
        .nhan-tin-khuyen-mai input[type='submit']:not(.is-form){background-color: #40c317;}
        .nhan-tin-khuyen-mai .form-flat input:not([type="submit"]){color: white}
        .footer-1 span.amount{color: red}
        .footer-1 a{color: black; font-size: 15px}
        .footer-1 a:hover{color: #0092FF}
        .absolute-footer{font-size: 13px}
        .widget a{font-size:15px}
        .off-canvas .sidebar-inner{font-size: 15px;}
        .product-footer .pt-half{display:no1ne}
        .badge.top{display:none}        
    </style>
    @yield('head')	
</head>
<body class="post-template-default single single-post postid-2044 single-format-standard lightbox lazy-icons nav-dropdown-has-arrow">
    <a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        <!-- start header -->
        @include('guest.elements.header')
        <!-- end header -->

        <!-- start main -->
        @yield('main')
        <!-- end main -->

        <!-- start footer -->
        @include('guest.elements.footer')
        <!-- end footer -->
    </div> 
    <!-- start Mobile Sidebar -->
    @include('guest.elements.mobile-sidebar')
    <!-- end Mobile Sidebar -->
    <!-- start script -->
    <script type="text/javascript">function wpfront_scroll_top_init() {if(typeof wpfront_scroll_top == "function" && typeof jQuery !== "undefined") {wpfront_scroll_top({"scroll_offset":200,"button_width":0,"button_height":0,"button_opacity":0.8,"button_fade_duration":200,"scroll_duration":400,"location":1,"marginX":20,"marginY":20,"hide_iframe":false,"auto_hide":false,"auto_hide_after":2});} else {setTimeout(wpfront_scroll_top_init, 100);}}wpfront_scroll_top_init();
    </script>  
    <script id="lazy-load-icons">
        /* Lazy load icons css file */
            var fl_icons = document.createElement('link');
                fl_icons.rel = 'stylesheet';
                fl_icons.href = '{{ asset('themes/flatsome/assets/css/fl-icons.css') }}';
                fl_icons.type = 'text/css';
            var fl_icons_insert = document.getElementsByTagName('link')[0];
                fl_icons_insert.parentNode.insertBefore(fl_icons, fl_icons_insert);
    </script>
    <script type='text/javascript' src='{{ asset('plugins/contact-form-7/includes/js/scripts.js?ver=5.0.1') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/muahangnhanh/js/myscript.js?ver=4.9.8') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.3.4') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.3.4') }}'></script>
    <script type='text/javascript' src='{{ asset('plugins/wpfront-scroll-top/js/wpfront-scroll-top.min.js?ver=1.6.2') }}'></script>
    <script type='text/javascript' src='{{ asset('themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.5.3') }}'></script>
    <script type='text/javascript' src='{{ asset('js/hoverIntent.min.js?ver=1.8.1') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
            var flatsomeVars = {"ajaxurl":"http:\/\/localhost\/TGDD\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"60"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('themes/flatsome/assets/js/flatsome.js?ver=3.5.3') }}'></script>
    <script type='text/javascript' src='{{ asset('themes/flatsome/inc/extensions/flatsome-lazy-load/flatsome-lazy-load.js?ver=1.0') }}'></script>
    <script type='text/javascript' src='{{ asset('themes/flatsome/assets/js/woocommerce.js?ver=3.5.3') }}'></script>
    <script type='text/javascript' src='{{ asset('js/wp-embed.min.js?ver=4.9.8') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
            var _zxcvbnSettings = {"src":"{{ asset('js/zxcvbn.min.js') }}"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('js/zxcvbn-async.min.js?ver=1.0') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
            var pwsL10n = {"unknown":"M\u1eadt kh\u1ea9u m\u1ea1nh kh\u00f4ng x\u00e1c \u0111\u1ecbnh","short":"R\u1ea5t y\u1ebfu","bad":"Y\u1ebfu","good":"Trung b\u00ecnh","strong":"M\u1ea1nh","mismatch":"M\u1eadt kh\u1ea9u kh\u00f4ng kh\u1edbp"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('js/password-strength-meter.min.js?ver=4.9.8') }}'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
            var wc_password_strength_meter_params = {"min_password_strength":"3","i18n_password_error":"Vui l\u00f2ng nh\u1eadp m\u1eadt kh\u1ea9u kh\u00f3 h\u01a1n.","i18n_password_hint":"G\u1ee3i \u00fd: M\u1eadt kh\u1ea9u ph\u1ea3i c\u00f3 \u00edt nh\u1ea5t 12 k\u00fd t\u1ef1. \u0110\u1ec3 n\u00e2ng cao \u0111\u1ed9 b\u1ea3o m\u1eadt, s\u1eed d\u1ee5ng ch\u1eef in hoa, in th\u01b0\u1eddng, ch\u1eef s\u1ed1 v\u00e0 c\u00e1c k\u00fd t\u1ef1 \u0111\u1eb7c bi\u1ec7t nh\u01b0 ! \" ? $ % ^ & )."};
        /* ]]> */
    </script>
    <script type='text/javascript' src='{{ asset('plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=3.3.4') }}'></script>
    @yield('script')
    <!-- end script -->
</body>
</html>