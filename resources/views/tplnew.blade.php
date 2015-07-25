<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>Find your way home | For Sale , Lease , Ready for Occupancy | K-Com Realty</title>
        <meta name="description" content="Condos , Villas, Townhouses for sale in the Philippines. Find your home or list your property for selling here on K-COM Realty.">
        <meta name="keywords" content="realtors,real estate agent,selling a home,sell your home,house for sale,find real estate,condos for sale,townhomes for sale,cheap houses for sale">
        <meta name="robot" content="index,follow">
        <meta name="copyright" content="Copyright © 2015 K-COM Realty. All Rights Reserved.">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link href="{{ elixir('css/styles.css') }}" rel="stylesheet">
        <link href="{{ asset('/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
        <link href="{{ asset('/plugins/owl-carousel/assets/owl.theme.green.css') }}" rel="stylesheet">
        <link href="{{ elixir('css/homenew.css') }}" rel="stylesheet">

        @yield('styles')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top">
                <div id="nav-top" class="hidden-xs container-fluid">
                    <div class="container">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <button type="button" class="btn btn-xs btn-link navbar-btn"><i class="fa fa-fw fa-phone"></i>(02) 509-3837 / +639174280828</button>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button type="button" data-toggle="tooltip" data-container="body" data-placement="bottom" title="Like us on Facebook" class="btn btn-xs btn-link navbar-btn"><i class="fa fa-fw fa-facebook"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="tooltip" data-container="body" data-placement="bottom" title="Follow us on Twitter" class="btn btn-xs btn-link navbar-btn"><i class="fa fa-fw fa-twitter"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="tooltip" data-container="body" data-placement="bottom" title="Follow us on Instagram" class="btn btn-xs btn-link navbar-btn"><i class="fa fa-fw fa-instagram"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="tooltip" data-container="body" data-placement="bottom" title="Join us on Google+" class="btn btn-xs btn-link navbar-btn"><i class="fa fa-fw fa-google-plus"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="nav-main" class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/" height="50px">
                            <img class="img-responsive" src="{{ asset('/images/kcom-logo.png') }}" width="50px">
                            <label>K-COM REALTY</label>
                            <small>where commitment is the key</small>
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <form class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="FIND YOUR HOME">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button type="button" class="btn btn-link navbar-btn">LIST PROPERTY</button>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="navbar-btn btn-group">
                                <button type="button" class="btn btn-default">BUY</button>
                                <button type="button" class="btn btn-link">RENT</button>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        @yield('content')


        <footer>
            <div class="container">
                <div class="row">
<!--
                    <div class="col-sm-4">
                        <h2>Why choose us?</h2>
                        <p>WE ARE LICENSED REAL ESTATE PROFESSIONALS FOCUSED AND DEDICATED TO PROVIDE THE BEST PROPERTY SOLUTION TO EACH CUSTOMERS' NEED.</p>

                        <h2>Let's work together</h2>
                        <ul class="fa-ul">
                            <li><a href="#"><i class="fa-li fa fa-home"></i>PROPERTY CONSULATION</a></li>
                            <li><a href="#"><i class="fa-li fa fa-certificate"></i>FINANCIAL ADVISER</a></li>
                            <li><a href="#"><i class="fa-li fa fa-book"></i>DOCUMENTATIONS</a></li>
                            <li><a href="#"><i class="fa-li fa fa-bookmark"></i>PROPERTY REGISTRATION</a></li>
                        </ul>
                    </div>
-->
                    <div class="col-sm-5">
                        <h2>Feel free to get to know us, read the latest updates, or simply say hello.</h2>
                        <!-- Email -->
                        <div class="col-xs-12" style="margin-top:20px;margin-bottom: 20px;">
                            <ul class="list-inline" style="font-size: 22px;letter-spacing: 16px;">
                                <li><a href="#" data-toggle="tooltip" title="Like us on Facebook"><i class="fa-fw fa fa-facebook"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Follow us on Twitter"><i class="fa-fw fa fa-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Follow us on Instagram"><i class="fa-fw fa fa-instagram"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" title="Join us on Google+"><i class="fa-fw fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <hr style=" clear: left;">
                        <br>
                        <p>© COPYRIGHT 2015 K-COM REALTY,<br>ALL RIGHTS RESERVED</p>
                        
                    </div>
                    <div class="col-sm-4">
                        <h2>Contact Us</h2>
                        <p style="font-size: 15px;"><i class="fa fa-fw fa-envelope"></i> &nbsp; inquire@kcomrealty.com</p>
                        <p style="font-size: 15px;"><i class="fa fa-fw fa-phone"></i> &nbsp; (02) 509-3837</p>
                        <p style="font-size: 15px;"><i class="fa fa-fw fa-mobile"></i> &nbsp; +639174280828</p>
                        <p style="font-size: 15px;"><i class="fa fa-fw fa-globe"></i> &nbsp; www.kcomrealty.com</p>
                    </div>
                    <div class="col-sm-3">
                        <h2>Questions? Tell us about your story</h2>
                        <!-- Email -->
                        <div class="contact-form">

                            <form class="noradius" method="POST" action="inquire">
                                <input type="hidden" name="_token" value="ExVfzy4HVn3J5ulRuKzyGW8NamkHjd7mFZW41pG4">
                                <!-- Name -->
                                <div class="form-group">
                                    <input type="text" name="name" class="input-sm form-control" placeholder="Your Name" required="">
                                </div>
                                <!-- Email -->
                                <div class="form-group">
                                    <input type="email" name="email" class="input-sm form-control" placeholder="Your Email" required="">
                                </div>
                                <!-- Matter -->
                                <div class="form-group">
                                    <textarea class="input-sm form-control" name="message" rows="3" placeholder="Your Message" required=""></textarea>
                                </div>
                                <!-- Button -->
                                <button type="submit" class="btn btn-md btn-default pull-right"><i class="fa fa-fw fa-paper-plane" style="
                                    color: #36612D;
                                    "></i>SEND</button> &nbsp;

                            </form>
                        </div>

                    </div>
                </div>
            </div>
<!--
            <div class="row">
                <div class="hr-logo">
                    <img src="/images/kcom-logo.png">
                </div>
                <div class="col-xs-12 text-center">
                    © COPYRIGHT 2015 K-COM REALTY,  ALL RIGHTS RESERVED
                </div>

            </div>
-->
        </footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        @yield('scripts')
    </body>
</html>
