$( document ).ready(function() {
    $("#departamento").on('change',function(){
        $("#ciudad").empty();
        $("#ciudad").append('<option selected disabled>Seleccione ciudad</option>');
        var nombre_departamento=$("#departamento").val();
        console.log(nombre_departamento);
        $.ajax({        
            url: "../ajax/consultaIdDepartamento.php",
            method:'POST',
            data: { departamento: nombre_departamento },
        
            success:function(stringZonas) {   
                let objetoCiudad= JSON.parse(stringZonas);
                let divCiudad=$("#ciudad");
                console.log("Esto es lo que esta llegando:"+objetoCiudad);

                for(i=0;i<objetoCiudad.length;i++){
                
                divCiudad.append(`<option value='${objetoCiudad[i]}' class='option'>${objetoCiudad[i]}</option>`);
            }
        }          
        });
    });
});