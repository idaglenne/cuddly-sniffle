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

            for (var i = 0; i < len; i++){

                console.log(data[i]);
                mood.rating.push(data[i].rating);
                mood.logDate.push(data[i].logDate);
                
            }

            console.log(mood);

           var ctx = $("#line_chart");
    var data= {
        labels: mood.logDate,
        datasets: [{
            label: "Mood rating",
            data: mood.rating,
            backgroundcolor: "#F8B195",
            borderColor: "#F8B195",
            fill: false,
            lineTension: 0.5,
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
            fontColor: "#75C2F6"

        },
        legend: {
            display: true,
            position: "bottom"

        }

    }

    var chart = new Chart(ctx, {
        type: "line",
        data: data,
        options: options
            });

        },
        error: function (data) {
            console.log(data);
        }

    });


    //hämta canvas
   
});