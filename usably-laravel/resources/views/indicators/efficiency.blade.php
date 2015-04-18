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

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-primary">
                <div class="panel-heading" style="padding-bottom:15px;">
                    <div class="col-md-6 usably_rate_star">
                        <canvas id="star_rate" width="70" height="70"></canvas>
                    </div>
                    <div class="col-md-6 usably_rate_info">
                        <span id="counter" data-fill="51"></span><span style="font-size:80%;color:#0F426E">/100</span>
                        <span style="font-size:50%;font-weight:bold;display:block">Efficiency Rate</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="view-usably-details"><a href="#">View details<i class="fa fa-info-circle"></a></i></div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h2>Indicator Chart Goes Here</h2>
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


    <div class="row indicator-overview-charts">
        <div class="col-md-6 indicator-rate">
            <h3>Efficiency Rate</h3>
            <img src="http://placehold.it/350x350">
        </div>
        <div class="col-md-6 indicator-history">
            <h3>Efficiency History</h3>
            <img src="http://placehold.it/600x350">
        </div>
    </div>

    <h3>Related Metrics</h3>
    <div class="row metrics-list">
        <ul>
            <li><h3>Metrics1</h3></li>
            <li><h3>Metrics2</h3></li>
            <li><h3>Metrics3</h3></li>
        </ul>
    </div>

@stop

@section('footer')


@stop