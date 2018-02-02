/* global $ */



Function calcsub() {
    
    if(doument.getElementById("saleforce").checked) {
        argsubtotal = 100;
    }
    else {
    argsubtotal = 300;
    }
    
    dispaly(argsubtotal);
}


function display(parm1){
    
    document.getElementById("subtotal").value = parm1;
     document.getElementById("total").value = parm1;
     
     enablebtnproceed();
}

function enablebtnproceed(){
    $("#btnprocced")prop("disabled" , false);
}

function enablebtnproced(){
    $("#btnprocced")prop("disabled" , true);
}