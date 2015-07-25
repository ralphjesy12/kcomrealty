@extends('tplnew')

@section('styles')
<link href="{{ elixir('css/developer.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ elixir('js/developer.js') }}"></script>
@endsection

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>Developers</h3>
                <ul id="developer-listing" class="list-unstyled">
                    @foreach ($developers as $d)
                    <li data-id="{{ $d->id }}">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-3 text-right">
                                        
                                        <img src="{{ asset('/images/developers/' . $d->image . '') }}" class="img-thumbnail" style="height:200px;">
                                    </div>
                                    <div class="col-xs-9">
                                        <h4>{{ $d->name }}</h4>
                                        <p>{{ str_limit($d->profile, $limit = 300, $end = '...') }}</p>
                                        <a href="/developer/{{ $d->id }}/{{ str_slug($d->name,'-') }}" class="btn btn-link btn-xs pull-right">GO TO DEVELOPER<i class="fa fa-fw fa-angle-double-right"></i></a>
                                        <ul class="list-inline">
                                            <li class="label label-default">4 Projects</li>
                                            <li class="label label-primary">THE RISE MAKATI</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    @endforeach

<!--
                    
                    <li>
                        <div class="panel">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-3 text-right">
                                        <img src="{{ asset('/images/developers/b1da03fb.png') }}" class="img-thumbnail" style="height:200px;">
                                    </div>
                                    <div class="col-xs-9">
                                        <h4>Rockwell Land</h4>
                                        <p>Established in 1995, Rockwell Land Corporation is co-owned by Manila Electric Company (Meralco) and First Holdings. The developer's first project was the Rockwell Center, a 15.5 hectare residential and commercial lot in Makati City that was the original site of the Meralco-owned Rockwell thermal plant, which got its name from James Chapman Rockwell, Meralco’s first president.</p>
                                        <button class="btn btn-link btn-xs pull-right">GO TO DEVELOPER<i class="fa fa-fw fa-angle-double-right"></i></button>
                                        <ul class="list-inline">
                                            <li class="label label-default">4 Projects</li>
                                            <li class="label label-primary">THE RISE MAKATI</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
-->
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
