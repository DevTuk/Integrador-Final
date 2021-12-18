
    

    function validarNombre(nombre){
                    
        var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;
        mostrarValidacion('#nombre',formato.test(nombre));
    }

    function validarApellido(apellido){
                    
        var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;
        mostrarValidacion('#apellido',formato.test(apellido));
    }


    function validarDni(dni){
                    
        var formato =/^[0-9]{8,10}$/;      
        mostrarValidacion('#dni',formato.test(dni));    
    }

    function validarTelefono(telefono){
                    
        var formato =/^[0-9]{5,15}$/;      
        mostrarValidacion('#telefono',formato.test(telefono));    
    }

    function validarEmail(email){
                    
        var formato =/^[a-zA-Z]+([\.]?[a-zA-Z0-9_-]+)*@[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,4}$/      
        mostrarValidacion('#email',formato.test(email));    
    }

    function validarPassword(password){

        function condicion(password){
  
            if (password.length>15&&password.length<8){
                swal('Ingrese menos de 15 caracteres y mas de 8');
                }else if(!password.match(/[A-z]/)){
                    swal('Ingrese al menos una letra');
                    }else if(!password.match(/[A-Z]/)){
                        swal('Ingrese al menos una mayúscula');
                        }else if(!password.match(/\d/)){
                            swal('Ingrese al menos un número');
            }else{
                return true;
            }

        }
                    
        mostrarValidacion('#contraseña',condicion(password));    
    }


    function mostrarValidacion(nombreCampo,valido){
        if (valido){
            $(document).ready(function(){
                $(nombreCampo).css('color', 'Black');
                $(nombreCampo).css('border','1px solid #b8e994');
                $(nombreCampo).css('box-shadow','0 0 2px 1px #78e08f');    
            });
        } else {
            $(document).ready(function(){
                $(nombreCampo).css('color', '#ff5252');
                $(nombreCampo).css('border','1px solid #ff5252');
                $(nombreCampo).css('box-shadow','0 0 2px 1px #ff5252');
            }); 
        }
    }
    

    


    
    
    
    let formulario=document.getElementById('formulario');

    
    formulario.addEventListener('submit',function(e){


        e.preventDefault();


        let email=document.getElementById('email').value;
        let nombre=document.getElementById('nombre').value;
        let apellido=document.getElementById('apellido').value;
        let dni=document.getElementById('dni').value;
        let telefono=document.getElementById('telefono').value;
        let password=document.getElementById('contraseña').value;

        
        function validarNombre(nombre){
                    
            var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;

            if (formato.test(nombre)){
                return true;
            }else{
                swal('Ingrese caracteres correctos en el nombre')
            }
            
        }

        validar1=validarNombre(nombre);


        function validarNombre(apellido){
                    
            var formato = /^[a-zA-Z áéíóúüÁÉÍÓÜÚ]{3,15}$/;

            if (formato.test(apellido)){
                return true;
            }else{
                swal('Ingrese caracteres correctos en el apellido')
            }
            
        }

        validar2=validarNombre(apellido);
        



        function validarDni(dni){

            var formato = /^[0-9]{8,10}$/;
                    
            if (formato.test(dni)){
                return true;
            }else{
                swal('Ingrese caracteres correctos en el D.N.I')
            }
              
                }

        validar3=validarDni(dni);





        function validarTelefono(telefono){

            var formato = /^[0-9]{5,15}$/;
        
            if (formato.test(telefono)) {
                return true;
            }else{
                swal('Ingrese caracteres correctos en el telefono')
            }

        }

        validar4=validarTelefono(telefono);
        
        
        function validarEmail(email){
                    
                    var formato = /^[a-zA-Z]+([\.]?[a-zA-Z0-9_-]+)*@[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,4}$/;
                    if (formato.test(email)) {
                        return true;
                    }else{
                        swal('Ingrese caracteres correctos en el mail')
                    }
                    
                }

        validar5=validarEmail(email);

        function validarPassword(password){
  
                    if (password.length>15&&password.length<8){
                        swal('Ingrese menos de 15 caracteres y mas de 8');
                        }else if(!password.match(/[A-z]/)){
                            swal('Ingrese al menos una letra');
                            }else if(!password.match(/[A-Z]/)){
                                swal('Ingrese al menos una mayúscula');
                                }else if(!password.match(/\d/)){
                                    swal('Ingrese al menos un número');
                    }else{
                        return true;
                    }

                }

        validar6=validarPassword(password);


        

        if (validar1&&validar2&&validar3&&validar4&&validar5&&validar6) {
            formulario.submit();
        }

    })

    
    

             

               
       


                
                
                
          

               

