<?php
 require_once 'conexao.php';
       if(isset($_GET['id'])=="id"){
           try {
               
            $nome = $_GET['nome'];
            $endereco = $_GET['endereco'];
            $id = $_GET['id'];
            $sql ="DELETE FROM republica ";
            //$sql.="set Nome='{$nome}',Endereco='{$endereco}' ";
            $sql.="WHERE idRep='{$id}' ";
            $stmt=Conexao::getConexao()->prepare($sql);
            $stmt->execute();
            $edit="Apagado com Sucesso!";
            echo "<script>alert('Apagado com Sucesso!')</script>";
            header("refresh:0;URL=index.php");
               
           } catch (Exception $ex) {
               echo "Algo deu errado !";
               $edit="Erro ao tentar atualizar dados!";
           }
            
        }