@extends('app')

@section('navigation')
    @include('partials.navigation');
@stop

@section('header')
    <script type="text/javascript" src="/js/rating_star.js"></script>
    <script type="text/javascript" src="/js/progress-circle.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //tooltip
            $('[data-toggle="tooltip"]').tooltip(),
                //success alert animation
                    $(".formval-calc-details").click(function showCalcInfo() {
                        $(".ali1").slideToggle(800);
                    }),
                    $(".shopcard-calc-details").click(function showCalcInfo() {
                        $(".ali2").slideToggle(800);
                    }),
                    $('.close-info').click(function() {
                        $(this).parent().slideUp(800);
                    });

                    //add to list animation
                    $('.add-to-list').click(function AddIssueToList(){
                        $(this).parent().parent('.issue').stop(true,true).animate({marginLeft:'150px',opacity:'hide'},700);
                    }),
                    //success alert animation
                    $(".success").click(function showSuccessAlert() {
                        setTimeout(function() {
                            $(".alert-success").alert().slideDown(700);
                            $(".alert-success").fadeTo(1500, 1).slideUp(700, function(){
                                $(".alert-success").hide();
                            });
                        },300)
                    }),
                    //error alert animation
                    $(".error").click(function showErrorAlert() {
                        setTimeout(function() {
                            $(".alert-danger").alert().slideDown(700);
                            $(".alert-danger").fadeTo(1500, 1).slideUp(700, function(){
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
            <h1>Dashboard <small>Usability Indicators</small></h1>
            <hr>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i><a href="/indicators">Dashboard</a></li>
                <li class="active">
                    <i class="fa fa-calendar"></i>
                    Usability Indicators
                </li>
            </ol>
        </div>
    </div>

    <div class="row indicators-nav-row">
        <div class="col-md-12">
            <ul class="nav nav-tabs indicators-tabs-main">
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
                        <span id="counter" data-fill="53"></span><span style="font-size:70%;color:#0F426E">/100</span>
                        <span style="font-size:50%;font-weight:bold;display:block;margin-left:-25px">Efficiency Rate</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="view-usably-details"><a href="#">View details<i class="fa fa-info-circle"></i></a></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span style="font-size:18px">Efficiency rate over time</span>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart1" height="50"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-primary indicator-description-box">
                <div class="panel-body">
                    <h4>Efficiency Description</h4>
                    Efficiency means lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsum lorem ipsum
                    lorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsumlorem ipsum lorem ipsum
                    <div class="view-usably-details">
                        <a href="#">View details<i class="fa fa-info-circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row indicator-metric-row">
        <div class="row">
            <h3 class="col-md-8 metric-title">Form Validation Errors</h3>
            <h4 class="col-md-4 related-issues-fixes-text">Related Issues and Fixes</h4>
        </div>
        <hr class="hr-small-margin">
        <div class="row indicator-metric-content">
            <div class="col-md-2 col-metric-chart">
                <div class="progress-pie-chart" data-percent="55">
                    <div class="ppc-progress">
                        <div class="ppc-progress-fill"></div>
                    </div>
                    <div class="ppc-percents">
                        <div class="pcc-percents-wrapper">
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="issue-actions" style="top:0">
                    <a style="cursor:pointer" class="formval-calc-details" data-toggle="tooltip" data-placement="top" data-original-title="Click to see calculation method"><i style="font-size: 21px;" class="fa fa-info-circle"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>35 % of your users</strong> make form validation errors
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-4 col-metric-issues">
                <div class="alert alert-success" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success!</strong> Issue has been added to list succesfully.
                </div>

                <div class="alert alert-danger" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> An error occured while adding issue to list. This information is just for demonstrate.
                </div>
                <div class="panel panel-default">
                    <div class="panel-body issue 1">
                        <h4>Form validation errors</h4>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2">
                        <h4>Unfinished checkout rate</h4>
                        <div class="issue-actions">
                            <a class="add-to-list error" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3">
                        <h4>Search efficiency</h4>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="row">
        <div class="alert alert-info ali1" style="display:none;">
            <a class="close close-info">&times;</a>
            Here is info
        </div>
    </div>
<div class="row indicator-metric-row">
        <div class="row">
            <h3 class="col-md-8 metric-title">Shopping Cart Abandonment</h3>
            <h4 class="col-md-4 related-issues-fixes-text">Related Issues and Fixes</h4>
        </div>
        <hr class="hr-small-margin">
        <div class="row indicator-metric-content">
            <div class="col-md-2 col-metric-chart">
                <div class="progress-pie-chart" data-percent="55">
                    <div class="ppc-progress">
                        <div class="ppc-progress-fill"></div>
                    </div>
                    <div class="ppc-percents">
                        <div class="pcc-percents-wrapper">
                            <span>%</span>
                        </div>
                    </div>
                </div>
                <div class="issue-actions" style="top:0">
                    <a style="cursor:pointer" class="shopcard-calc-details" data-toggle="tooltip" data-placement="top" data-original-title="Click to see calculation method"><i style="font-size: 21px;" class="fa fa-info-circle"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>35 % of your users</strong> make form validation errors
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="col-md-4 col-metric-issues">
                <div class="panel panel-default">
                    <div class="panel-body issue 1">
                        <h4>Form validation errors</h4>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2">
                        <h4>Unfinished checkout rate</h4>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3">
                        <h4>Search efficiency</h4>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="row">
            <div class="alert alert-info ali2" style="display:none;">
                <a class="close close-info">&times;</a>
                Here is info
            </div>
        </div>

@stop

@section('footer')
    <script src="/js/Chart.js"></script>
    <script src="/js/main.js"></script>

@stop