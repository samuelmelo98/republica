<!DOCTYPE html>
<?php
require_once 'conexao.php';

    try{
        $sql    = "SELECT * FROM republica";
        $stmt   = Conexao::getConexao()->query($sql);
        $stmt->execute();
      //  while($resultado=$stmt->fetch(PDO::FETCH_ASSOC)){
      //      echo"<br>"."-";
      //      echo $resultado['idRep'];
      //      echo $resultado['Nome'];
            
       // }
    } catch (Exception $ex) {
        echo "ERRO AO CONECTAR!".$ex;
    }





?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>
        <style>
            table{
                width: 100%;
                text-align: center;
                font-family:sans-serif,arial;
                margin:10px;
            }
            table,th,td{
                border:1px solid black;
                border-collapse: collapse;
                text-align: center;
                alignment-adjust: central;
            }
                th, td{
                    padding: 7px;
                    
                }
                tr:nth-child(odd){
                    background-color: #dddddd;
                }
                button{
                    width: 35%;
                    height: 40px;
                    margin-left:10%;
                    width:inherit;
                    
                }
                div{
                    margin: 0 auto;
                    width: 80%;
                }
                h1{
                    text-align: center;
                    font-family:sans-serif,arial;
                    
                    
                                  }
                #cadastrar{
                    margin-left:86%;
                    width: 15%;
                   // width: auto;
                }
        </style>
    </head>
    <body>
        <div>
            
            <h1><strong>Universidade-República</strong></h1>
            
            <a href="cadastrar.php"><button id="cadastrar"><strong>+ Cadastrar</strong></button></a>
            <table>
                <tr>
                    <th>ID</th>
                    <th>República</th>
                    <th>Endereço</th>
                    <th>Ações</th>
                </tr>
                <?php
                
                while($resultado=$stmt->fetch(PDO::FETCH_ASSOC)){
                    
                
                
                ?>
                <tr>
                    <td><?php echo $resultado['idRep'];?></td>
                    <td><?php echo $resultado['Nome'];?></td>
                    <td><?php echo $resultado['Endereco'];?></td>
                    <td><a href="editar.php?codigo=<?php echo $resultado['idRep'];?>"><button id="editar">Editar </button></a>
                        <a href="deletar.php?codigo=<?php echo $resultado['idRep'];?>"><button id="excluir">Excluir</button></a>
                    </td>
                    
                    
                </tr>
                
                <?php
                }
                ?>
            </table>
            <a href="cadastrar.php"><button id="cadastrar"><strong>+ Cadastrar</strong></button></a>
        </div>
       
    </body>
</html>
