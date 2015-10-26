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
@section('content')
    <div class="col-md-offset-1">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a></li>
            <li role="presentation"><a href="#profile" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
    </div>
    <div id="myTabContent" class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active col-md-offset-1" id="home" aria-labelledby="home-tab">
            <h2>home tab</h2>
        </div>
        <div role="tabpanel" class="tab-pane fade col-md-offset-1" id="profile" aria-labelledby="profile-tab">
            <h2>profile tab</h2>
        </div>
    </div>
@stop