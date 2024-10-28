function ejecutar(){
  var valor = document.getElementById("valor").value;
  var valor = document.getElementById("valor").value;
  var div_elementos = document.getElementById("elementos");

  for(let i=1; i<=valor; i++){
    div_elementos.innerHTML += "<p>"+ i + "<p>";
  }
}