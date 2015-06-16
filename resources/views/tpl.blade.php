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
        @yield('styles')
    </head>
    <body>
        <nav id="header" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="{{ asset('/images/kcom-logo.png') }}">K-COM REALTY<small>where commitment is the key</small></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">

                        <li class="active"><a href="/"><i class="fa fa-home"></i> HOME</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-paper-plane"></i> FOR SALE</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Pre-Selling</a></li>
                                <li><a href="#">Ready for Occupancy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-leaf"></i> FOR LEASE</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Property Listing 1</a></li>
                                <li><a href="#">Property Listing 2</a></li>
                                <li><a href="#">Property Listing 3</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-money"></i> FINANCING</a></li>
                        <li><a href="#"><i class="fa fa-book"></i>DOCUMENTATION</a></li>
                        <li><a href="#"><i class="fa fa-university "></i>REGISTRATION</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <label class="help-email">or email us at : kcomrealty@gmail.com</label>
                            <button id="btn-findhome" class="btn btn-success btn-green"><i class="fa fa-search"></i> FIND YOUR HOME</button>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h4>About K-COM REALTY</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                        <p>Mauris hendrerit eros fermentum nisl ultrices, ac mollis urna blandit. Nullam viverra condimentum commodo. </p>
                    </div>
                    <div class="col-sm-3">
                        <h4>QUICK LINKS</h4>
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-caret-right"></i>Single Family</li>
                            <li><i class="fa-li fa fa-caret-right"></i>For Sale</li>
                            <li><i class="fa-li fa fa-caret-right"></i>For Lease</li>
                            <li><i class="fa-li fa fa-caret-right"></i>New Construction</li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>QUICK LINKS</h4>
                        <ul class="fa-ul">
                            <li><i class="fa-li fa fa-caret-right"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </li>
                            <li><i class="fa-li fa fa-caret-right"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>CONTACT INFO</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="hr-logo">
                        <img src="{{ asset('/images/kcom-logo.png') }}">
                    </div>
                    <div class="col-xs-12 text-center">
                        &copy; 2015 All Rights Reserved by K-COM REALTY
                    </div>
                </div>
            </div>
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
