function validar(){
    var nome = document.forms["cadastro"]["nome"].value;
     var endereco = document.forms["cadastro"]["endereco"].value;
     
    if(nome==""||endereco==""){
        document.getElementById("mensagem").style.backgroundColor = "red";
        mensagem.innerHTML="Preencha todos os campos!";
        document.getElementById("nome").placeholder="Preencha esse campo";
        document.getElementById("nome").style.borderColor="red";
        document.getElementById("endereco").placeholder="Preencha esse campo";
        document.getElementById("endereco").style.borderColor="red";
       return false; 
     
    }
   
   
   
    
}
function limpar(){
    
    mensagem.innerHTML = "";
    document.getElementById("mensagem").style.backgroundColor = "white";
    document.getElementById("nome").placeholder="Nome República";
    document.getElementById("endereco").placeholder="Endereço";  
    document.getElementById("nome").style.borderColor="#ccc";
    document.getElementById("endereco").style.borderColor="#ccc";
   
}
