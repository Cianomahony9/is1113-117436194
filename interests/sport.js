
function slide(){
    //declaring the button allows for the button to be disabled before the "Gaa" button is clicked//
    var button = document.getElementById("btn2");
    button.disabled=true;
    document.getElementById("rugby").style.position ="absolute";
    document.getElementById("rugby").style.left ="100%";
    document.getElementById("GAA").style.left ="30%";
     document.getElementById("Australian").style.left ="-30%";
    button.disabled = !button.disabled;
    
}


function slide2(){
    document.getElementById("GAA").style.position ="absolute";
    document.getElementById("GAA").style.left ="100%";
    document.getElementById("Australian").style.left ="30%";
   //function brings photo from the left hand side to the centre of the page//
}