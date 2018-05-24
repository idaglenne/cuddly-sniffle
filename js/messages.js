// dagens datum
//var today = new Date();
//var dd = today.getDate();
//var mm = today.getMonth()+1; //January is 0!
//var yyyy = today.getFullYear();
//today = dd + '/' + mm + '/' + yyyy;
//document.write(today);


var day = new Date();
var dayNumber = day.getDay();

var moodRating; //hämtas??


if (dayNumber == 4) {
    if (moodRating < 10){
        //kod för meddelande 1
    }
    if ((moodRating >= 11) || (moodRating =< 20))
    {
        //kod för meddelande 2
    }
    if ((moodRating >= 21) || (moodRating =< 30))
    {
        //kod för meddelande 3
    }
    if (moodRating > 30)
    {
        //kod för meddelande 4
    }
} 