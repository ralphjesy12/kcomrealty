@extends('tpl')
@section('styles')
<link href="{{ elixir('css/property.css') }}" rel="stylesheet">
<link href="{{ asset('plugins/gridster/jquery.gridster.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ asset('plugins/gridster/jquery.gridster.min.js') }}"></script>
<script src="{{ elixir('js/property.js') }}"></script>
@endsection
@section('content')
<div class="container" style="border: 1px solid #ddd;border-top: 0;padding: 20px 40px;background: #fff;">
    <div id="property_gallery" class="gridster">
        <ul class="list-unstyled">
            <li data-row="1" data-col="3" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1"  style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="1" data-col="1" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="1" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>

            <li data-row="1" data-col="2" data-sizex="1" data-sizey="1" data-resizex="2" data-resizey="1" style="background:url('http://placehold.it/200x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="2" data-sizex="1" data-sizey="1" data-resizex="2" data-resizey="2" style="background:url('http://placehold.it/200x200');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>

            <li data-row="1" data-col="4" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="3" data-sizex="1" data-sizey="1" data-resizex="2" data-resizey="1" style="background:url('http://placehold.it/200x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="4" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>

            <li data-row="1" data-col="5" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="5" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>

            <li data-row="1" data-col="6" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="1" style="background:url('http://placehold.it/100x100');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
            <li data-row="2" data-col="6" data-sizex="1" data-sizey="1" data-resizex="1" data-resizey="2" style="background:url('http://placehold.it/100x200');background-size:cover;background-position:center;background-repeat:no-repeat;"></li>
        </ul>
    </div>


    <div id="info-property" class="tabbable-panel">
        <div class="tabbable-line tabs-below">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#tab_overview" data-toggle="tab">Overview </a>
                </li>
                <li class="">
                    <a href="#tab_features" data-toggle="tab">Comments </a>
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
                    <h2>Overview</h2>
                    <hr>
                    <h3>The RISE Makati</h3>
                    <h4>Malugay St., Makati City</h4>
                    <h5>10,825 sqm</h5>


                    <h2>Building Profile</h2>
                    <hr>
                    <ul>
                        <li>59 floors</li>
                        <li>3 Basement Levels, 744 residents parking slots</li>
                        <li>3 Wings</li>
                        <li>North Tower 935 units</li>
                        <li>West Tower 937 units</li>
                        <li>East Tower 950 units</li>
                        <li>18 passenger elevators at the core</li>
                        <li>17 units per wing, 51 units per floor</li>
                        <li>Total of 2,822 units
                            <ul>
                                <li>664 two bedroom w/ balcony units</li>
                                <li>1,796 one bedroom units</li>
                                <li>196 one bedroom w/ balcony units</li>
                                <li>166 studio units</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane" id="tab_features">


                    <h2>Project Features</h2>
                    <hr>
                    <ul>
                        <li> 24 hour CCTV</li>
                        <li>Non-smoking lounge areas</li>
                        <li>Intercom</li>
                        <li>Central Mailbox</li>
                        <li>Reception Services</li>
                        <li>Elevator Pass Card</li>
                        <li>Centralized Garbage Disposal</li>
                        <li>2 Levels of Commercial Area with GFA of 12,603sqm</li>
                        <li>51 restaurants and shops</li>
                    </ul>

                    <h2>Amenities</h2>
                    <hr>
                    <ul>
                        <li>7,647 sqm of amenities space</li>
                        <li>1,620 sqm worth of green spaces</li>
                        <li>380m distance of jogging path</li>
                        <li>280 sqm of children’s playzon</li>
                        <li>Amenities reception</li>
                        <li>Spaces at The Rise – a new amenities concept
                            <ul>
                                <li>the HANGOUT</li>
                                <li>the WORKSHOP</li>
                                <li>the NEST</li>
                            </ul>
                        </li>
                        <li>2 Story Gym
                            <ul>
                                <li>cardio room</li>
                                <li>weight room</li>
                                <li>pilates / yoga rooms</li>
                                <li>boxing ring</li>
                                <li>sauna / changing rooms</li>
                            </ul>
                        </li>
                        <li>Party / Function Rooms
                        <li>Billiards Room
                        <li>Karaoke Room / Home Cinema
                        <li>Children’s Play Areas
                            <ul>
                                <li>‘crawl space’ infants play area</li>
                                <li>‘kid’s zone’ toddlers play area</li>
                            </ul>
                        </li>
                        <li>Park Area
                            <ul>
                                <li>Jogging trail</li>
                                <li>Outdoor children’s play area</li>
                                <li>The Lawn</li>
                            </ul>
                        </li>
                        <li>Pool Area
                            <ul>
                                <li>Main pool</li>
                                <li>Kids pool</li>
                                <li>Sun Deck</li>
                                <li>Floating Loungers</li>
                                <li>Promenade</li>
                                <li>BBQ area</li>
                            </ul>
                        </li>

                    </ul>
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
@endsection
