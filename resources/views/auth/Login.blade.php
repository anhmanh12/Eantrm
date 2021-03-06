<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{asset('public/Login/css/css.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="" class="active" id="login-form-link">Login</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <form id="login-form" action="{{url('login')}}" method="POST" role="form" style="display: block;">
                                     {!! csrf_field() !!}
                                    @if($errors->has('errorlogin'))
                                    <p style="color: red; font-size: 17px; text-align: center;" >{{$errors->first('errorlogin')}}</p>
                                    @endif
                                    <div class="form-group">
                                        <input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
                                        @if($errors->has('email'))
                                        <p style="color: red; font-size: 17px; text-align: center;" >{{$errors->first('email')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">

                                        @if($errors->has('password'))
                                        <p style="color: red; font-size: 17px; text-align: center;" >{{$errors->first('password')}}</p>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">

                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>