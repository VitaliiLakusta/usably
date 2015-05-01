
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
            value: 95,
            color: excellent,
            highlight: excellent_hover,
            label: "Learnability"
        },
        {
            value: 50,
            color: average,
            highlight: average_hover,
            label: "Efficiency"
        },
        {
            value: 66,
            color: normal,
            highlight: normal_hover,
            label: "Avoiding Mistakes"
        },
        {
            value: 40,
            color: average,
            highlight: average_hover,
            label: "Satisfaction"
        },
        {
            value: 100,
            color: excellent,
            highlight: excellent_hover,
            label: "Information Overload"
        },
        {
            value: 39,
            color: important,
            highlight: important_hover,
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
}

createLineChart();
createPolarChart();