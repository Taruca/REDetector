@extends('head/homeHead')
@section('navRight')
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personal <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">My Files</a></li>
                <li><a href="#">Personal Information</a></li>
                <li><a href="#">Change Your Password</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="/auth/logout">Logout</a></li>
            </ul>
        </li>
    </ul>
@stop