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
<section id="search">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Quick Search</label>
                    <div class="input-group"><div class="input-group-btn">
                         <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">For Sale <span class="caret"></span></button>
                         <ul class="dropdown-menu" role="menu">
                             <li><a href="#">For Sale</a></li>
                             <li><a href="#">For Lease</a></li>
                         </ul>
                     </div><!-- /btn-group -->
                    <input type="search" class="form-control" aria-label="..." placeholder="Search by location, city, zip">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-default btn-green"><i class="fa fa-fw fa-search"></i><span class="hidden-xs">Search</span></button>
                    </div><!-- /btn-group -->
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input-proptype">Type</label>
                    <select id="input-proptype" class="form-control">
                        <option>Single-Family Home</option>
                        <option>Patio Home</option>
                        <option>Townhouse/Villa</option>
                        <option>Apartment</option>
                        <option>Condo-Hotel</option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input-bedroomcount">Bedrooms</label>
                    <input id="input-bedroomcount" type="number" min="1" max="5" class="form-control" value="1">
                  </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="input-floorarea">Floor Area <small class="text-muted">(sqm.)</small></label>
                    <input id="input-floorarea" type="number" class="form-control" min="10" step="10" max="500" value="100">
                  </div>
                <a href="#" class="pull-right text-green"><i class="fa fa-fw fa-play-circle"></i><i>Browse all Listing</i></a>
            </div>
        </div>
    </div>
</section>
<section id="companyslogan">
    <div class="container">
        <h3>We are offering the Best Real Estate Deals</h3>
        <p>Look at our Latest listed properties and check out the facilities on them. We have already sold more than 5,000 homes and we are still going at very good page. We would love you to look into these properties and we hope that you will find something matchable for your needs.</p>
    </div>
</section>
<section id="featured">
    <div class="container">
    <h4>FEATURED PROPERTIES</h4>
        <div id="carousel-featured">
            <div class="listing-item">
                <img src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                <h4>The One-Bedroom with Balcony</h4>
                <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
            </div>
            <div class="listing-item">
                <img src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                <h4>The One-Bedroom with Balcony</h4>
                <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
            </div>
            <div class="listing-item">
                <img src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                <h4>The One-Bedroom with Balcony</h4>
                <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
            </div>
            <div class="listing-item">
                <img src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                <h4>The One-Bedroom with Balcony</h4>
                <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
            </div>
        </div>
    </div>
</section>
<section id="popular">
    <div class="container">
        <h4>POPULAR PROPERTIES</h4>
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <ul class="list-inline">
                            <li><i class="fa fa-fw fa-arrows-alt"></i>&nbsp;50 sqm.</li>
                            <li><i class="fa fa-fw fa-bed"></i>&nbsp;2 Bedrooms</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;2 Bathrooms</li>
                            <li class="pull-right"><a href="#" class="text-green">Go to showroom<i class="fa fa-fw fa-angle-double-right"></i></a></li>
                       </ul>
                    </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-responsive" src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                        </div>
                        <div class="col-xs-8">
                            <h4>700-B, Front Street, Key West, Florida</h4>
                            <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <ul class="list-inline">
                            <li><i class="fa fa-fw fa-arrows-alt"></i>&nbsp;50 sqm.</li>
                            <li><i class="fa fa-fw fa-bed"></i>&nbsp;2 Bedrooms</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;2 Bathrooms</li>
                            <li class="pull-right"><a href="#" class="text-green">Go to showroom<i class="fa fa-fw fa-angle-double-right"></i></a></li>
                       </ul>
                    </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-responsive" src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                        </div>
                        <div class="col-xs-8">
                            <h4>700-B, Front Street, Key West, Florida</h4>
                            <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <ul class="list-inline">
                            <li><i class="fa fa-fw fa-arrows-alt"></i>&nbsp;50 sqm.</li>
                            <li><i class="fa fa-fw fa-bed"></i>&nbsp;2 Bedrooms</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;2 Bathrooms</li>
                            <li class="pull-right"><a href="#" class="text-green">Go to showroom<i class="fa fa-fw fa-angle-double-right"></i></a></li>
                       </ul>
                    </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-responsive" src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                        </div>
                        <div class="col-xs-8">
                            <h4>700-B, Front Street, Key West, Florida</h4>
                            <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <ul class="list-inline">
                            <li><i class="fa fa-fw fa-arrows-alt"></i>&nbsp;50 sqm.</li>
                            <li><i class="fa fa-fw fa-bed"></i>&nbsp;2 Bedrooms</li>
                            <li><i class="fa fa-male"></i><i class="fa fa-female"></i>&nbsp;2 Bathrooms</li>
                            <li class="pull-right"><a href="#" class="text-green">Go to showroom<i class="fa fa-fw fa-angle-double-right"></i></a></li>
                       </ul>
                    </div>
                  <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <img class="img-responsive" src="{{ asset('/images/model_unit_onebedroom_1.jpg') }}">
                        </div>
                        <div class="col-xs-8">
                            <h4>700-B, Front Street, Key West, Florida</h4>
                            <p>Our one-bedroom apartments are ideal for one but are also ample enough for two- and you'll still have plenty space for storage</p>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-xs-12 text-center">
            <button class="btn btn-success btn-squared btn-green">VIEW MORE</button>
            </div>
        </div>
    </div>
</section>
<section id="affiliates">
  <div class="container">
<h4>FEATURED PARTNERS</h4>
    <div id="carousel-partners">
          <div class="partner-item"><img src="{{ asset('/images/affiliates/ayala.png') }}"></div>
          <div class="partner-item"><img src="{{ asset('/images/affiliates/dmci.png') }}"></div>
          <div class="partner-item"><img src="{{ asset('/images/affiliates/ortigas.png') }}"></div>
          <div class="partner-item"><img src="{{ asset('/images/affiliates/shang.png') }}"></div>
          <div class="partner-item"><img src="{{ asset('/images/affiliates/smdc.png') }}"></div>
      </div>
  </div>
</section>
{{--<nav>
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
</nav>--}}
{{--<nav class="container">
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
</nav>--}}


@endsection
