@extends('tplnew')
@section('styles')
<link href="{{ asset('plugins/jquery-range/jquery.slider.css') }}" rel="stylesheet">
<link href="{{ elixir('css/search.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script src="{{ asset('plugins/jquery-range/jquery.slider.min.js') }}"></script>
<script src="{{ elixir('js/search.js') }}"></script>
@endsection
@section('content')
<div class="container" style="border: 1px solid #ddd;border-top: 0;padding: 20px 40px;background: #fff;margin-bottom:20px;">
	<div class="row">
		<div class="col-sm-3 noradius" id="filter-section">
			<h4>Property Search</h4><hr>
			<h5><b>Keywords</b></h5>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default btn-green btn-squared" type="button" value="@if(!empty($q['key'])) {{ $q['key'] }} @endif"><i class="fa fa-fw fa-search"></i></button>
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
					For Rent
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="">
					Ready for Occupancy
				</label>
			</div>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="">
					Pre-selling
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
				<label>Showing {{ $result->firstItem() }}-{{ $result->lastItem() }} of {{ $result->total() }} results for "the rise"</label>
				<div class="btn-group pull-right">
					<button class="btn btn-default active" data-toggle="tooltip" data-title="View by Unit"><i class="fa fa-home"></i></button>
					<button class="btn btn-default" data-toggle="tooltip" data-title="View by Property"><i class="fa fa-building"></i></button>
				</div>
			</div>
			<div class="row" style="min-height:500px;">
				@if( $result->total()>0)
				@foreach($result as $r)
				<div class="search-grid col-sm-4">
					<div class="ui-item">
						<div class="img-container">
							<img class="img-responsive" src="{{ asset('images/model_unit_onebedroom_1.jpg') }}" alt="">
						</div>
						<h4><a href="real-estate-ui-single.html">{{ $r->project()->first()->name }}</a></h4>
						<h5>{{ $r->description }}</h5>
						<!-- product details -->
						<div class="ui-details">
							<a class="ecom pull-right" href="#">Inquire Now</a>
							<button class="btn btn-xs btn-success btn-green btn-squared">Go to Showroom</button>
							<div class="clearfix"></div>
						</div>
						<div class="p-info">
							<a href="#">{{ $r->bedroom }} Bed</a>
							<a href="#">{{ $r->bathroom }} Bath</a>
							<a href="#">{{ $r->area }} sq. m.</a>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				@endforeach
				@else
				<h3 class="text-center">No Results Found</h3>
				@endif
			</div>
			<div class="row" style="margin-top:20px;">
				<label>Page {{ $result->currentPage() }} of {{ $result->lastPage() }}</label>
				@if(!empty($result->render()))
				<div class="pull-right">
				<?php echo $result->appends($q)->render(); ?>
					</div>
				@else
				<div class="btn-toolbar pull-right">
					<div class="btn-group">
						<button class="btn btn-sm btn-squared btn-default disabled" disabled ><i class="fa fa-angle-double-left"></i></button>
						<button class="btn btn-sm btn-squared btn-default btn-green">1</button>
						<button class="btn btn-sm btn-squared btn-default disabled" disabled>2</button>
						<button class="btn btn-sm btn-squared btn-default disabled" disabled>3</button>
						<button class="btn btn-sm btn-squared btn-default disabled" disabled>4</button>
						<button class="btn btn-sm btn-squared btn-default disabled" disabled>5</button>
						<button class="btn btn-sm btn-squared btn-default disabled" disabled ><i class="fa fa-angle-double-right"></i></button>
					</div>
				</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection
