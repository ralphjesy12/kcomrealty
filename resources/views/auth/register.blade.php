@extends('tpl2')
@section('styles')
<style>
    body{
        height: 100%;
        font-family: 'Open Sans', sans-serif;
        background-color : #fff;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-image: url(images/teaserbglo.jpg);
        background-attachment : fixed;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.18);
        padding-bottom : 30px;
    }

    @media only screen and (min-width: 1200px) {
        body {
            background-image: url(images/teaserbgvhi.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        body {
            background-image: url(images/teaserbghi.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (min-width: 768px) and (max-width: 991px) {
        body {
            background-image: url(images/teaserbgmed.jpg);
            font-size: 15px;
        }
    }
    @media only screen and (max-width: 767px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 13px;
        }
    }
    @media only screen and (max-width: 512px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 12px;
        }
    }
    @media only screen and (min-width: 320px)  and (max-width: 512px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 11px;
        }
    }
    @media only screen and (max-width: 319px) {
        body {
            background-image: url(images/teaserbglo.jpg);
            font-size: 10px;
        }
    }

    .noradius input,.noradius button,.noradius select,.noradius textarea{
        border-radius: 0;
    }

    .btn-squared{
        border-radius: 0;
    }

    .form-control:focus {
        border-color: #36612D;
        outline: 0;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(54, 97, 45, 0.6);
    }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div style="
                        background-image: url(images/kcom-logo.png);
                        height: 200px;
                        width: 200px;
                        background-size: contain;
                        background-repeat: no-repeat;
                        margin: 0 auto;
                        margin-top: 43px;
                        "></div>
            <h1 style="

                       font-weight: bold;
                       text-align: center;
                       color: #36612D;
                       ">K-COM REALTY</h1>
            <div class="panel panel-default" style="  border-radius: 0;">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="form-horizontal noradius" role="form" method="POST" action="{{ url('/auth/register') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-green">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="panel-footer">
                    Already have an account? <a href="{{ url('/login') }}">Login here</a></div>
            </div>
        </div>
    </div>
</div>

@endsection

