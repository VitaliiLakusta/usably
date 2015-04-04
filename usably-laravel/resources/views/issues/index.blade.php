<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <title>Issues</title>

    <!-- BOOTSTRAP -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <!-- Font-awesome.css for awesome icons -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <div class="col-md-4 issue-list-left">
        <h3><i class="fa fa-list"></i>Categories</h3>
        <ul class="issue-list-indicators">
            <a href="#efficiency" data-toggle="tab">
                <li class="active"><i class="fa fa-circle-o-notch"></i>Efficiency</li>
            </a>
            <a href="#learnability" data-toggle="tab">
                <li><i class="fa fa-circle-o-notch"></i>Learnability</li>
            </a>
            <a href="#">
                <li><i class="fa fa-circle-o-notch"></i>Satisfaction</li>
            </a>
            <a href="#">
                <li><i class="fa fa-circle-o-notch"></i>Avoiding Mistakes</li>
            </a>
            <a href="#">
                <li><i class="fa fa-circle-o-notch"></i>Goal Orientation Rate</li>
            </a>
            <a href="#">
                <li><i class="fa fa-circle-o-notch"></i>Avoiding Too Much Information</li>
            </a>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane active" id="efficiency">
            <div class="col-md-8 issue-list-right" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#todo-efficiency" role="tab" data-toggle="tab"><i class="fa fa-dot-circle-o"></i>To do</a></li>
                    <li role="presentation"><a href="#all-efficiency" 	role="tab" data-toggle="tab"><i class="fa fa-bars"></i>All </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content indicator-desc">
                    <div role="tabpanel" class="tab-pane active" id="todo-efficiency">
                        <div class="col-md-12" style="border-bottom: 1px solid #ddd">
                            <h3 class="col-md-6">What?</h3>
                            <h3 class="col-md-6">Why?</h3>
                        </div>
                        <!--Will be loop -->
                        <div class="col-md-12 issue 1">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Improve your navigation system
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Navigation system is important for customer's understanding of your website
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-12 issue 2">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Improve your categories' priority
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Improving categories' prorities is important because...
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-12 issue 3" style="border-bottom-color: transparent">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Improve your lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Because lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="all-efficiency">
                        <div class="col-md-12" style="border-bottom: 1px solid #ddd">
                            <h3 class="col-md-6">What?</h3>
                            <h3 class="col-md-6">Why?</h3>
                        </div>
                        <!--Will be loop -->
                        <div class="col-md-12 issue 1">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar feugiat libero, sit amet luctus elit. Etiam non libero tellus. Nullam venenatis hendrerit magna sit amet lobortis.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Nunc ante ipsum, suscipit id rutrum quis, cursus quis dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-12 issue 2" style="border-bottom-color: transparent">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Phasellus tempus enim non nisl efficitur cursus. Cras semper pellentesque est, a semper libero venenatis sit amet.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Duis lacinia, nisi et vestibulum condimentum, lectus nibh volutpat libero, quis vehicula nibh dolor id est. Nam commodo diam felis, in faucibus justo laoreet non. Cras maximus diam vel pellentesque sodales.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="learnability">
            <div class="col-md-8 issue-list-right" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#todo-learnability" role="tab" data-toggle="tab"><i class="fa fa-dot-circle-o"></i>To do</a></li>
                    <li role="presentation"><a href="#all-learnability" role="tab" data-toggle="tab"><i class="fa fa-bars"></i>All </a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content indicator-desc">
                    <div role="tabpanel" class="tab-pane active" id="todo-learnability">
                        <div class="col-md-12" style="border-bottom: 1px solid #ddd">
                            <h3 class="col-md-6">What?</h3>
                            <h3 class="col-md-6">Why?</h3>
                        </div>
                        <!--Will be loop -->
                        <div class="col-md-12 issue 1">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-12 issue 2">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>

                        <div class="col-md-12 issue 3" style="border-bottom-color: transparent">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>BLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="all-learnability">
                        <div class="col-md-12" style="border-bottom: 1px solid #ddd">
                            <h3 class="col-md-6">Wh2at?</h3>
                            <h3 class="col-md-6">Wh2y?</h3>
                        </div>
                        <!--Will be loop -->
                        <div class="col-md-12 issue 1">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris pulvinar feugiat libero, sit amet luctus elit. Etiam non libero tellus. Nullam venenatis hendrerit magna sit amet lobortis.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Nunc ante ipsum, suscipit id rutrum quis, cursus quis dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>
                        <!-- -->
                        <div class="col-md-12 issue 2" style="border-bottom-color: transparent">
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-exclamation-triangle"></i>Phasellus tempus enim non nisl efficitur cursus. Cras semper pellentesque est, a semper libero venenatis sit amet.
                            </div>
                            <div class="col-md-6 issue-list-desc">
                                <i class="fa fa-check-square"></i>Duis lacinia, nisi et vestibulum condimentum, lectus nibh volutpat libero, quis vehicula nibh dolor id est. Nam commodo diam felis, in faucibus justo laoreet non. Cras maximus diam vel pellentesque sodales.
                                <a class="learn-more" href="">Learn More</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- tab-content -->
    </div>
    <!-- container -->
    <script type="text/javascript">
        $(window).load(function() {
            $(".jsScrollbar").customScrollbar();
        });
    </script>
</html>