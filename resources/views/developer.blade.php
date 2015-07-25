@extends('tplnew')

@section('styles')
<link href="{{ elixir('css/developer.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ elixir('js/developer.js') }}"></script>
@endsection

@section('content')
<section id="main-banner">
    <ul class="list-unstyled">
        <?php
$imagepack = [];
foreach($children as $p){
    $imagepack = array_merge($imagepack,JSON_DECODE($p['images']));
}
shuffle($imagepack);

        ?>
        @if(count($imagepack) > 0)
        @foreach($imagepack as $i)
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
                <div class="col-xs-3">
                </div>
                <div class="col-xs-9">
                    <h2 style="color:#fff;">{{ $info['name'] }}
                        <!--                        <small style="color:#fff;"> Makati, Philippines </small>-->
                        <small style="color:#fff;" class="pull-right">{{ count($children) }} Project/s</small></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
                <img src="{{ asset('/images/developers/' . $info['image'] . '') }}" class="img-thumbnail" style="margin-top: -50px;">
            </div>
            <div class="col-xs-9">
                <br>
                <p>{{ $info['profile'] }}</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-9">
                @if ( count($children) > 0 )
                <h3>Projects</h3>
                <ul id="project-listing" class="list-unstyled">
                    @foreach ($children as $p)
                    <li data-id="{{ $p['id'] }}">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-3" style="height:100px;">
                                        <img src="{{ asset('/images/projects/' . JSON_DECODE($p['images'])[array_rand(JSON_DECODE($p['images']),1)] . '') }}" class="img-thumbnail">
                                    </div>
                                    <div class="col-xs-9">
                                        <h4>{{ $p['name'] }}&nbsp;<small>&#8226; {{ $p['location'] }}</small></h4>
                                        <p>{{ str_limit($p['profile'], $limit = 300, $end = '...') }}</p>
                                        <a href="/project/{{ $p['id'] }}/{{ str_slug($p['name'],'-') }}" class="btn btn-link btn-xs pull-right">Go to Project<i class="fa fa-fw fa-angle-double-right"></i></a>
                                        <ul class="list-inline">
                                            <li class="label label-default">{{ $p['type'] }}</li>
                                            <li class="label label-default">{{ $p['category'] }}</li>
                                            <li class="label label-default">{{ number_format($p['area'],2) }} sqm</li>
                                            <li class="label label-default">{{ number_format($p['unit'],0) }} units</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    @endforeach
                </ul>
                @else
                <h3>No Projects Yet</h3>
                <br>
                <br>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
