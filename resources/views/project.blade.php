@extends('tplnew')
@section('styles')
<link href="{{ elixir('css/developer.css') }}" rel="stylesheet">
<link href="{{ asset('css/developer.css') }}" rel="stylesheet">

<link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
<link rel="stylesheet" href="{{ asset('plugins/bootstrap-image-gallery/css/bootstrap-image-gallery.min.css') }}">
@endsection

@section('scripts')
<script src="{{ elixir('js/developer.js') }}"></script>
<script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
<script src="{{ asset('plugins/bootstrap-image-gallery/js/bootstrap-image-gallery.min.js') }}"></script>
<script>
    $(function(){
        $('.gallery-open').click(function(event){
            event = event || window.event;
            var target = event.target || event.srcElement,
                link = target.src ? target.parentNode : target,
                options = {index: link, event: event},
                links = this.getElementsByTagName('a');
            blueimp.Gallery(links, options);
        });
    });
</script>
@endsection

@section('content')
<section id="main-banner">
    <ul class="list-unstyled">
        
        @if(count(JSON_DECODE($info['images'])) > 0)
        @foreach(JSON_DECODE($info['images']) as $i)
        <li><img src="{{ asset('/images/projects/'. $i .'') }}"></li>
        @endforeach
        @else
        <li><img src="{{ asset('/images/cityscape.jpg') }}"></li>
        <li><img src="{{ asset('/images/cityscape.jpg') }}"></li>
        <li><img src="{{ asset('/images/cityscape.jpg') }}"></li>
        @endif
    </ul>
</section>
<section id="profile" style="margin-top:-80px;z-index:1000;position:relative;">
    <div class="container-fluid" style="  background-color: rgba(0,0,0,0.5);  padding: 10px 0;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 style="color:#fff;">{{ $info['name'] }}
                        <small style="color:#fff;"> {{ $info['location'] }} </small>
                        <small style="color:#fff;" class="pull-right">{{ count($children) }} Unit/s</small></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-9">
                <h3>Overview</h3>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#project-details" aria-controls="project-details" role="tab" data-toggle="tab">Project Details</a></li>
                    <li role="presentation"><a href="#project-features" aria-controls="project-features" role="tab" data-toggle="tab">Features &amp; Amenities</a></li>
                    <li role="presentation"><a href="#project-profile" aria-controls="project-profile" role="tab" data-toggle="tab">About this Project</a></li>
                    <li role="presentation"><a href="#project-developer" aria-controls="project-developer" role="tab" data-toggle="tab">About the Developer</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="project-details">
                        <table class="table table-hover project-details">
                            <thead>
                                <th>Type</th>
                                <th>Category</th>
                                <th>Area</th>
                                <th>Units</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><h1><i class="fa fa-certificate"></i></h1><h4>{{ $info['type'] }}</h4></td>
                                    <td><h1><i class="fa fa-building-o"></i></h1><h4>{{ $info['category'] }}</h4></td>
                                    <td><h1><i class="fa fa-crop"></i></h1><h4>{{ number_format($info['area'],2) }} sqm</h4></td>
                                    <td><h1><i class="fa fa-key"></i></h1><h4>{{ number_format($info['unit'],0) }}</h4></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="project-features">
                        @if (count(JSON_DECODE($info['features'])) > 0)
                        <h3>Features</h3>
                        <div class="row">

                            @foreach(JSON_DECODE($info['features']) as $i)
                            <div class="col-sm-3"><i class="fa-fw fa fa-check-square"></i>{{ $i }}</div>
                            @endforeach
                        </div>
                        @endif
                        @if (count(JSON_DECODE($info['amenities'])) > 0)
                        <h3>Amenities</h3>
                        <div class="row">
                            <ul>
                                @foreach(JSON_DECODE($info['amenities']) as $i)
                                <li><i class="fa-li fa fa-check-square"></i>{{ $i }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    </div>
                    <div role="tabpanel" class="tab-pane" id="project-profile">
                        <h3>About this Project</h3>
                        <p>{{ $info['profile'] }}</p>
                    </div>
                    @if ($info['developerprofile'] != "-")
                    <div role="tabpanel" class="tab-pane" id="project-developer">
                        <h3>About the Developer</h3>
                        <p>{{ $info['developerprofile'] }}</p>
                        <a class="btn btn-link pull-right" href="/developer/{{ $info['developer'] }}/{{ str_slug($info['developername'],'-') }}">Go to Developer<i class="fa fa-fw fa-angle-double-right"></i></a>
                    </div>
                    @endif
                </div>

                <h3>Available Units</h3>

                <?php
$units = [];
foreach($children as $c){
    if(!isset($units[$c['type']]))
        $units[$c['type']] = [];
    $units[$c['type']][] = $c;
}
                ?>
                <div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#for-all" aria-controls="for-all" role="tab" data-toggle="tab">All</a></li>
                        @if (count($units))
                        @foreach(array_keys($units) as $k)
                        <li role="presentation"><a href="#{{ str_slug($k,'-') }}" aria-controls="{{ str_slug($k,'-') }}" role="tab" data-toggle="tab">{{ $k }}</a></li>
                        @endforeach;
                        @endif
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="for-all">
                            <table class="unit-listing table">
                                <thead>
                                    <th width="100px">Unit</th>
                                    <th width="100px">Type</th>
                                    <th width="">Bedroom</th>
                                    <th width="">Bathroom</th>
                                    <th width="">Area<small>(sqm.)</small></th>
                                    <th width="">Price</th>
                                </thead>
                                <tbody>
                                    @if (count($children) > 0)
                                    @foreach($children as $c)
                                    <tr data-id="{{ $c['id'] }}">
                                        <td class="gallery-open">
                                            @if (count(JSON_DECODE($c['images'])) > 0)
                                            @foreach(JSON_DECODE($c['images']) as $ci)
                                            <a href="/images/{{ $ci }}">
                                                <img class="img-responsive img-thumbnail" src="/images/{{ $ci }}.jpg">
                                            </a>
                                            @endforeach
                                            @else
                                            <a href="/images/no-image-available.png">
                                                <img class="img-responsive img-thumbnail" src="/images/no-image-available.png">
                                            </a>
                                            @endif
                                        </td>
                                        <td><b>{{$c['type']}}</b></td>
                                        <td><i class="fa fa-fw fa-2x fa-bed"></i><sup>{{ $c['bedrooms'] }}</sup></td>
                                        <td><i class="fa fa-fw fa-2x fa-pagelines "></i><sup>{{ $c['bathroom'] }}</sup></td>
                                        <td><i class="fa fa-fw fa-2x fa-crop "></i><sup>{{ $c['area'] }}</sup></td>
                                        <td><button class="btn btn-primary btn-sm">Inquire Now</button></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="6" class="text-center">
                                            <h3>No units available</h3>
                                        </td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                        @if (count($units))
                        @foreach(array_keys($units) as $k)
                        <div role="tabpanel" class="tab-pane" id="{{ str_slug($k,'-') }}">
                            <table class="unit-listing table">
                                <thead>
                                    <th width="100px">Unit</th>
                                    <th width="">Bedroom</th>
                                    <th width="">Bathroom</th>
                                    <th width="">Area<small>(sqm.)</small></th>
                                    <th width="">Price</th>
                                </thead>
                                <tbody>
                                    @foreach($units[$k] as $c)

                                    <tr data-id="{{ $c['id'] }}">
                                        <td class="gallery-open">
                                            @if (count(JSON_DECODE($c['images'])) > 0)
                                            @foreach(JSON_DECODE($c['images']) as $ci)
                                            <a href="/images/{{ $ci }}">
                                                <img class="img-responsive img-thumbnail" src="/images/{{ $ci }}.jpg">
                                            </a>
                                            @endforeach
                                            @else
                                            <a href="/images/no-image-available.png">
                                                <img class="img-responsive img-thumbnail" src="/images/no-image-available.png">
                                            </a>
                                            @endif
                                        </td>
                                        <td><i class="fa fa-fw fa-2x fa-bed"></i><sup>{{ $c['bedrooms'] }}</sup></td>
                                        <td><i class="fa fa-fw fa-2x fa-pagelines "></i><sup>{{ $c['bathroom'] }}</sup></td>
                                        <td><i class="fa fa-fw fa-2x fa-crop "></i><sup>{{ $c['area'] }}</sup></td>
                                        <td><button class="btn btn-primary btn-sm">Inquire Now</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        @endforeach;
                        @endif
                    </div>
                </div>

                <h3>Leave a comment</h3>
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
            <div class="col-xs-3">
                <h3>Location</h3>
                <!-- 4:3 aspect ratio -->

                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="{{ $info['map'] }}" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
