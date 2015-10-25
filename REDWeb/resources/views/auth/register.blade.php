@extends('head/loginHead')
@section('navRight')
    <a href="/auth/login" class="btn btn-primary" role="button">Login</a>
@stop

@section('content')
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::open(['url' => '/auth/register']) !!}
            <!--- Name Field --->
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
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
            <!--- Password_confirmation Field --->
            <div class="form-group">
                {!! Form::label('password_confirmation', 'Password_confirmation:') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Register', ['class' => 'btn btn-success form-control']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop