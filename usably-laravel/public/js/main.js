
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

createLineChart();