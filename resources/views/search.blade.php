@extends('tpl')
@section('styles')
<link href="{{ asset('plugins/jquery-range/jquery.slider.css') }}" rel="stylesheet">
<link href="{{ elixir('css/search.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ asset('plugins/jquery-range/jquery.slider.min.js') }}"></script>
<script src="{{ elixir('js/search.js') }}"></script>
@endsection
@section('content')
<div class="container" style="border: 1px solid #ddd;border-top: 0;padding: 20px 40px;background: #fff;">
    <div class="row">
        <div class="col-sm-3 noradius" id="filter-section">
            <h4>Property Search</h4><hr>
            <h5><b>Keywords</b></h5>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default btn-green btn-squared" type="button"><i class="fa fa-fw fa-search"></i></button>
                </span>
            </div><!-- /input-group -->
            <br>
            <h5><b>Type</b></h5>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    For Sale
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="">
                    For Lease
                </label>
            </div><br>

            <h5><b>Bedrooms</b></h5>
            <div class="theme-slider range-beds"></div>
            <br>
            <h5><b>Floor Area (sq.m.)</b></h5>
            <div class="theme-slider range-floor"></div>
        </div>
        <div id="result-section" class="col-sm-9">
            <div class="row">
                <label>Showing 12 of 24 results for "the rise"</label>
                <div class="btn-group pull-right">
                    <button class="btn btn-default"><i class="fa fa-th-large"></i></button>
                    <button class="btn btn-default"><i class="fa fa-list"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="search-grid col-sm-4">
                    <div class="ui-item">
                        <div class="img-container">
                            <!-- Product Image -->
                            <img class="img-responsive" src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="">
                            <!--
<span class="hover-top bg-lblue">Residential</span>
<span class="hover-bottom bg-red">Sale</span>
-->
                        </div>
                        <!-- product title -->
                        <h4><a href="real-estate-ui-single.html">The Rise Makati</a></h4>
                        <h5>Studio Type A</h5>
                        <!-- product details -->
                        <div class="ui-details">
                            <a class="ecom pull-right" href="#">Inquire Now</a>
                            <!-- price -->
                            <!--                        <span class="price pull-left">$12999.00</span>-->
                            <button class="btn btn-xs btn-success btn-green btn-squared">Go to Showroom</button>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Info -->
                        <div class="p-info">
                            <a href="#">1 Bed</a>
                            <a href="#">1 Bath</a>
                            <a href="#">35 sq. m.</a>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Property Details List -->
                        <!--
<ul>
<li>4 Beds, 1 Bath</li>
<li><strong>Area</strong>: 1064ft<sup>2</sup></li>
<li><strong>Lawn</strong>: 354ft<sup>2</sup></li>
<li><strong>Year</strong>: 2004</li>
<li><strong>Parking</strong>: 2</li>
<li><strong>Status</strong>: For Rent</li>
</ul>
-->
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="search-grid col-sm-4">
                    <div class="ui-item">
                        <div class="img-container">
                            <!-- Product Image -->
                            <img class="img-responsive" src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="">
                            <!--
<span class="hover-top bg-lblue">Residential</span>
<span class="hover-bottom bg-red">Sale</span>
-->
                        </div>
                        <!-- product title -->
                        <h4><a href="real-estate-ui-single.html">The Rise Makati</a></h4>
                        <h5>Studio Type A</h5>
                        <!-- product details -->
                        <div class="ui-details">
                            <a class="ecom pull-right" href="#">Inquire Now</a>
                            <!-- price -->
                            <!--                        <span class="price pull-left">$12999.00</span>-->
                            <button class="btn btn-xs btn-success btn-green btn-squared">Go to Showroom</button>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Info -->
                        <div class="p-info">
                            <a href="#">1 Bed</a>
                            <a href="#">1 Bath</a>
                            <a href="#">35 sq. m.</a>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Property Details List -->
                        <!--
<ul>
<li>4 Beds, 1 Bath</li>
<li><strong>Area</strong>: 1064ft<sup>2</sup></li>
<li><strong>Lawn</strong>: 354ft<sup>2</sup></li>
<li><strong>Year</strong>: 2004</li>
<li><strong>Parking</strong>: 2</li>
<li><strong>Status</strong>: For Rent</li>
</ul>
-->
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="search-grid col-sm-4">
                    <div class="ui-item">
                        <div class="img-container">
                            <!-- Product Image -->
                            <img class="img-responsive" src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="">
                            <!--
<span class="hover-top bg-lblue">Residential</span>
<span class="hover-bottom bg-red">Sale</span>
-->
                        </div>
                        <!-- product title -->
                        <h4><a href="real-estate-ui-single.html">The Rise Makati</a></h4>
                        <h5>Studio Type A</h5>
                        <!-- product details -->
                        <div class="ui-details">
                            <a class="ecom pull-right" href="#">Inquire Now</a>
                            <!-- price -->
                            <!--                        <span class="price pull-left">$12999.00</span>-->
                            <button class="btn btn-xs btn-success btn-green btn-squared">Go to Showroom</button>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Info -->
                        <div class="p-info">
                            <a href="#">1 Bed</a>
                            <a href="#">1 Bath</a>
                            <a href="#">35 sq. m.</a>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Property Details List -->
                        <!--
<ul>
<li>4 Beds, 1 Bath</li>
<li><strong>Area</strong>: 1064ft<sup>2</sup></li>
<li><strong>Lawn</strong>: 354ft<sup>2</sup></li>
<li><strong>Year</strong>: 2004</li>
<li><strong>Parking</strong>: 2</li>
<li><strong>Status</strong>: For Rent</li>
</ul>
-->
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="search-grid col-sm-4">
                    <div class="ui-item">
                        <div class="img-container">
                            <!-- Product Image -->
                            <img class="img-responsive" src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="">
                            <!--
<span class="hover-top bg-lblue">Residential</span>
<span class="hover-bottom bg-red">Sale</span>
-->
                        </div>
                        <!-- product title -->
                        <h4><a href="real-estate-ui-single.html">The Rise Makati</a></h4>
                        <h5>Studio Type A</h5>
                        <!-- product details -->
                        <div class="ui-details">
                            <a class="ecom pull-right" href="#">Inquire Now</a>
                            <!-- price -->
                            <!--                        <span class="price pull-left">$12999.00</span>-->
                            <button class="btn btn-xs btn-success btn-green btn-squared">Go to Showroom</button>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Info -->
                        <div class="p-info">
                            <a href="#">1 Bed</a>
                            <a href="#">1 Bath</a>
                            <a href="#">35 sq. m.</a>
                            <div class="clearfix"></div>
                        </div>
                        <!-- Property Details List -->
                        <!--
<ul>
<li>4 Beds, 1 Bath</li>
<li><strong>Area</strong>: 1064ft<sup>2</sup></li>
<li><strong>Lawn</strong>: 354ft<sup>2</sup></li>
<li><strong>Year</strong>: 2004</li>
<li><strong>Parking</strong>: 2</li>
<li><strong>Status</strong>: For Rent</li>
</ul>
-->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px;">
                <label>Page 1 of 10</label>
                <div class="btn-toolbar pull-right">
                    <div class="btn-group">
                        <button class="btn btn-sm btn-squared btn-default" data-toggle="tooltip" title="First"><i class="fa fa-angle-double-left"></i></button>
                        <button class="btn btn-sm btn-squared btn-default" data-toggle="tooltip" title="Previous"><i class="fa fa-angle-left"></i></button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-squared btn-default btn-green">1</button>
                        <button class="btn btn-sm btn-squared btn-default">2</button>
                        <button class="btn btn-sm btn-squared btn-default">3</button>
                        <button class="btn btn-sm btn-squared btn-default">4</button>
                        <button class="btn btn-sm btn-squared btn-default">5</button>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-sm btn-squared btn-default" data-toggle="tooltip" title="Next"><i class="fa fa-angle-right"></i></button>
                        <button class="btn btn-sm btn-squared btn-default" data-toggle="tooltip" title="Last"><i class="fa fa-angle-double-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
