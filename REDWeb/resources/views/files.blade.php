@extends('head/filesHead')
@section('navRight')
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="/files">My Files</a></li>
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
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <h4>Your Profiles</h4>
                <ul class="nav {{--nav-sidebar --}}nav-pills nav-stacked" role="tablist">
                    <li role="presentation" class="active"><a href="#{{ $table1 }}" id="{{ $table1 }}-tab" role="tab" data-toggle="tab" {{--aria-controls="{{ $table1 }}" aria-expanded="true"--}}>{{ $table1 }}</a></li>
                    @foreach($tableElse as $table)
                        <li role="presentation"><a href="#{{ $table }}" id="{{ $table }}-tab" role="tab" data-toggle="tab" {{--aria-controls="{{ $table }}"--}}>{{ $table }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="tab-content wrapper wrapper_home_home_content">
                <div role="tabpanel" class="tab-pane fade active in" id="{{ $table1 }}" {{--aria-labelledby="{{ $table1 }}-tab"--}}>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Content</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($tableContents[0] as $content)
                                <tr>
                                    <td>{{ $content->id }}</td>
                                    <td>{{ $content->title }}</td>
                                    <td>{{ $content->content }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                @foreach($tableElse as $table)
                    <div role="tabpanel" class="tab-pane fade" id="{{ $table }}" {{--aria-labelledby="{{ $table }}-tab"--}}>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach(DB::table($table)->get() as $tableContent)
                                        <tr>
                                            <td>{{ $tableContent->id }}</td>
                                            <td>{{ $tableContent->title }}</td>
                                            <td>{{ $tableContent->content }}</td>
                                        </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

@stop
