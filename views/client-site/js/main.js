document.addEventListener("DOMContentLoaded", function () {

  let todos = document.getElementById("todos");
  let cine = document.getElementById("cine");
  let comedia = document.getElementById("comedia");
  let danza = document.getElementById("danza");
  let deportes = document.getElementById("deportes");
  let dibujo = document.getElementById("dibujo");
  let escultura = document.getElementById("escultura");
  let graficos = document.getElementById("graficos");
  let literatura = document.getElementById("literatura");
  let musica = document.getElementById("musica");
  let teatro = document.getElementById("teatro");
  
  switch (window.location.hash){
    case "#todos":
        // No pasa nada ya que el default es todos
      break;
    case "#cine":
      setTimeout(function(){
        cine.click();
      }, 200);
      break;
    case "#comedia":
      setTimeout(function(){
        comedia.click();
      }, 200);
      break;
    case "#danza":
      setTimeout(function(){
        danza.click();
      }, 200);
      break;
    case "#deportes":
      setTimeout(function(){
        deportes.click();
      }, 200);
      break;
    case "#dibujo":
      setTimeout(function(){
        dibujo.click();
      }, 200);
      break;
    case "#escultura":
      setTimeout(function(){
        escultura.click();
      }, 200);
      break;
    case "#graficos":
      setTimeout(function(){
        graficos.click();
      }, 200);
      break;
    case "#literatura":
      setTimeout(function(){
        literatura.click();
      }, 200);
      break;
    case "#musica":
      setTimeout(function(){
        musica.click();
      }, 200);
      break;
    case "#teatro":
      setTimeout(function(){
        teatro.click();
      }, 200);
      break;
  }

});
