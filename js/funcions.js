//From p3-s
async function carregaMencions(){
    //completa
    //step 0: get the degree selected by the user
    const degree = document.getElementById("graus").value

    //step 1: AJAX request 
    const result = await fetch("mencions.php?grau=" + degree)

    //step 2: wait the AJAX response (mentions options)
    const options = await result.text()

    //step 3: update the mentions select tag with the new options
    document.getElementById("mencions").innerHTML = options
}

//Let's do the same as carregaMencions but using the JQuery library
$(document).ready(function(){
    //completa
});
