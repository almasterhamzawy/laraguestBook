<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Soft Masr - Project">
        <meta name="author" content="Ahmed ElShahat">
        <title>Login</title>

        <!-- FontAwesome -->
        <link href="{{asset('resources')}}/assets/css/font-awesome.min.css" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="{{asset('resources')}}/assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Style -->
        <link href="{{asset('resources')}}/assets/css/style.css" rel="stylesheet">
    </head>
    <body class="admin-login">
        <div class="container">

                <div class="col-md-12">
                    <div class="content">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4">
                                <div class="page-header">
                                    <h1>Login <small>Admin Panel</small></h1>
                                </div>

                                <?php $errors = session('errors'); ?>

                                @if(is_array($errors) && count($errors)>0)
                                    <div class="alert alert-danger">
                                        <strong>Errors:</strong>
                                        <ul>
                                        @foreach($errors as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="form-horizontal" action="{{url('users/login')}}" method="post">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Remember me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <button type="submit" class="btn btn-danger pull-right"><i class="fa fa-sign-in"></i> Sign in</button>
                                    </div>
                                </form>
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