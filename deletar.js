function validar(){
   var deleta = document.forms["deletar"]["deletar"].value; 
 var confirmar = confirm("Deseja realmente apagar? ");
    if(!confirmar){
    window.location.href = "index.php";//redireciona a pagina.
    return false;
    
}
}


