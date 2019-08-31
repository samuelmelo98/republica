function validar(){
   var deleta = document.forms["editar"]["editar"].value; 
 var confirmar = confirm("Deseja realmente atualizar? ");
    if(!confirmar){
    window.location.href = "index.php";//redireciona a pagina.
    return false;
    
}
}


