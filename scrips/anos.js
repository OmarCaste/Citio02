function anos(){
    var valor1 = document.getElementById("anoI").value;
    var valor2 = document.getElementById("anoF").value;
    var div_elementos = document.getElementById("elementos");
    div_elementos.innerHTML="";
    
    for(let i= valor1; i<=valor2; i++){
       if(i%4==0){
        div_elementos.innerHTML += "<p class = 'otrocolor'>"+ i + "<p>";
       }
       else{
        div_elementos.innerHTML += "<p>"+ i + "<p>";
       }
       

    }

  }
  function edad(){
    var valor1 = document.getElementById("anoI").value;
    var valor2 = document.getElementById("anoF").value;
    
    var result = parseFloat(valor2)-parseFloat(valor1);

    if(result >= 18){
        document.getElementById("edad").innerText = "Eres mayor de edad: "+ result;
    }
    else{
        document.getElementById("edad").innerText = "Eres menor de edad: "+ result;
    }
  }