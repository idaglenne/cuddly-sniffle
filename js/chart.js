$(document).ready(function(){

    $.ajax({
        url: "http://localhost/Group7/GitHub_Ida/cuddly-sniffle/logdata.php",
        type: "GET",
        success: function(data){
            console.log(data);

            var mood = {
                rating: [],
                logDate: []
            };

            var len = data.length;

            console.log(data.length);

            //Om mindre än 7 inlägg
            if (len < 8){

                for (var i = 0; i < len; i++){

                console.log(data[i]);
                mood.rating.push(data[i].rating);
                mood.logDate.push(data[i].logDate);
                }
            }
            //Om fler än 7 inlägg
            else if(len > 7) {
                for (var i = 0; i < 7; i++){

               // console.log(data[i]);
                mood.rating.push(data[i].rating);
                mood.logDate.push(data[i].logDate);
            }

            }
            

            console.log(mood);

           var ctx = $("#line_chart");

                var data= {
                    labels: mood.logDate,
                    datasets: [{
                        label: "Mood rating", 
                        data: mood.rating,
                        backgroundcolor: "#FEDCD2",
                        borderColor: "#4A8DAC",
                        fill: true,
                        lineTension: 0.4,
                        pointRadius: 3

                    }
                    //,
                    //{
                    //  label: "Fysiska symptom",
                    //   data: mood.symptoms,
                    //  backgroundcolor: "black",
                    // borderColor: "black",
                    //  fill: false,
                    //  lineTension: 0.5,
                    //  pointRadius: 3

                //  }
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
                fontColor: "#4A8DAC"

            },
            legend: {
                display: true,
                position: "bottom"

            },

            scales: {
                yAxes: [{
                    ticks: {
                        max: 7,
                        min: 0,
                        stepSize: 1
                    }

            }]}
        
    };

    var chart = new Chart(ctx, {
        type: "line",
        data: data,
        options: options,
    });
    },
        error: function (data) {
            console.log(data);
        }

    });
});