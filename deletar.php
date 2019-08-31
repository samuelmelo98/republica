<!DOCTYPE html>
<?php

require_once 'conexao.php';
   if(isset($_GET["codigo"])){
            $id = $_GET['codigo'];
           
            $sql ="SELECT * FROM republica where idRep='{$id}'";
            
           
            $stmt=Conexao::getConexao()->query($sql);
            $stmt->execute();
            while($resultado=$stmt->fetch(PDO::FETCH_ASSOC)){
            
            $nome = $resultado['Nome'];
            $endereco = $resultado['Endereco'];
            $id=$resultado['idRep'];
            }
            
        }       
        ?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
        <style>
            input,label{
                text-height: 3%;
                margin-left: 33%;
                text-align: 40%;
                height: 30%;
                width: 35%;
                margin-bottom:3%;
                margin-top: 1%;
                height:30px;
                
            }
            button{
                margin-left: 33%;
                margin-right: -30%;
                // float:left;
                 height:50px;
                 width: 10%;
                 text-align:center;
                 width: inherit;
                 
                 
            }
                 h1{
                     margin-bottom:5%;
                 }
                 a{
                    text-decoration: none;
                    color: black;
                    width: 7%;
                    width: inherit;
                    
               
                 }
                 h5{
                     margin-left: 33%;
                 }
        </style>
        <script src="deletar.js"></script>
    </head>
    <body>
        <div>
            <hr><h1 style="text-align: center"><strong>Universidade-República:Excluir</strong></h1><hr>
            <a href="index.php"><button style="margin-right:32%;float:right;">Home</button></a>
            <h5>ID:<?php echo $id?></h5>
            <form name="deletar" method="get"action="deletar_control.php" onsubmit="return validar()">
               
                <tr>
                    <td><label>Nome da República:</label></td>
                    <br>
                    <td><input type="text" name="nome" size="50" value="<?php echo$nome?>" readonly=""</td>
                </tr>
                <br>
                 <tr>
                    <td><label>Enderenço:</label></td>
                 <br>
                 <td><input type="text" name="endereco" size="50" value="<?php echo $endereco;?>" readonly=""></td>
                </tr>
                <input type="hidden" name="id" value="<?php echo "$id";?>">
                <br>
                <tr>
                    <td><button type="submit"name="deletar" value="deletar" onclick="addRepublica()">Apagar</button></td>
                    <td><button disabled=""><a href="index.php">Cancelar</button></a></td>
               
                </tr>
                
            </form>
      </div>
        
            
    </body>
  
   </html>
