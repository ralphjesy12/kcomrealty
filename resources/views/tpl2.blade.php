    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>Find your way home | For Sale , Lease , Ready for Occupancy | K-Com Realty</title>
            <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

            @yield('styles')
            <style>
                .btn-green {
                    color: #fff;
                    background-color: #36612d;
                    border-color: #223f1c;
                }
                .btn-green:hover {
                    color: #fff;
                    background-color: #223f1c;
                    border-color: #223f1c;
                }
            </style>

        </head>
        <body>

            @yield('content')

            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="{{ asset('/js/app.js') }}"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->

            @yield('scripts')
        </body>
    </html>
