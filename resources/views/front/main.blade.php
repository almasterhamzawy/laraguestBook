<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Soft Masr - Project">
        <meta name="author" content="Ahmed ElShahat">
        <title>Soft Masr</title>

        <!-- FontAwesome -->
        <link href="{{asset('resources')}}/assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{asset('resources')}}/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style -->
        <link href="{{asset('resources')}}/assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.html"><img src="{{asset('resources')}}/assets/images/logo-dark.png" class="img-responsive" alt=""></a>
                            </div>

                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.html">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="guestbook.html">Guest Book</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>


@yield('content')

            </div>

        <div class="container-fluid footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center">
                            <div class="copyrights">
                                <span>Coded by </span><a href="http://www.arabtouch.com.eg">Arab Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{asset('resources')}}/assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('resources')}}/assets/js/bootstrap.min.js"></script>
    </body>
</html>