@extends('tpl')
@section('styles')
    <link href="{{ elixir('css/showroom.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script src="{{ elixir('js/showroom.js') }}"></script>
@endsection
@section('content')
    <div class="container">
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
                 <a class="left carousel-control" href="#carousel-shoowroom" role="button" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#carousel-shoowroom" role="button" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </a>
               </div>
            </div>
            <div class="col-sm-5">
                <h4>ONE BEDROOM UNIT</h4>
                <small>Approximately 55-60 sq.m. | 593-646 sq.ft.</small>
            </div>
        </div>
    </div>
@endsection
