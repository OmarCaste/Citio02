//console.log("Hellow, World")

function sumar(){
   var valor1= document.getElementById("valor1").value;
   var valor2= document.getElementById("valor2").value;

   var result = parseFloat(valor1)+parseFloat(valor2);

   document.getElementById("resultado").innerText = "El resultado de la suma es: "+result;
}
function resta(){
   var valor1= document.getElementById("valor1").value;
   var valor2= document.getElementById("valor2").value;

   
   var result2 = parseFloat(valor1)-parseFloat(valor2);
   
   document.getElementById("resultado2").innerText = "El resultado de la resta es: "+result2;
}
function dividir(){
   var valor1= document.getElementById("valor1").value;
   var valor2= document.getElementById("valor2").value;

   
   var result3 = parseFloat(valor1)/parseFloat(valor2);
   
   document.getElementById("resultado3").innerText = "El resultado de la division es: "+result3;
}
function multiplicar(){
   var valor1= document.getElementById("valor1").value;
   var valor2= document.getElementById("valor2").value;

   var result4 = parseFloat(valor1)*parseFloat(valor2);
   document.getElementById("resultado4").innerText = "El resultado de la multiplicacion es: "+result4;
}