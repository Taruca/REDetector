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
            <li role="presentation" class="active"><a href="#gettingStarted" id="gettingStarted-tab" role="tab" data-toggle="tab" aria-controls="gettingStarted" aria-expanded="true">Getting started</a></li>
            <li role="presentation"><a href="#profile" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
    </div>

    <div class="tab-content wrapper wrapper_home_home_content">

            <div role="tabpanel" class="tab-pane fade in active" id="gettingStarted" aria-labelledby="gettingStarted-tab">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">An overview of how to use our RNA Editing Detector</h2>
                        <div class="wrapper_components_pillar">
                            <div class="container-fluid">
                                <div class="container">
                                    <div class="row">

                                        <div class="col-xs-2 col-sm-1 pillar">
                                            <h1>Step One</h1>
                                        </div>
                                        <div class="col-xs-10 col-sm-5 pillar">
                                            <h2>Install running settings</h2>
                                            <p>Cilck "Running Settings" tab above and install the settings as you wish.</p>
                                        </div>

                                        <div class="col-xs-2 col-sm-1 pillar">
                                            <h1>Step Two</h1>
                                        </div>
                                        <div class="col-xs-10 col-sm-5 pillar">
                                            <h2>Upload your RNA or DNA files</h2>
                                            <p>Cilck "Upload Files" tab above and upload your RNA or DNA files as hint.</p>
                                        </div>

                                        <div class="col-xs-2 col-sm-1 pillar">
                                            <h1>Step Three</h1>
                                        </div>
                                        <div class="col-xs-10 col-sm-5 pillar">
                                            <h2>Wait the results</h2>
                                            <p>We will analyse your RNA and DNA data on our servers and sends email to you once we get the results. You can then checkout and download the results in "My files".</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
                <h2>profile tab</h2>
            </div>
    </div>

@stop