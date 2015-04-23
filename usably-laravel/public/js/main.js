
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

    var myLineChart = new Chart(ctxLine).Line(dataLine, {
        onAnimationComplete: function() {
            $(".youtube-video").fadeIn("fast");
            createBarChart();
        }
    });
}

function createPolarChart() {
    var ctxTotalURate = $("#indicators-chart").get(0).getContext("2d");

    var dataPolar = [
        {
            value: 300,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Easy to use"
        },
        {
            value: 50,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Intuitive"
        },
        {
            value: 100,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Credible"
        },
        {
            value: 40,
            color: "#949FB1",
            highlight: "#A8B3C5",
            label: "Trustable"
        },
        {
            value: 120,
            color: "#4D5360",
            highlight: "#616774",
            label: "Fast"
        }

    ];

    var myPolarChart = new Chart(ctxTotalURate).PolarArea(dataPolar, {
        animation: true,
        onAnimationComplete : function() {
        }
    });
}

createLineChart();
createPolarChart();