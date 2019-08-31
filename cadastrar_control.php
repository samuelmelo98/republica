<?php
require_once 'conexao.php';
if(!isset($_GET)||empty($_GET)){
 echo "Não ouve postagem via formulario!";
}
else
{
    // if(!filter_var($nome,FILTER_VALIDATE_EMAIL)){
   //     echo "Não é um email valido!";
   // }
    $nome =trim(filter_input(INPUT_GET,'nome',FILTER_SANITIZE_STRING));
    $endereco = trim(filter_input(INPUT_GET,'endereco',FILTER_SANITIZE_STRING));
    
  
        
    
     if($nome==""||$endereco==""||strlen($nome)<5||strlen($endereco)<5){
         echo "<script>alert('Não foi possivel cadastrar seus dados!"
         . "Texto muito curto,minimo 5 caracteres')</script>";
         header("refresh:0;URL=index.php");
         exit();
        
     }
            $add=addRepublica($nome, $endereco);
}
 

//echo isset($_GET['endereco']);
function addRepublica($parametro1,$parametro2){
        try{
            $sql = "INSERT INTO republica VALUES(?,?,?)";
            $stmt= Conexao::getConexao()->prepare($sql);
            $stmt-> bindValue(1,NULL);
            $stmt-> bindValue(2,$parametro1);
            $stmt-> bindValue(3,$parametro2);
         
            $stmt-> execute();
           header("refresh:0;URL=index.php"); 
           return 'Cadastrado com Sucesso!';
          
           
                  } catch (Exception $ex) {
             if($ex->errorInfo[1]==1062){
                header("refresh:0;URL=index.php"); 
        return'Já Cadastrado!';
    }else{
        return'Erro ao Cadastrar!'.$ex;
    }
           
        }
    }
    
echo "<script>";
if($add!=""){
    echo "alert('$add')";
}

echo"</script>";
        
     
    

