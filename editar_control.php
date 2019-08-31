<?php
require_once 'conexao.php';//Faz conexão com a base de dados!

$nome =trim(filter_input(INPUT_GET,'nome',FILTER_SANITIZE_STRING));
$endereco = trim(filter_input(INPUT_GET,'endereco',FILTER_SANITIZE_STRING));
    
  
        
    
     if($nome==""||$endereco==""||strlen($nome)<5||strlen($endereco)<5){
         echo "<script>alert('Não foi possivel atualizar seus dados!"
         . "Texto muito curto,minimo 5 caracteres')</script>";
         header("refresh:0;URL=index.php");
         exit();
        
     }

if(isset($_GET['editar'])=="editar"){
           try {
               
            $nome = $_GET['nome'];
            $endereco = $_GET['endereco'];
            $id = $_GET['id'];
            $sql ="UPDATE republica ";
            $sql.="set Nome='{$nome}',Endereco='{$endereco}' ";
            $sql.="WHERE idRep='{$id}' ";
            $stmt=Conexao::getConexao()->prepare($sql);
            $stmt->execute();
            $edit="Atualizado com Sucesso!";
            echo "<script>alert('Atualizado com Sucesso!')</script>";
            header("refresh:0;URL=index.php");
               
           } catch (Exception $ex) {
               echo "Algo deu errado !";
               $edit="Erro ao tentar atualizar dados!";
           }
            
        }



