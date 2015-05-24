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
        <div class="col-sm-9"></div>
    </div>
</div>
@endsection
