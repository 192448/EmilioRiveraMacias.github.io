

function getText(){
    // read text from URL location
    var request = new XMLHttpRequest();

    request.open('GET', 'http://ingenierias-iberopuebla.mx/co2/co2_0002/dato.txt', true);
    request.responseType='text';


    request.onload = function () {
        
        if(request.readyState==request.DONE){
            if(request.status== 200){
    
            }
        }
    };

    request.send(null);
}

function Mi_primer_funcion(){
    
    var outer_text = getText();
    document.getElementById("etiqueta_p").innerHTML=outer_text; 
   // window.alert("Funciona JS");

}