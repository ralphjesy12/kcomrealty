@extends('tpl')

@section('content')
<section id="banner">
    <div id="main-carousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="active item">
                <img src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}" alt="Slide1" />
            </div>
            <div class="item">
                <img src="{{ asset('/images/model_unit_paymentscheme.jpg') }}" alt="Slide2" />
            </div>
            <div class="item">
                <img src="{{ asset('/images/model_unit_studio_2.jpg') }}" alt="Slide3" />
            </div>
            <div class="item">
                <img src="{{ asset('/images/model_unit_the-couple_2.jpg') }}" alt="Slide3" />
            </div>
        </div>
        <a class="carousel-control left" href="#main-carousel" data-slide="prev">‹</a>
        <a class="carousel-control right" href="#main-carousel" data-slide="next">›</a>
    </div>
</section>
<nav>
    <div class="container">
        <div id="nav-top" class="row">
            <div class="col-sm-6">
                <ul class="list-inline">
                    <li>
                        <a href="#">
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
<nav class="container">
    <div id="nav-mid" class="navbar navbar-default" role="navigation" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand navbar-brand-centered">K-COM REALTY</div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
            <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">For Sale <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Pre-Selling</a></li>
                        <li><a href="#">Ready for Occupancy</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">For Lease<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Property Listing 1</a></li>
                        <li><a href="#">Property Listing 2</a></li>
                        <li><a href="#">Property Listing 3</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
<!--
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Financing <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li>We can help you with in-houce financing or bank financing.</li>
                    </ul>
                </li>
-->
                <li><a href="#">Financing</a></li>
                <li><a href="#">Documentation</a></li>
                <li><a href="#">Register your Property</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@endsection
