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