@extends('app')


@section('header')
<style type="text/css">
    .link-to-efficiency {
    outline: none;
    background-color: #000 !important;
}
</style>
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
@section('navigation')
    @include('partials.navigation');
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
                        <span id="counter" data-fill="18"></span><span style="font-size:70%;color:#0F426E">/100</span>
                        <span style="font-size:50%;font-weight:bold;display:block;margin-left:-25px">Efficiency Rate</span>
                    </div>
                </div>
                <div class="panel-body">
                    
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span style="font-size:18px">Efficiency rate over time</span>
                </div>
                <div class="panel-body">
                    <canvas id="lineChart1" height="70"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-primary indicator-description-box">
                <div class="panel-body">
                    <div class="issue-title" onclick="location.href='/indicators/efficiency'">Efficiency Description</div>
                    Efficiency is a skill in avoiding wasted time and effort. It is important to incorporate programming techniques that will make the implementation and maintenance of your website efficient. In addition, these techniques make your website widely compatible with most operating systems and Web browsers.
                </div>
            </div>
        </div>
    </div>

    <div class="row indicator-metric-row">
        <div class="row">
            <h3 class="col-md-8 metric-title">Form Validation Errors</h3>
            <h4 class="col-md-4 related-issues-fixes-text">Related Issues and Fixes</div>
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
                    <a class="formval-calc-details" data-toggle="tooltip" data-placement="top" data-original-title="Click to see calculation method"><i style="font-size: 21px;" class="fa fa-info-circle"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>55 % of your users</strong> make form validation errors
                    <br><br>
                    Each field you ask for runs the risk of making your visitors turn around and give up. Not everyone types at the same speed, while typing on mobile devices is still a chore in general. Question if each field is really necessary and remove as many fields as possible. If you really have numerous optional fields, then also consider moving them after form submission on a separate page or state. It's so easy to bloat up your forms, yet fewer fields will convert better.
                </p>
            </div>
            <div class="col-md-4 col-metric-issues">
                <div class="alert alert-success" style="display:none;">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <strong>Success!</strong> Issue has been added to list succesfully.
                </div>

                <div class="alert alert-danger" style="display:none;">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> An error occured while adding issue to list. This information is just for demonstrate.
                </div>
                <div class="panel panel-default" style="border-color:transparent">
                    <div class="panel-body issue 1 critical">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Form validation errors</div>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" href="/knowledge-base" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2 critical">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Unfinished checkout rate</div>
                        <div class="issue-actions">
                            <a class="error" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" href="/knowledge-base" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3 important">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Search efficiency</div>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" href="/knowledge-base" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
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
            <h4 class="col-md-4 related-issues-fixes-text">Related Issues and Fixes</div>
        </div>
        <hr class="hr-small-margin">
        <div class="row indicator-metric-content">
            <div class="col-md-2 col-metric-chart">
                <div class="progress-pie-chart2" data-percent="20">
                    <div class="ppc-progress2">
                        <div class="ppc-progress-fill2"></div>
                    </div>
                    <div class="ppc-percents2">
                        <div class="pcc-percents-wrapper2">
                            <span>20%</span>
                        </div>
                    </div>
                </div>
                <div class="issue-actions" style="top:0">
                    <a class="shopcard-calc-details" data-toggle="tooltip" data-placement="top" data-original-title="Click to see calculation method"><i style="font-size: 21px;" class="fa fa-info-circle"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-metric-description">
                <p class="metric-description">
                    <strong>20% of your users</strong> make form validation errors
                    <br><br>
        The abandonment rate is the ratio of the number of abandoned shopping carts to the number of initiated transactions or to the number of completed transactions. The typical shopping cart abandonment rate for online retailers varies
                </p>
            </div>
            <div class="col-md-4 col-metric-issues">
                <div class="panel panel-default" style="border-color:transparent">
                    <div class="panel-body issue 1 critical">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Form validation errors</div>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 2 critical">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Unfinished checkout rate</div>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
                        </div>
                    </div>
                    <div class="panel-body issue 3 important">
                        <div class="issue-title" onclick="location.href='/indicators/efficiency'">Search efficiency</div>
                        <div class="issue-actions">
                            <a class="add-to-list success" data-toggle="tooltip" data-placement="top" data-original-title="Add to list"><i class="fa fa-th-list"></i></a>
                            <a data-toggle="tooltip" data-placement="top" data-original-title="Details"><i class="fa fa-info-circle"></i></a>
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