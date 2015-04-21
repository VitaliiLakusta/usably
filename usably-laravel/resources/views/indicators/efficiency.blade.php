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

    <div class="row indicators-nav-row">
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
                    <div class="view-usably-details"><a href="#">View details<i class="fa fa-info-circle"></i></a></div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>Efficiency rate over time</h3>
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
            <h3 class="col-md-6 metric-title">Form Validation Errors</h3>
            <h4 class="col-md-6 related-issues-fixes-text">Related Issues and Fixes</h4>
        </div>
        <hr class="hr-small-margin">
        <div class="row indicator-metric-content">
            <div class="col-md-3 col-metric-chart">
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
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>35 % of your users</strong> make form validation errors
                    <br><br>
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                </p>
            </div>
            <div class="col-md-3 col-metric-issues">
                <div class="panel panel-default">
                    <div class="panel-body issue 1">
                        <h4>Form validation errors</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2">
                        <h4>Unfinished checkout rate</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3">
                        <h4>Search efficiency</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row indicator-metric-row">
        <div class="row">
            <h3 class="col-md-6 metric-title">Shopping Cart Abandonment</h3>
            <h4 class="col-md-6 related-issues-fixes-text">Related Issues and Fixes</h4>
        </div>
        <hr class="hr-small-margin">
        <div class="row indicator-metric-content">
            <div class="col-md-3 col-metric-chart">
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
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>35 % of your users</strong> make form validation errors
                    <br><br>
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                    Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum
                </p>
            </div>
            <div class="col-md-3 col-metric-issues">
                <div class="panel panel-default">
                    <div class="panel-body issue 1">
                        <h4>Form validation errors</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2">
                        <h4>Unfinished checkout rate</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3">
                        <h4>Search efficiency</h4>
                        <div class="issue-actions">
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Add to list" href="#"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details" href="#"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@stop

@section('footer')
    <script src="/js/Chart.js"></script>
    <script src="/js/main.js"></script>

@stop