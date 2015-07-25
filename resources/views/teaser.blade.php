
@extends('tpl2')

@section('styles')
<link href="{{ asset('/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/owl-carousel/assets/owl.theme.green.css') }}" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<style>

    body{
        height: 100%;
        font-family: 'Open Sans', sans-serif;
        background-color : #fff;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-image: url(images/teaserbglo.jpg);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.18);
        padding-bottom : 30px;
    }

    @media only screen and (min-width: 1200px) {
        body {
            background-image: url(images/teaserbgvhi.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        body {
            background-image: url(images/teaserbghi.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        body {
            background-image: url(images/teaserbgmed.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (max-width: 767px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 13px;
        }
    }
    @media only screen and (max-width: 512px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 12px;
        }
    }
    @media only screen and (min-width: 320px)  and (max-width: 512px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 11px;
        }
    }
    @media only screen and (max-width: 319px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 10px;
        }
    }
    .header{
        width: 100%;
        text-align: center;
        font-size: 4em;
        color: #fff;
        position: relative;
        padding-top: 50px;

    }
    p.slogan{
        text-align: center;
        color: #fff;
        font-size: 1.5em;

        font-weight: 100;
    }

    #nav-top {
        padding: 10px 0;
    }
    #nav-top ul > li a {
        color: #fff;
        font-size: 13px;
        text-decoration: none;
    }
    #nav-top ul > li a i.fa {
        width: 2.285714em;
    }

    @-moz-keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            -moz-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -moz-transform: translateY(-25px);
            transform: translateY(-25px);
        }
        60% {
            -moz-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }
    @-webkit-keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -webkit-transform: translateY(-25px);
            transform: translateY(-25px);
        }
        60% {
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }
        40% {
            -moz-transform: translateY(-25px);
            -ms-transform: translateY(-25px);
            -webkit-transform: translateY(-25px);
            transform: translateY(-25px);
        }
        60% {
            -moz-transform: translateY(-15px);
            -ms-transform: translateY(-15px);
            -webkit-transform: translateY(-15px);
            transform: translateY(-15px);
        }
    }


    .bounce {
        -moz-animation: bounce 2s infinite;
        -webkit-animation: bounce 2s infinite;
        animation: bounce 2s infinite;
    }


    .noradius input,.noradius button,.noradius select,.noradius textarea{
            border-radius: 0;
    }

    .btn-squared{
        border-radius: 0;
    }

    .form-control:focus {
        border-color: #36612D;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(54, 97, 45, 0.6);
    }
    .text-white{
        color : #fff !important;
    }
    .page-scroll{
        color: #fff;
        font-size: 35px;
        display: block;
        text-align: center;
        display:none;
    }
</style>
@endsection

@section('content')

<div id="fb-root"></div>
<nav>
    <div class="container">
        <div id="nav-top" class="row">
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li>
                        <a href="mailto:info@kcomrealty.com">
                            <i class="fa fa-fw fa-envelope-o"></i>Email us at info@kcomrealty.com
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul class="list-inline pull-right">
                    <li>
                        <a href="#">
                            <i class="fa fa-fw fa-facebook"></i>Like us on Facebook
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-fw fa-twitter"></i>Follow us on Twitter
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="main" class="container">

    <div style="
                background-image: url(images/kcom-logo.png);
                height: 200px;
                width: 200px;
                background-size: contain;
                background-repeat: no-repeat;
                margin: 0 auto;
                margin-top: 43px;
                "></div>
    <h1 style="

               font-weight: bold;
               text-align: center;
               color: #36612D;
               ">K-COM REALTY</h1>

    <h1 class="header">WE&apos;RE ALMOST READY</h1>
    <p class="slogan"><i class="fa fa-fw fa-quote-left"></i>We are licensed real estate professionals<br>
        focused and dedicated to provide the best property solution<br>
        to each customers' need.</p>
    <a href="#facebook-wrapper" class="page-scroll bounce" data-offset="50"><i class="fa fa-angle-double-down"></i></a>
</div>
<div id="facebook-wrapper" class="container text-center">

    <h1 class="header">WHAT'S NEW</h1>
    <p class="slogan">Check out our Latest Properties</p>
    <div class="fb-page" data-href="https://www.facebook.com/pages/K-Com-Realty/1594136257522311" data-width="500" data-height="window.height" data-hide-cover="false" data-show-facepile="true" data-show-posts="true" style="margin:20px auto;"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/K-Com-Realty/1594136257522311"><a href="https://www.facebook.com/pages/K-Com-Realty/1594136257522311">K-Com Realty</a></blockquote></div></div>
    <a href="#contact-wrapper" class="page-scroll bounce" data-offset="50"><i class="fa fa-angle-double-down"></i></a>
</div>
<div id="contact-wrapper" class="container">
    <h1 class="header">GET IN TOUCH</h1>
    <p class="slogan">This form routes your message to us so your query gets answered faster.</p>
    <div class="row">
        <div class="col-md-6 col-sm-6">

            <!-- Contact form -->
            <div class="contact-form">
                <h2 class="text-white">Contact Form</h2>
                <form class="noradius" method="POST" action="inquire">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <!-- Name -->
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                    </div>
                    <!-- Matter -->
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Enter Message" required></textarea>
                    </div>
                    <!-- Button -->
                    <button type="submit" class="btn btn-default btn-squared">Submit</button> &nbsp;
                    <button type="reset" class="btn btn-default btn-squared">Reset</button>
                </form>
            </div>

        </div>
        <div class="col-md-6 col-sm-6">

            <!-- Contact details -->
            <div class="contact-details text-white">
                <h2>Contact Details</h2>
                <!-- Email -->
                <p><a href="#" class="text-white"><i class="fa fa-envelope"></i> &nbsp; inquire@kcomrealty.com</a></p>
                <!-- Phone -->
                <p><a href="#" class="text-white"><i class="fa fa-phone"></i> &nbsp; (02) 509-3837 / +639174280828</a></p>
                <!-- Website -->
                <p><a href="#" class="text-white"><i class="fa fa-globe"></i> &nbsp; www.kcomrealty.com</a></p>

            </div>

        </div>
    </div>

</div>
<footer>
    <center class="text-white"><small>&copy; 2015 All Rights Reserved by K-COM REALTY</small></center>
</footer>
@endsection


@section('scripts')
<script src="{{ asset('/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=787389981319133";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
    $(function(){

        $.ajaxSetup({ cache: true });
        $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
            FB.init({
                status: true,
                appId: '947111552007204',
                version: 'v2.3' // or v2.0, v2.1, v2.0
            });
            FB.Event.subscribe('xfbml.render', function(){
                $('a.page-scroll ').css('display','block');
            });
        });

        $('#main').css('min-height',$(window).height() - $('body > nav').height());

        $('a.page-scroll').bind('click', function(event) {
            var $anchor = $(this);
            var offset = typeof $(this).data('offset') != 'undefined' ? $(this).data('offset') : 0;
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top + offset
            }, 1500,'easeInOutExpo');
            event.preventDefault();
        });
    });
</script>
@endsection
