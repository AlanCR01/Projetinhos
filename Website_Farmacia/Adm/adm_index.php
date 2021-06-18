<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Index Administrador</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="adm_index.css">
     
    </head>
    <body>
        <?php
            include("../conecta.php");
       
        ?>
        <section id="principal">
            <?php
            $sql = mysqli_query($conexao,"select * from pedido");
                 if(mysqli_num_rows($sql)>0){
                     while($row = mysqli_fetch_assoc($sql)){  /*pegar dados da table pedido*/
                        $sqlUser = mysqli_query($conexao,"select nome, telefone from usuario where cod_usu = ".$row['cod_usu']."");
                        while($row2 = mysqli_fetch_assoc($sqlUser)){ #pegar dados do usuario nome e telefone
                             $sql_endereco = mysqli_query($conexao,"select rua_end, num_end,bai_end,comp_end from endereco where cod_usu = ".$row['cod_usu']."");
                             while($row3 = mysqli_fetch_assoc($sql_endereco)){
                                echo "
                                    <section class='pedidos'>
                                        <div class='dados_cliente'>
                                            <p>Nome:  ".$row2['nome']."</p>
                                            <p>Telefone:  ".$row2['telefone']."</p>
                                            <p>Rua:  " .$row3['rua_end']."</p>
                                            <p>Número:  ". $row3['num_end']."</p>
                                            <p>Bairro:  ". $row3['bai_end']."</p>
                                            <p>Complemento:  ".$row3['comp_end']."</p>
                                        </div>
                                        <div class='dados_pedido'>
                                            <p>Data do pedido:".$row['data_pedido'] ."</p>
                                            <p>Data que o cliente deseja receber: ".$row['data_pre_pedido']."</p>
                                            <p>Receita:</p>
                                        </div>
                                        <form method='post' action='fechar_pedido.php'>
                            
                                            <div class='encerramento'>
                                                Já foi entregue apenas coloque a data em que foi entregue e feche o pedido!
                                                <input type='date'><button type='submit'>Fechar</button>
                                            </div>
                                        </form>
                                    </section>
                                 ";
                        }
                            }
                    }
                 }
                 else echo "nenhum pedido pendente!!";
            ?>
                
           


        </section>
    </body>
</html>