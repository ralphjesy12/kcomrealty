@extends('tpl')
@section('styles')
<link href="{{ elixir('css/showroom.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ elixir('js/showroom.js') }}"></script>
@endsection
@section('content')
<div class="container" style="border: 1px solid #ddd;border-top: 0;padding: 20px 40px;background: #fff;">
    <div class="row" style="padding-top: 50px">
        <div class="col-sm-7">
            <div id="carousel-shoowroom" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-shoowroom" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-shoowroom" data-slide-to="1"></li>
                    <li data-target="#carousel-shoowroom" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            THE ONE-BEDROOM
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/model_unit_paymentscheme.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            THE ONE-BEDROOM
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/model_unit_studio_2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            THE ONE-BEDROOM
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('images/model_unit_the-couple_2.jpg') }}" alt="...">
                        <div class="carousel-caption">
                            THE ONE-BEDROOM
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <!--
<a class="left carousel-control" href="#carousel-shoowroom" role="button" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#carousel-shoowroom" role="button" data-slide="next">
<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
-->
            </div>
        </div>
        <div class="col-sm-5">
            <h4>MORE PHOTOS</h4>
            <ul class="list-inline" style="display: inline-table;">
                <li><a href="#"><img class="img-thumbnail" src="http://placehold.it/60x60"></a></li>
                <li><a href="#"><img class="img-thumbnail" src="http://placehold.it/60x60"></a></li>
                <li><a href="#"><img class="img-thumbnail" src="http://placehold.it/60x60"></a></li>
                <li><a href="#"><img class="img-thumbnail" src="http://placehold.it/60x60"></a></li>
                <li><a href="#"><img class="img-thumbnail" src="http://placehold.it/60x60"></a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <div id="info-showroom" class="tabbable-panel">
                <div class="tabbable-line tabs-below">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab_overview" data-toggle="tab">Overview </a>
                        </li>
                        <li class="">
                            <a href="#tab_reviews" data-toggle="tab">Comments </a>
                        </li>
                        <li>
                            <a href="#tab_map" data-toggle="tab">Map </a>
                        </li>
                        <li>
                            <a href="#tab_contact" data-toggle="tab">Inquire</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_overview">
                            <h4><b>THE RISE MAKATI</b></h4>
                            <p>Malugay St., Makati City</p>
                            <h4><b>ONE BEDROOM UNIT</b></h4>
                            <p>Our one-bedroom apartments are ideal for one, but are also ample enough for two - and you'll still have plenty space for storage.</p>
                            <ul class="fa-ul">
                                <li><i class="fa fa-li fa-bed"></i>1 Bedroom</li>
                                <li><i class="fa fa-li fa-pagelines"></i>1 Bathroom</li>
                                <li><i class="fa fa-li fa-home"></i>54 sq. m. (approx)</li>
                            </ul>
                            <!--                <small>Approximately 55-60 sq.m. | 593-646 sq.ft.</small>-->
                            <button class="btn btn-default btn-green btn-squared">INQUIRE NOW</button>
                        </div>
                        <div class="tab-pane" id="tab_reviews">
                            <div id="disqus_thread" style="  color: rgb(25, 116, 21);"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES * * */
                                // Required: on line below, replace text in quotes with your forum shortname
                                var disqus_shortname = 'kcomrealty';

                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                        </div>
                        <div class="tab-pane" id="tab_map">
                            <p>Malugay St., Makati City</p>
                            <iframe src="https://www.google.com/maps/d/embed?mid=zHsDpOUkqvSU.k8R5hxDMbCGU" width="100%" height="480" style="border:0;"></iframe>
                        </div>
                        <div class="tab-pane" id="tab_contact">
                            <h3>Agent details</h3>
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="http://placehold.it/64x64" width="64" height="64" alt="64x64"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Troy J. Myers</h4>
                                    <ul class="list-unstyled">
                                        <li><i class="fa fa-fw fa-building-o"></i> <strong>Company:</strong> Graphikaria</li>
                                        <li><i class="fa fa-fw fa-phone"></i> <strong>Phone:</strong> 940-689-5799</li>
                                        <li><i class="fa fa-fw fa-mobile"></i> <strong>Mobile:</strong> 549-689-5710</li>
                                        <li><i class="fa fa-fw fa-map-marker"></i> <strong>Address:</strong> 1728 Olen Thomas Drive</li>
                                        <li><i class="fa fa-fw fa-globe"></i> <strong>Website:</strong> <a href="#link">www.graphikaria.com</a></li>
                                    </ul>
                                </div><!-- /.media-body -->
                            </div><!-- /.media -->
                            <h3>Contact via Email</h3>
                            <form role="form">
                                <div class="form-group">
                                    <label for="exmaple-contact-email">Email address</label>
                                    <input type="email" class="form-control" id="exmaple-contact-email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="example-contact-name">Name</label>
                                    <input type="text" class="form-control" id="example-contact-name" placeholder="Your name">
                                </div>
                                <div class="form-group">
                                    <label for="example-contact-message">Message</label>
                                    <textarea id="example-contact-message" class="form-control" rows="5"></textarea>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Send me a copy
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-success btn-green btn-squared">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <h4>RELATED PROPERTIES</h4>
            <ul class="list-unstyled" id="list-relatedprop">
                <li>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="http://placehold.it/64x64" width="64" height="64" alt="64x64"></a>
                        <div class="media-body">
                            <h5 class="media-heading">ONE-BEDROOM UNIT</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-fw fa-building-o"></i> <strong>Project:</strong> The Rise Makati</li>
                                <li><i class="fa fa-fw fa-phone"></i> <strong>Bedrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-mobile"></i> <strong>Bathrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-map-marker"></i> <strong>Area</strong> 54 sq. m. (approx.)</li>
                            </ul>
                        </div><!-- /.media-body -->
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="http://placehold.it/64x64" width="64" height="64" alt="64x64"></a>
                        <div class="media-body">
                            <h5 class="media-heading">ONE-BEDROOM UNIT</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-fw fa-building-o"></i> <strong>Project:</strong> The Rise Makati</li>
                                <li><i class="fa fa-fw fa-phone"></i> <strong>Bedrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-mobile"></i> <strong>Bathrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-map-marker"></i> <strong>Area</strong> 54 sq. m. (approx.)</li>
                            </ul>
                        </div><!-- /.media-body -->
                    </div>
                </li>
                <li>
                    <div class="media">
                        <a class="pull-left" href="#"><img class="media-object img-thumbnail" src="http://placehold.it/64x64" width="64" height="64" alt="64x64"></a>
                        <div class="media-body">
                            <h5 class="media-heading">ONE-BEDROOM UNIT</h5>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-fw fa-building-o"></i> <strong>Project:</strong> The Rise Makati</li>
                                <li><i class="fa fa-fw fa-phone"></i> <strong>Bedrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-mobile"></i> <strong>Bathrooms</strong> 1</li>
                                <li><i class="fa fa-fw fa-map-marker"></i> <strong>Area</strong> 54 sq. m. (approx.)</li>
                            </ul>
                        </div><!-- /.media-body -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
