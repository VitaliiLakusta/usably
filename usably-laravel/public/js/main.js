
Chart.defaults.global.responsive = true;

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
            color:"#C2D05B",
            highlight: "#C2D05B",
            label: "Learnability"
        },
        {
            value: 50,
            color: "#F4BE6B",
            highlight: "#F4BE6B",
            label: "Efficiency"
        },
        {
            value: 66,
            color: "#E1726D",
            highlight: "#E1726D",
            label: "Avoiding Mistakes"
        },
        {
            value: 40,
            color: "#64B4A8",
            highlight: "#64B4A8",
            label: "Satisfaction"
        },
        {
            value: 100,
            color: "#00A651",
            highlight: "#00A651",
            label: "Information Overload"
        },
        {
            value: 39,
            color: "#5894C7",
            highlight: "#5894C7",
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