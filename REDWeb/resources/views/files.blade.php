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
                    <li role="presentation" class="active"><a href="#{{ $table1 }}" id="{{ $table1 }}-tab" role="tab" data-toggle="tab" {{--aria-controls="{{ $table1 }}" aria-expanded="true"--}}>
                            {{--{{ $table1 }}--}}
                            <?php
                            $newTableNameArray1 = explode('_', $table1);
                            $newTableName1 = $newTableNameArray1[1] ."_" .$newTableNameArray1[4];
                            echo $newTableName1;
                            ?>
                    </a></li>
                    @if($tableElse !== "null")
                        @foreach($tableElse as $table)
                            <li role="presentation"><a href="#{{ $table }}" id="{{ $table }}-tab" role="tab" data-toggle="tab" {{--aria-controls="{{ $table }}"--}}>
                                    {{--{{ $table }}--}}
                                    <?php
                                    $newTableNameArray = explode('_', $table);
                                    $newTableName = $newTableNameArray[1] ."_" .$newTableNameArray[4];
                                    echo $newTableName;
                                    ?>
                                </a></li>
                        @endforeach
                    @endif
                </ul>
            </div>

            <div class="tab-content wrapper wrapper_home_home_content">
                <div role="tabpanel" class="tab-pane fade active in" id="{{ $table1 }}" {{--aria-labelledby="{{ $table1 }}-tab"--}}>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>CHROM</th>
                                <th>POS</th>
                                <th>ID</th>
                                <th>REF</th>
                                <th>ALT</th>
                                <th>QUAL</th>
                                <th>FILTER</th>
                                <th>INFO</th>
                                <th>GT</th>
                                <th>AD</th>
                                <th>DP</th>
                                <th>GQ</th>
                                <th>PL</th>
                                <th>alu</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($tableContents[0] as $rowNums => $content)
                                @if($rowNums < 20)
                                    <tr>
                                        <td>{{ $content->CHROM }}</td>
                                        <td>{{ $content->POS }}</td>
                                        <td>{{ $content->ID }}</td>
                                        <td>{{ $content->REF }}</td>
                                        <td>{{ $content->ALT }}</td>
                                        <td>{{ $content->QUAL }}</td>
                                        <td>{{ $content->FILTER }}</td>
                                        <td>{{ $content->INFO }}</td>
                                        <td>{{ $content->GT }}</td>
                                        <td>{{ $content->AD }}</td>
                                        <td>{{ $content->DP }}</td>
                                        <td>{{ $content->GQ }}</td>
                                        <td>{{ $content->PL }}</td>
                                        <td>{{ $content->alu }}</td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        {{--download--}}
                        <p>Above are 20 rows of the result, if you want to get all of it, please click <a href="{{ action('HomeController@download', [$table]) }}">here to download</a></p>

                    </div>
                </div>

                @if($tableElse !== "null")
                    @foreach($tableElse as $table)
                        <div role="tabpanel" class="tab-pane fade" id="{{ $table }}" {{--aria-labelledby="{{ $table }}-tab"--}}>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>CHROM</th>
                                        <th>POS</th>
                                        <th>ID</th>
                                        <th>REF</th>
                                        <th>ALT</th>
                                        <th>QUAL</th>
                                        <th>FILTER</th>
                                        <th>INFO</th>
                                        <th>GT</th>
                                        <th>AD</th>
                                        <th>DP</th>
                                        <th>GQ</th>
                                        <th>PL</th>
                                        <th>alu</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach(DB::table($table)->get() as $rowNums => $tableContent)
                                        @if($rowNums < 20)
                                            <tr>
                                                <td>{{ $tableContent->CHROM }}</td>
                                                <td>{{ $tableContent->POS }}</td>
                                                <td>{{ $tableContent->ID }}</td>
                                                <td>{{ $tableContent->REF }}</td>
                                                <td>{{ $tableContent->ALT }}</td>
                                                <td>{{ $tableContent->QUAL }}</td>
                                                <td>{{ $tableContent->FILTER }}</td>
                                                <td>{{ $tableContent->INFO }}</td>
                                                <td>{{ $tableContent->GT }}</td>
                                                <td>{{ $tableContent->AD }}</td>
                                                <td>{{ $tableContent->DP }}</td>
                                                <td>{{ $tableContent->GQ }}</td>
                                                <td>{{ $tableContent->PL }}</td>
                                                <td>{{ $tableContent->alu }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                    </tbody>
                                </table>
                                {{--download--}}
                                <p>Above are 20 rows of the result, if you want to get all of it, please click <a href="">here to download</a></p>

                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

    </div>

@stop
