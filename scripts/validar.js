

let formulario=document.getElementById('formulario');
    

    formulario.addEventListener('submit',function(e){
        
        vnombre=document.getElementById('nombre').value;
        vapellido=document.getElementById('apellido').value;
        vemail=document.getElementById('email').value;
        vtelefono=document.getElementById('telefono').value;
        vdni=document.getElementById('dni').value;
        
        e.preventDefault();


//Validar NOMBRE y APELLIDO- Sólo letras y espacios pattern 1
function validacion(variable){
    let patron=/^[a-zA-Z\s]+$/;
    if(variable.search(patron)){
        swal('Ingrese sólo letras en apellido y nombre');
        }else if(variable.length>23){
        swal('Debe reducir la cantidad de letras');
    }else{
        return true;
    }
}

// function validacion2(variable){
//     if(variable.length>23){
//         swal('Debe reducir la cantidad de caracteres en nombre y apellido');
//     }
//     else{
//         return true;
//     }
// }

//validar teléfono

function validacion5(variable){
    let patron2=/^[0-9,.]*$/;
    if(variable.search(patron2)){
        swal('Ingrese solo números en campo teléfono');
    }
    else{
        return true;
    }
}

//Validar D.N.I. Sólo números y puntos pattern 2

function validacion3(variable){
    let patron2=/^[0-9,.]*$/;
    if(variable.search(patron2)){
        swal('Ingrese sólo numeros y puntos en D.N.I');
        }else if(variable.length>12){
            swal('Debe reducir la cantidad de caracteres en D.N.I');
    }else{
        return true;
    }
}


//Validar email. Estructura nombre usuario+@+servidor+dominio


function validacion4(variable){
    let patron3=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
    if(!patron3.exec(variable)){
        swal(`ingrese una letra o nùmero primero, dominio y servidor`);
        }else if(variable.length>23){
        swal('Debe reducir la cantidad de caracteres en correo');
    }else{
        return true;
    }

}

//Validación de todo para que acepte a la base los datos

let confirma1=validacion(vnombre);
let confirma2=validacion(vapellido);
let confirma3=validacion4(vemail);
let confirma4=validacion5(vtelefono);
let confirma5=validacion3(vdni);

if(confirma1&&confirma2&&confirma3&&confirma4&&confirma5){
        formulario.submit();
}

})

