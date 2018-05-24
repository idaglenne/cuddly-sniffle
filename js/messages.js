// dagens datum
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();


var d = new Date();
var dayOfWeek = d.getDay();

//var moodRating ska tas från logdata.js 

if (dayOfWeek == 4) {
    if (moodRating < 10) {
        //”Kanske känner du någon som mådde väldigt dåligt under en period men som nu mår bättre? Kolla fliken för kontakter och hitta den som passar dig bäst.”
    }
    if ((moodRating =< 11) || (moodRating =< 25)) {
        //“Känner du dig nere? Du vet väl att du kan vända dig till dessa stödkontakter om du behöver prata med någon.”
    }
    if ((moodRating =< 26) || (moodRating =< 39)) {
        //“Det verkar som att du mått dåligt ett tag. Här kommer några vårdgivare som du kan vända dig till för att få hjälp.”   
    }
    if (moodRating > 40) {
        //“Det verkar som att du har mått bra flera dagar i rad. Vad härligt! Har du gjort något särskilt under de senaste dagarna som påverkat dig positivt?”
    }
}




