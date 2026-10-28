async function buy(type){
  const resposta = await fetch("controllers/buy.php?type=" + type);
  const respostaTxt = await resposta.text();
  document.getElementById("message").innerHTML = respostaTxt;
}


function clearMessage(){

  document.getElementById("message").innerHTML="";
}

async function cart(){
  clearMessage();
  const resposta = await fetch("controllers/cart.php");
  const respostaTxt = await resposta.text();
  document.getElementById("message").innerHTML = respostaTxt;

}

/*===========================================*/

