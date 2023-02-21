function almacenar(){
    const tarifa = 3500;
    let viajes = parseInt(document.getElementById("viajes").value);
    document.getElementById("respuesta").innerHTML = ( "El total sería: " + (tarifa*viajes) + " $");

}

function calcular(){
    let numero = parseInt(document.getElementById("numero").value);
    
    if (numero >= 0){
      document.getElementById("resultado").innerHTML = "El número es positivo";
    }else{
        document.getElementById("resultado").innerHTML = "EL número es negativo";
      }
}

function calculararea(){
      
    
  }



