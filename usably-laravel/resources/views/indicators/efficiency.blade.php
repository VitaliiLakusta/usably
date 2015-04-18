@extends('app');

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard <small>Usability Indicators</small></h1>
            <hr>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i><a href="#">Dashboard</a></li>
                <li class="active">
                    <i class="fa fa-calendar"></i>
                    Usability Indicators
                </li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="#">Usably Indicators</a></li>
                <li role="presentation" class="active"><a href="#efficiency" data-toggle="tab">Efficiency</a></li>
                <li role="presentation"><a href="#avoiding_mistakes" data-toggle="tab">Avoiding Mistakes</a></li>
                <li role="presentation"><a href="#" data-toggle="tab">Satisfaction</a> </li>
                <li role="presentation"><a href="#" data-toggle="tab">Information Overload</a></li>
                <li role="presentation"><a href="#" data-toggle="tab">Goal Orientation</a></li>
            </ul>
        </div>
    </div>

    <div class="row indicator-panel">

        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading" style="padding-bottom:15px;">
                    <div class="col-md-6 usably_rate_star">
                        <canvas id="star_rate" width="70" height="70"></canvas>
                    </div>
                    <div class="col-md-6 usably_rate_info">
                        <span id="counter" data-fill="60"></span><span style="font-size:80%;color:#0F426E">/100</span>
                        <span style="font-size:50%;font-weight:bold;display:block">Efficiency Rate</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="view-usably-details"><a href="#">View details<i class="fa fa-info-circle"></a></i></div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Efficiency rate over time</h3>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart1"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-primary indicator-description-box">
                <div class="panel-body">
                    <h4>Efficiency Description</h4>
                    Efficiency means lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum
                    lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum
                    lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum
                    lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')
    <script src="/js/Chart.js"></script>
    <script src="/js/main.js"></script>

@stop