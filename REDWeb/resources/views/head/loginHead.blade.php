<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RNA Editing Detector</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/css/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/theme.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/footer.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">RNA Edting Detector</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                @yield('personal')
            </ul>
            <div class="navbar-form navbar-right">
                @yield('navRight')
            </div>
            {{--{!! Form::open(['class' => 'navbar-form navbar-right', 'url' => '/auth/login']) !!}
            <div class="form-group">
                {!! Form::text('', null, ['placeholder' => 'Email', 'class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::password('', ['placeholder' => 'Password' ,'class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Sign in', ['class' => 'btn btn-primary form-control']) !!}
            --}}{{--
                            <button type="submit" class="btn btn-primary">Sign in</button>
            --}}{{--
            <button type="submit" class="btn btn-success">Register</button>
            {!! Form::close() !!}
--}}

        </div><!--/.nav-collapse -->
    </div>
</nav>

@yield('content')

{{-- Copyright --}}
<footer class="footer">
    <div class="container">
        <p>&copy; BNI 2015</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>