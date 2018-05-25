

// Get the modal
//var modal = document.getElementById('myModal');

// Get the button that opens the modal
//var btn = document.getElementById("mButton");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("closeMessage")[0];

// When the user clicks the button, open the modal 
//btn.onclick = function() {
//    modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
//    modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
//window.onclick = function(event) {
//    if (event.target == modal) {
//        modal.style.display = "none";
//    }
//}










if (dayOfWeek == 4) {
    if (todaysMood < 2) {
        //”Kanske känner du någon som mådde väldigt dåligt under en period men som nu mår bättre? Kolla fliken för kontakter och hitta den som passar dig bäst.”)
    }
    if ((moodRating >= 2) || (moodRating =< 3)) {
        //“Känner du dig nere? Du vet väl att du kan vända dig till dessa stödkontakter om du behöver prata med någon.”
    }
    if ((moodRating >= 4) || (moodRating =< 5)) {
        //“Det verkar som att du mått dåligt ett tag. Här kommer några vårdgivare som du kan vända dig till för att få hjälp.”   
    }
    if (moodRating >= 6) {
        //“Det verkar som att du har mått bra flera dagar i rad. Vad härligt! Har du gjort något särskilt under de senaste dagarna som påverkat dig positivt?”
    }
}




