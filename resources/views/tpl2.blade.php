    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Find your way home | For Sale , Lease , Ready for Occupancy | K-Com Realty</title>
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
            <link href="{{ elixir('css/styles.css') }}" rel="stylesheet">

            <link href="{{ asset('/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet">
            <link href="{{ asset('/plugins/owl-carousel/assets/owl.theme.green.css') }}" rel="stylesheet">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
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

                        <li><a href="#"><i class="fa fa-home"></i> HOME</a></li>
                        <li class="active dropdown">
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
                        <h4>Quick Links</h4>
                        <ul class="fa-ul">
                          <li><i class="fa-li fa fa-caret-right"></i>Single Family</li>
                          <li><i class="fa-li fa fa-caret-right"></i>For Sale</li>
                          <li><i class="fa-li fa fa-caret-right"></i>For Lease</li>
                          <li><i class="fa-li fa fa-caret-right"></i>New Construction</li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>Quick Links</h4>
                        <ul class="fa-ul">
                          <li><i class="fa-li fa fa-caret-right"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </li>
                          <li><i class="fa-li fa fa-caret-right"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit.  </li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <h4>Contact Info</h4>
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
            <script src="{{ asset('/js/script.js') }}"></script>
            <script src="{{ asset('/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
        </body>
    </html>
