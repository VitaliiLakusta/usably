@extends('app')

@section('navigation')
    @include('partials.navigation');
@stop

@section('header')
    <script type="text/javascript" src="/js/rating_star.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //tooltip
    
            //add to list animation
            $('.add-to-list').click(function AddIssueToList(){
                $(this).parent().parent('.issue').stop(true,true).animate({left:'150px',opacity:'hide'},1700);
            }),
            //success alert animation
            $(".add-to-list").click(function showSuccessAlert() {
                setTimeout(function() {
                    $(".alert-success").alert().slideDown(700);
                    $(".alert-success").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-success").hide();
                    });
                },300)
            }),
            //error alert animation
            $(".error").click(function showErrorAlert() {
                setTimeout(function() {
                    $(".alert-danger").alert().slideDown(700);
                    $(".alert-danger").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-danger").hide();
                    });
                },300)
            });
        });

    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard <small>Usability Overview</small></h1>
            <hr>
            <ol class="breadcrumb">
                <li class="active"><i class="fa fa-dashboard"></i><a href="#">Dashboard</a></li>
            </ol>
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
                        <span id="counter" data-fill="60"></span><span style="font-size:70%;color:#0F426E">/100</span>
                        <span style="font-size:50%;font-weight:bold;display:block;margin-left:-25px">Usability Rate</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="view-usably-details"><a href="/indicators/efficiency">View details<i class="fa fa-info-circle"></i></a></div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <span style="font-size:18px">Usability rate over time</span>
                        </div>
                        <div class="panel-body">
                            <canvas id="lineChart1" height="60"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row usability-indicators-chart-row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             <span style="font-size:18px">Usability Indicators</span></div>
                        <div class="panel-body">
                            <div class="canvas-holder">
                                <canvas id="indicators-chart"></canvas>
                            </div>
                            <div class="chart-legend">
                                <span class="critical">Critical</span>
                                <span class="important">Important</span>
                                <span class="average">Average</span>
                                <span class="normal">Normal</span>
                                <span class="excellent">Excellent</span>

                            </div>
                            <div class="view-usably-details"><a href="/indicators/efficiency">View details<i class="fa fa-info-circle"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            @include('issues.critical-issues')
        </div>
    </div>




@stop

@section('footer')
    <script src="/js/Chart.js"></script>
    <script src="/js/main.js"></script>

@stop

@stop