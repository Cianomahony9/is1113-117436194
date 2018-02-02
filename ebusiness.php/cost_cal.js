/* global */



Function calcsub(){
    
    if(doument.getElementarybyid("saleforce").checked) {
        argsubtotal = 100;
    }
    else
    argsubtotal = 300;
    dispaly(argsybtotal);
}


function display(parst){
    
    document.getElementById("subtotal").value =parm1;
     document.getElementById("total").value =parm1;
     
     enablebtnprocced();
}

function enablebtnprocced(){
    $("btnprocced")prop("disabled" , false);
}

function enablebtnprocced(){
    $("btnprocced")prop("disabled" , true);
}