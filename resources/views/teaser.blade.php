
@extends('tpl2')


@section('content')
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<style>

body{
height: 100%;
font-family: 'Open Sans', sans-serif;
background-color : #fff;
background-size: cover;
background-position: center;
background-repeat: no-repeat;
background-image: url(images/teaserbglo.jpg);
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.18);
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
</style>
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
<div class="container">

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
</div>

@endsection


@section('scripts')
   <script>
/*   $('body').css('height',$(window).height());
   $(window).on('resize',function(){
   $('body').css('height',$(window).height());
   });*/
   </script>
@endsection
