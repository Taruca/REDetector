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
    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div>
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#gettingStarted" id="gettingStarted-tab" role="tab" data-toggle="tab" aria-controls="gettingStarted" aria-expanded="true">Getting started</a></li>
                <li role="presentation"><a href="#runningOptions" id="runningOptions-tab" data-toggle="tab" aria-controls="runningOptions">Running Options</a></li>
                <li role="presentation"><a href="#uploadingFiles" id="uploadingFiles-tab" data-toggle="tab" aria-controls="uploadingFiles">Uploading Files</a></li>
            </ul>
        </div>
        <div class="col-md-1"></div>
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

        <div role="tabpanel" class="tab-pane fade" id="runningOptions" aria-labelledby="runningOptions-tab">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">Running options of RNA Editing Detector</h2>
                        <div class="wrapper_components_pillar"><div class="container-fluid"><div class="container"><div class="row">
                                        <div class="col-xs-4 col-sm-4 pillar"></div>
                                        <div class="col-xs-4 col-sm-4 pillar">
                                            {!! Form::open(['url' => '/']) !!}
                                            <div class="form-group">
                                                <hr>
                                                <p>Editing Type:</p>
                                                <center>
                                                    {!! Form::radio('editingType', 'AG', 'AG') !!}A-to-G&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    {!! Form::radio('editingType', 'TC') !!}T-to-C
                                                </center>
                                                <hr>
                                                <p>Quality(range of 1-255):</p>
                                                <center>
                                                    {!! Form::text('q', '20') !!}
                                                </center>
                                                <hr>
                                                <p>Depth of coverage(range of 1-255):</p>
                                                <center>
                                                    {!! Form::text('dp', '6') !!}
                                                </center>
                                                <hr>
                                                <p>Splice-junction length(range of 1-99):</p>
                                                <center>
                                                    {!! Form::text('sj', '2') !!}
                                                </center>
                                                <hr>
                                                <p>The radio of a site whether it's a RNA editing or not:</p>
                                                <center>
                                                    {!! Form::text('rnaRadio', '4.0') !!}
                                                </center>
                                                <hr>
                                                {!! Form::submit('Submit', ['class' => 'btn btn-primary col-xs-offset-4']) !!}
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-xs-4 col-sm-3 pillar"></div>
                        </div></div></div></div>

                    </div>
                </div>
            </div>

        <div role="tabpanel" class="tab-pane fade" id="uploadingFiles" aria-labelledby="uploadingFiles-tab">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Uploading your RNA and DNA vcf files here</h2>
                    <div class="wrapper_components_pillar"><div class="container-fluid"><div class="container"><div class="row">
                                    <div class="col-xs-4 col-sm-4 pillar"></div>
                                    <div class="col-xs-4 col-sm-4 pillar">
                                        {!! Form::open(['action' => 'HomeController@upload', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                                            <div class="form-group">
                                                <hr>
                                                <p>Choose RNA vcf file(<span style="color:red">required</span>):</p>
                                                <center class="col-xs-offset-1">{!! Form::radio('rnaFileFormat', 'rnaVcf', 'rnaVcf') !!}RNA vcf file<span style="color:red">*</span></center>
                                                <div class="col-xs-offset-4">{!! Form::file('rnaVcfFile') !!}</div>
                                                <hr>
                                                <p>Choose DNA vcf file(<span style="color:red">optional</span>):</p>
                                                <center class="col-xs-offset-1">{!! Form::radio('dnaFileFormat', 'dnaVcf') !!}DNA vcf file</center>
                                                <div class="col-xs-offset-4">{!! Form::file('dnaVcfFile') !!}</div>
                                                <hr>
                                                {!! Form::submit('Upload', ['class' => 'btn btn-primary col-xs-offset-4']) !!}
                                            </div>
                                        {!! Form::close() !!}

                                    </div>
                                    <div class="col-xs-4 col-sm-3 pillar"></div>
                    </div></div></div></div>

                </div>
            </div>
        </div>

    </div>

@stop