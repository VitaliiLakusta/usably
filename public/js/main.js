
Chart.defaults.global.responsive = true;



/* PRIORITIES */
var critical = "#d75452";
var important = "#f5971f";
var average = "#f7cc38";
var normal = "#acc11e";
var excellent = "#5fb760";

var critical_hover = "#C72C29";
var important_hover = "#E58C1A";
var average_hover = "#E8BB20";
var normal_hover = "#A3B813";
var excellent_hover = "#52A153";

var learnability_value = 36;
var efficiency_value = 18;
var avoiding_value = 70;
var satisfaction_value = 78;
var information_value = 84;
var goal_value = 80;

// var learnability_value = 100;
// var efficiency_value = 100;
// var avoiding_value = 100;
// var satisfaction_value = 100;
// var information_value = 100;
// var goal_value = 100;



/* create a line chart */
// get canvas context
function createLineChart() {

    var ctxLine = $("#lineChart1").get(0).getContext("2d");

    var dataLine = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September"],
        datasets: [
            //{
            //    label: "My First dataset",
            //    fillColor: "rgba(220,220,220,0.2)",
            //    strokeColor: "rgba(220,220,220,1)",
            //    pointColor: "rgba(220,220,220,1)",
            //    pointStrokeColor: "#fff",
            //    pointHighlightFill: "#fff",
            //    pointHighlightStroke: "rgba(220,220,220,1)",
            //    data: [65, 59, 80, 81]
            //},
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 30, 28, 45, 47, 48, 50, 49, 60]
            }
        ]
    };

    var myLineChart = new Chart(ctxLine).Line(dataLine);
}
 

function createPolarChart() {
    var ctxTotalURate = $("#indicators-chart").get(0).getContext("2d");
    var dataPolar = [
        {
            value: learnability_value,
            color: important,
            highlight: important_hover,
            label: "Learnability"
        },
        {
            value: efficiency_value,
            color: critical,
            highlight: critical_hover,
            label: "Efficiency"
        },
        {
            value: avoiding_value,
            color: normal,
            highlight: normal_hover,
            label: "Avoiding Mistakes"
        },
        {
            value: satisfaction_value,
            color: normal,
            highlight: normal_hover,
            label: "Satisfaction"
        },
        {
            value: information_value,
            color: excellent,
            highlight: excellent_hover,
            label: "Information Overload"
        },
        {
            value: goal_value,
            color: excellent,
            highlight: excellent_hover,
            label: "Goal Orientation Rate"
        }
    ];


    var myPolarChart = new Chart(ctxTotalURate).PolarArea(dataPolar, {
        animation: true,
        scaleShowLine: true,
        animateScale : true,
        animationSteps : 90,
        animationEasing: "easeOutQuart",
        onAnimationComplete : function() {
        }
    });
    $("#indicators-chart").click( 
            function(evt){
                var activePoints = myPolarChart.getSegmentsAtEvent(evt);
                var url = "/indicators/efficiency?indicator=" + activePoints[0].label + "&value=" + activePoints[0].value;
                window.location.href= url;
            }
        );


       
}

var chart_labels =  "<div onClick=\"location.href='/indicators/efficiency?indicator=Learnability&value=" + learnability_value + "'\" class='chart-label' style='top:-228px;left:-82px;float:right;color:"+important+"'>" + learnability_value + "<small>Learnability</small></div>"+
                    "<div onClick=\"location.href='/indicators/efficiency?indicator=Efficiency&value=" + efficiency_value + "'\" class='chart-label' style='float: right;top: -132px;left: 10px;color:"+critical+"'>" + efficiency_value + "<small>Efficiency</small></div>"+
                    "<div onClick=\"location.href='/indicators/efficiency?indicator=Avoiding Mistakes&value=" + avoiding_value + "'\" class='chart-label' style='float: right;left: 45px;top: -21px;color:"+normal+"'>" + avoiding_value + "<small>Avoiding Mistakes</small></div>"+
                    "<div onClick=\"location.href='/indicators/efficiency?indicator=Satisfaction&value=" + satisfaction_value + "'\" class='chart-label' style='float: right;top: -21px;left: -34px;color:"+normal+"'>" + satisfaction_value + "<small>Satisfaction</small></div>"+
                    "<div onClick=\"location.href='/indicators/efficiency?indicator=Information Overload&value=" + information_value + "'\" class='chart-label' style='float: right;top: -130px;left: -38px;color:"+excellent+"'>" + information_value + "<small>Information<br />Overload</small></div>"+
                    "<div onClick=\"location.href='/indicators/efficiency?indicator=Goal Orientation Rate&value=" + goal_value + "'\" class='chart-label' style='float: right;top: -228px;left: 82px;color:"+excellent+"'>" + goal_value + "<small style='left:-25px'>Goal Orientation<br />Rate</small></div>";

createLineChart();
createPolarChart();
$('.canvas-holder').append(chart_labels);
   