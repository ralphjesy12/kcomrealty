@extends('tplnew')

@section('styles')

@endsection

@section('scripts')

<script src="{{ elixir('js/homenew.js') }}"></script>
@endsection

@section('content')
<section id="main-banner" class="container">
	<div id="lead-shout" class="row text-center text-muted">
		<div id="logo-hero" style="background-image: url(images/kcom-logo.png);"></div>
		<h1>WE ARE OFFERING THE BEST REAL ESTATE DEALS</h2>
		<h4>Look at our Latest listed properties and check out the facilities on them. We have already sold more than 5,000 homes and we are still going at very good page. We would love you to look into these properties and we hope that you will find something matchable for your needs.</h4>
	</div>
	<div class="row" style="margin:0;">
		<div id="quick-search" class="panel panel-default">
			<form class="panel-body" action="/search" method="GET">
				<div class="col-xs-3">
					<div class="form-group">
						<label for="input-proptype">TYPE</label>
						<select id="input-proptype" class="form-control input-sm" name="type">
							<option value="">All</option>
							<option selected>For Sale</option>
							<option>For Rent</option>
							<option>Ready for Occupancy</option>
							<option>Pre Selling</option>
						</select>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<label for="input-proptype">CATEGORY</label>
						<select id="input-proptype" class="form-control input-sm" name="category">
							<option value="">All</option>
							<option selected>Condominium</option>
							<option>Townhouse</option>
							<option>House &amp; Lot</option>
							<option>Others</option>
						</select>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<label for="input-bedroomcount">BEDROOMS</label>
						<input id="input-bedroomcount" type="number" min="1" max="5" class="form-control input-sm" value="1" name="bedrooms">
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<label for="input-floorarea">FLOOR AREA <small class="text-muted">(sqm.)</small></label>
						<input id="input-floorarea" type="number" class="form-control input-sm" min="10" step="5" max="100" value="10" name="area">
					</div>
					<button class="pull-right btn-link btn text-green" type="submit"><b>SEARCH LISTING</b><i class="fa fa-fw fa-play-circle"></i></button>
				</div>
			</form>
		</div>
	</div>
</section>
<section id="front-search" class="container-fluid">
	<div class="container">
		<h3>CHECK OUT OUR LATEST UNITS</h3>
		<div id="mason-gallery">
			<ul>
				@foreach($topUnits as $t=>$u)
				<li class="item-box">
					<a href="/project/{{ $u->project()->first()->id }}/{{ str_slug($u->project()->first()->name) }}">
						<div class="img-box" style="background-image: url({{ asset('images/units/'.JSON_DECODE($u->images)[0]) }})"></div>
						<div class="info-box">
							<label>{{ $u->project()->first()->name }}</label>
							<small>{{ $u->project()->first()->location }}</small>

							<p>{{ $u->description }}</p>
							<ul class="list-unstyled">
								<li><i class="fa fa-fw fa-check"></i>{{ $u->bedrooms }} bedrooms</li>
								<li><i class="fa fa-fw fa-check"></i>{{ $u->bathroom }} bathrooms</li>
								<li><i class="fa fa-fw fa-check"></i>{{ number_format($u->area,2) }} sq. m</li>
							</ul>
						</div>
					</a>
				</li>

				@endforeach
			</ul>
		</div>
	</div>
</section>
<section id="why-choose-us">
	<div class="container-fluid" style=" padding: 52px 0; background-color: rgba(32, 32, 32, 0.76);">
		<div class="container text-center">
			<h1>WHY CHOOSE US ?</h1>
			<h1 style="margin-top: -22px;">_________</h1>
			<h4>WE ARE LICENSED REAL ESTATE PROFESSIONALS FOCUSED AND <br>DEDICATED TO PROVIDE THE BEST PROPERTY SOLUTION TO EACH CUSTOMERS' NEED.</h4>
		</div>

	</div>

</section>
<section id="testimonials">

	<div class="[ container text-center ]">
		<div class="[ row ]">
			<div class="[ col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 ]" role="tabpanel">
				<div class="[ col-xs-4 col-sm-12 ]">
					<!-- Nav tabs -->
					<ul class="[ nav nav-justified ]" id="nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#dustin" aria-controls="dustin" role="tab" data-toggle="tab">
								<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dustinlamont/128.jpg" />
								<span class="quote"><i class="fa fa-quote-left"></i></span>
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#daksh" aria-controls="daksh" role="tab" data-toggle="tab">
								<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dakshbhagya/128.jpg" />
								<span class="quote"><i class="fa fa-quote-left"></i></span>
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#anna" aria-controls="anna" role="tab" data-toggle="tab">
								<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/annapickard/128.jpg" />
								<span class="quote"><i class="fa fa-quote-left"></i></span>
							</a>
						</li>
						<li role="presentation" class="">
							<a href="#wafer" aria-controls="wafer" role="tab" data-toggle="tab">
								<img class="img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/waferbaby/128.jpg" />
								<span class="quote"><i class="fa fa-quote-left"></i></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="[ col-xs-8 col-sm-12 ]">
					<!-- Tab panes -->
					<div class="tab-content" id="tabs-collapse">            
						<div role="tabpanel" class="tab-pane fade in active" id="dustin">
							<div class="tab-inner">                    
								<p class="lead">Etiam tincidunt enim et pretium efficitur. Donec auctor leo sollicitudin eros iaculis sollicitudin.</p>
								<hr>
								<p><strong class="text-uppercase">Dustin Lamont</strong></p>
								<p><em class="text-capitalize"> Senior web developer</em> at <a href="#">Apple</a></p>                 
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="daksh">
							<div class="tab-inner">
								<p class="lead">Suspendisse dictum gravida est, nec consequat tortor venenatis a. Suspendisse vitae venenatis sapien.</p>
								<hr>
								<p><strong class="text-uppercase">Daksh Bhagya</strong></p>
								<p><em class="text-capitalize"> UX designer</em> at <a href="#">Google</a></p>
							</div>
						</div>

						<div role="tabpanel" class="tab-pane fade" id="anna">
							<div class="tab-inner">
								<p class="lead">Nullam suscipit ante ac arcu placerat, nec sagittis quam volutpat. Vestibulum aliquam facilisis velit ut ultrices.</p>
								<hr>
								<p><strong class="text-uppercase">Anna Pickard</strong></p>
								<p><em class="text-capitalize"> Master web developer</em> at <a href="#">Intel</a></p>
							</div> 
						</div>

						<div role="tabpanel" class="tab-pane fade" id="wafer">
							<div class="tab-inner">
								<p class="lead"> Fusce erat libero, fermentum quis sollicitudin id, venenatis nec felis. Morbi sollicitudin gravida finibus.</p>
								<hr>
								<p><strong class="text-uppercase">Wafer Baby</strong></p>
								<p><em class="text-capitalize"> Web designer</em> at <a href="#">Microsoft</a></p>
							</div>
						</div>
					</div>
				</div>        
			</div>
		</div>
	</div>
</section>
<section id="featured">
	<div class="container-fluid">
		<h3>FEATURED PROPERTIES</h4>
		<div id="carousel-featured">
			@foreach($projects as $k=>$p)
			<a href="/project/{{ $p->id }}/{{ str_slug($p->name) }}">
				<div class="listing-item">
					<div class="image" style="background-image: url({{ asset('images/projects/'.JSON_DECODE($p->images)[0]) }})">
						<label class="project-type">{{ $p->type }}</label>
					</div>
					<h4 class="head">{{ $p->name }}</h4>
					<small style="">{{ $p->developer()->first()->name }}</small>
					<p class="content">{{ str_limit($p->profile, $limit = 100, $end = '...') }}</p>
					<ul class="item-specs fa-ul">
						<li><i class="fa-li fa fa-bed"></i>{{ $p->units()->get()->count() }} Units</li>
						<li><i class="fa-li fa fa-home"></i>{{ $p->category }}</li>
					</ul>
				</div>
			</a>
			@endforeach
		</div>
	</div>
</section>
<section id="affiliates">
	<div class="container">
		<h3>FEATURED DEVELOPERS</h3>
		<div id="carousel-partners">
			<div class="partner-item"><img src="{{ asset('/images/affiliates/ayala.png') }}"></div>
			<div class="partner-item"><img src="{{ asset('/images/affiliates/dmci.png') }}"></div>
			<div class="partner-item"><img src="{{ asset('/images/affiliates/ortigas.png') }}"></div>
			<div class="partner-item"><img src="{{ asset('/images/affiliates/shang.png') }}"></div>
			<div class="partner-item"><img src="{{ asset('/images/affiliates/smdc.png') }}"></div>
		</div>
	</div>
</section>
@endsection
