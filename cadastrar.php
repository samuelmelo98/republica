<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastrar</title>
       <script src="cadastrar.js"></script>
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
                 //width: 10%;
                 width: inherit;
                 
                 
            }
                 h1{
                     margin-bottom:5%;
                 }
                 a{
                     text-decoration: none;
                    color: black;
                   // width: 7%;
                    width: inherit;
                    
               
                 }
                 #mensagem{
                     text-align: center;
                     
               
                     height:30px;
                     margin:10px;
                     padding: 10px;
                     margin-left: 25%;
                     margin-right: 25%;
                     
                 }
        </style>
    </head>
    <body>
        <div>
            <h1 style="text-align: center"><strong>Universidade-República:Cadastrar</strong></h1>
            <a href="index.php"><button style="margin-right:32%;float:right;">Home</button></a>
            <form name="cadastro" method="get" action="cadastrar_control.php" onsubmit="return validar()">
                
                <tr>
                    <td><label>Nome da República:</label></td>
                    <br>
                    <td><input type="text" name="nome" id="nome"size="50" placeholder="Nome República" onfocus="limpar()"></td>
                </tr>
                <br>
                 <tr> 
                    <td><label>Endereço:</label></td>
                 <br>
                 <td><input type="text" name="endereco" id="endereco" size="50" placeholder="Endereço" onfocus="limpar()"> </td>
                </tr>
                <br>
                <tr>
                    <td><button type="submit"name="cadastra" value="cadastrar"  >Cadastrar</button></td>
                    <td><button disabled=""><a href="index.php">Cancelar</a></button></td>
               
                </tr>
                
            </form>
            <div id="mensagem">
                
                
            </div>
        </div>
        <?php
        // put your code here
        require_once 'conexao.php';
        if(isset($_GET['cadastra'])=='cadastrar'){ 
            
            $nome = $_GET['nome'];
            $endereco = $_GET['endereco'];
            $add=addRepublica($nome, $endereco);
            header("refresh:1;URL=cadastrar.php");
            
           }
        
       //Função adiciona na base de dados! 
    function addRepublica($parametro1,$parametro2){
        try{
            $sql = "INSERT INTO republica VALUES(?,?,?)";
            $stmt= Conexao::getConexao()->prepare($sql);
            $stmt-> bindValue(1,NULL);
            $stmt-> bindValue(2,$parametro1);
            $stmt-> bindValue(3,$parametro2);
         
            $stmt-> execute();
            
           return 'Cadastrado com Sucesso!';
           
                  } catch (Exception $ex) {
             if($ex->errorInfo[1]==1062){
        return'Já Cadastrado!';
    }else{
        return'Erro ao Cadastrar!'.$ex;
    }
           
        }
    }

    
      
        ?>
        
            
    </body>
    <script type="text/javascript">
        var mensagem=null;
       mensagem= "<?php echo $add;?>";
       if(mensagem!=""){
       alert(mensagem);
   }
  
    </script>
</html>
