let total;

function recibir(){
        let tipo=document.getElementById("inputState1").value;
        let cantidad=Number(document.getElementById("cantidad").value);
        if (cantidad>0){
                if(Number.isInteger(cantidad)){

                        switch (tipo) {
                                case "1":
                                        total=200*cantidad*0.2;
                                        break;
                                case "2":
                                        total=200*cantidad*0.5;
                                        break;
                                case "3":
                                        total=200*cantidad*0.75;
                                        break;
                        }

                }else{
                        total=0;
                        document.getElementById("cantidad").value=0;
                        alert("Ingrese una cantidad entera");
                }
        }else{
                        total=0;
                        document.getElementById("cantidad").value=0;
                        alert("Ingrese una cantidad mayor o igual 1");   
                }

document.getElementById("total").innerHTML=total;
}

function borrar(){
        document.getElementById("total").innerHTML=0; 
}



