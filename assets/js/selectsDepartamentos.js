'use strict'
$(document).ready(function(){
    $.ajax({
        // la URL para la petición
        url : "../ajax/verDepartamentos.php",
    
        // código a ejecutar si la petición es satisfactoria;
        // la respuesta es pasada como argumento a la función
        success : function(json) {
            
            let objetoDepartamentos= JSON.parse(json);
            let divDepartamentos=$("#departamento");
            for(var i=0;i<objetoDepartamentos.length;i++){
            
                divDepartamentos.append(`<option value='${objetoDepartamentos[i]}' class='option'>${objetoDepartamentos[i]}</option>`);
            }
  
        },
    
      
    });
});