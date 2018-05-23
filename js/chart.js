$(document).ready(function(){

    //hämta canvas
    var ctx = $("#line_chart");
    var data= {
        labels: ["Mån", "Tis", "Ons", "Tors", "Fre", "Lör", "Sön"],
        datasets: [{
            label: "Mood rating",
            data: [5, 7, 2, 4, 3, 3, 5],
            backgroundcolor: "#F8B195",
            borderColor: "#F8B195",
            fill: false,
            lineTension: 0.5,
            pointRadius: 3


        },
        {
            label: "Fysiska symptom",
            data: [1, 3, 2, 1, 0, 3, 2],
            backgroundcolor: "black",
            borderColor: "black",
            fill: false,
            lineTension: 0.5,
            pointRadius: 3


        }
        ]
    };
    var options = {
        title: {
            display: true,
            position: "top",
            text: "Din mood log",
            fontFamily: "Montserrat",
            fontWeight: "lighter",
            fontSize: 25,
            fontColor: "#75C2F6"

        }

    }
    var chart = new Chart(ctx, {
        type: "line",
        data: data,
        options: options
            });

});