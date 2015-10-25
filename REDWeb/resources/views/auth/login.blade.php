@extends('head/loginHead')
@section('navRight')
    <a href="/auth/register" class="btn btn-success" role="button">Register</a>
@stop

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(['url' => '/auth/login']) !!}
            <!--- Email Field --->
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <!--- Password Field --->
            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop