@extends('app')

@section('navigation')
    @include('partials.navigation');
@stop

@section('header')
    <script type="text/javascript">
        $(document).ready(function(){
            //add to list animation
            $('.success-alert').click(function AddIssueToList(){
                $(this).parent().parent().parent().parent().parent().stop(true,true).animate({marginLeft:'150px',opacity:'hide'},700);
            }),
            //success alert animation
            $(".success-alert").click(function showSuccessAlert() {
                setTimeout(function() {
                    $(".alert-success").alert().slideDown(700);
                    $(".alert-success").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-success").hide();
                    });
                },300);
            }),
            //error alert animation
            $(".error-alert").click(function showErrorAlert() {
                setTimeout(function() {
                    $(".alert-danger").alert().slideDown(700);
                    $(".alert-danger").fadeTo(2000, 1).slideUp(700, function(){
                    $(".alert-danger").hide();
                    });
                },300)
            });
        });
    </script>
    <style type="text/css">
    
    .panel-group .panel-heading {
        border-bottom: 1px solid #ddd;
    }
    .panel-heading .collaps-toggle:after {
        display: inline-block;
        font: normal normal normal 14px/1 FontAwesome;
        content: "\f106";
        font-size: inherit;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        transform: translate(0, 0);
        float:right;
        position:relative;
        top:-41px;
        font-size:40px;
        color:#ADADAD
    }
    .panel-heading .collaps-toggle.collapsed:after {
        content: "\f107";
        float:right;
        position:relative;
        top:-41px;
        font-size:40px;
        color:#ADADAD
    }
    .col-md-4 {
    	padding-top: 14px;
    }

    .fa {
      padding-right: 20px;
    }
    p {
    	text-align: justify;
    }
    </style>
@stop

@section('content')
    <h2>Knowledge base <small>Examples</small></h2>
        <hr />
        <ol class="breadcrumb">
            <i class="fa fa-tasks"></i>
            <li><a href="#">Knowledge base</a></li>
            <li class="active">Examples</li>
        </ol>
        <!-- Nav tabs -->

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs issue-tabs-main" role="tablist">
                    <li><a href="#"> Usably Indicators</a></li>
                    <li role="presentation" class="active">
                        <a href="#efficiency" data-toggle="tab"></i>Efficiency</a>
                    </li>
                    <li role="presentation">
                        <a href="#avoiding_mistakes" data-toggle="tab"></i>Avoiding Mistakes</a>
                        <li role="presentation">
                            <a href="#" data-toggle="tab"></i>Satisfaction</a>
                        </li>
                        <li role="presentation">
                            <a href="#" data-toggle="tab"></i>Information Overload</a>
                        </li>
                        <li role="presentation">
                            <a href="#" data-toggle="tab"></i>Goal Orientation</a>
                        </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="efficiency">  
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" class="collaps-toggle" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <h3><i class="fa fa-columns"></i>Try A One Column Layout instead of multicolumns.</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/idea001.png">
                            </div>
                            <div class="col-md-4">
                                <p>A one column layout will give you more control over your narrative. It should be able to guide your readers in a more predictable way from top to bottom. Whereas a multi column approach runs some additional risk of being distracting to the core purpose of a page. Guide people with a story and a prominent call to action at the end.</p>
                            </div>
                            <div class="col-md-2 issue-actions">
                                  <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                            </div>
                        </div>
                  </div>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h3><i class="fa fa-gift"></i>Try Giving a Gift instead of closing a sale right away.</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/idea002.png">
                            </div>
                            <div class="col-md-4">
                                <p>A friendly gesture such as providing a customer with a gift can be just that. Deeper underneath however, gifting is also an effective persuasion tactic that is based on the rule of reciprocity. As obvious as it sounds, being nice to someone by offering a small token of appreciation can come back in your favour down the road.</p>
                            </div>
                             <div class="col-md-2 issue-actions">
     <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
</div>
                        </div>
                    </div>
                  </div>
                </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <h3><i class="fa fa-th-large"></i>Try Merging Similar Functions instead of fragmenting the UI.</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/idea003.png">
                            </div>
                            <div class="col-md-4">
                                <p>Over the course of time, it's easy to unintentionally create multiple sections, elements and features which all perform the same function. It's basic entropy - things start falling apart over time. Keep an eye out for duplicate functionality labelled in various ways, as it puts a strain on your customers. Often, the more UI fragmentation there is, the higher the learning curve which your customers will have to deal with. Consider refactoring your UI once in a while by merging similar functions together.</p>
                            </div>
                             <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      <h3><i class="fa fa-users"></i>Try Social Proof instead of talking about yourself.</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="images/idea004.png">
                            </div>
                            <div class="col-md-4">
                                <p>Social proof is another great persuasion tactic directly applicable to increasing conversion rates. Seeing that others are endorsing you and talking about your offering, can be a great way to reinforce a call to action. Try a testimonial or showing data which proves that others are present.</p>
                            </div>
                             <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                      <h3><i class="fa fa-crosshairs"></i>Try Keeping Focus instead of drowning with links.</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="/images/idea016.png">
                            </div>
                            <div class="col-md-4">
                                <p>It’s easy to create a page with lots of links going left and right in the hope of meeting as many customer needs as possible. If however you’re creating a narrative page which is building on towards a specific call to action at the bottom, then think twice. Be aware that any link above the primary CTA runs the risk of taking your customers away from what you’ve been hoping them to do. Keep an eye out on the number of links on your pages and possibly balance discovery style pages (a bit heavier on the links) with tunnel style pages (with fewer links and higher conversions). Removing extraneous links can be a sure way to increase someone’s chances of reaching that important button..</p>
                            </div>
                           <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="avoiding_mistakes">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <h3><i class="fa fa-columns"></i>Lorem Ipsum</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="http://placehold.it/750x350">
                            </div>
                            <div class="col-md-4">
                                <p>Candy liquorice tootsie roll. Jelly beans wafer marshmallow muffin dragee brownie brownie. Gummi bears sweet souffle cheesecake lemon drops donut jujubes sesame snaps sweet. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy.</p>
                            </div>
                            <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              <div class="panel">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <h3><i class="fa fa-columns"></i>Lorem Ipsum</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="http://placehold.it/750x350">
                            </div>
                            <div class="col-md-4">
                                <p>Candy liquorice tootsie roll. Jelly beans wafer marshmallow muffin dragee brownie brownie. Gummi bears sweet souffle cheesecake lemon drops donut jujubes sesame snaps sweet. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy.</p>
                            </div>
                            <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="panel">
                <div class="panel-heading" role="tab" id="headingEight">
                  <h4 class="panel-title">
                    <a class="collapsed collaps-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      <h3><i class="fa fa-columns"></i>Lorem Ipsum</h3>
                    </a>
                  </h4>
                </div>
                <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                  <div class="panel-body" style="border-top: none;">
                        <div class="row" id="kn-1">
                            <div class="col-md-6">
                                <img class="img-responsive" src="http://placehold.it/750x350">
                            </div>
                            <div class="col-md-4">
                                <p>Candy liquorice tootsie roll. Jelly beans wafer marshmallow muffin dragee brownie brownie. Gummi bears sweet souffle cheesecake lemon drops donut jujubes sesame snaps sweet. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy. Macaroon chocolate cake chocolate cake chupa chups caramels cake wafer sweet roll. Sweet roll pudding cake. Jelly-o chocolate cake halvah cotton candy.</p>
                            </div>
                            <div class="col-md-2 issue-actions">
                               <a class="add-issue-list success-alert" href="#"><span>Add to list</span><i class="fa fa-th-list"></i></a>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
@stop