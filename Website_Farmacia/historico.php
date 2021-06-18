<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Historico de pedidos</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="Adm/adm_index.css">
    </head>
    <body>
        <?php
        include("conecta.php");
        session_start();
        $codigo = $_SESSION['cod_usu'];
    ?>
    <section id="principal">
        <?php

        
            $sql2 = mysqli_query($conexao,"select data_pedido, data_pre_pedido from pedido where cod_usu =".$codigo."");
            if(mysqli_num_rows($sql2)>0){
                echo "<p style='color:#fff'>  Pedidos ainda não entregues!</p>";
                while($ped = mysqli_fetch_assoc($sql2)){  
                $sql_endereco2 = mysqli_query($conexao,"select rua_end, num_end,bai_end,comp_end from endereco where cod_usu = ".$codigo."");
                while($end = mysqli_fetch_assoc($sql_endereco2)){
                    echo "  
                        <section class='pedidos'>
                    
                            <div class='dados_cliente'>
                                <p>Rua:  " .$end['rua_end']."</p>
                                <p>Número:  ". $end['num_end']."</p>
                                <p>Bairro:  ". $end['bai_end']."</p>
                                <p>Complemento:  ".$end['comp_end']."</p>
                            </div>
                            <div class='dados_pedido'>
                                <p>Data do pedido:".$ped['data_pedido'] ."</p>
                                <p>Data do entrega:".$ped['data_pre_pedido'] ."</p>
                                <p>Receita:</p>
                            </div>
                        </section>
                        ";
                    }
            }
            }else echo "<p style='color:#fff'>Você não tem pedidos em andamento!!</p>";


        $sql = mysqli_query($conexao,"select data_pedido, data_entrega from historico where cod_usu =".$codigo."");
             if(mysqli_num_rows($sql)>0){
                echo " <p style='color:#fff'>  Pedidos ja entregues!</p>";
                 while($row = mysqli_fetch_assoc($sql)){  
                 $sql_endereco = mysqli_query($conexao,"select rua_end, num_end,bai_end,comp_end from endereco where cod_usu = ".$codigo."");
                    while($row2 = mysqli_fetch_assoc($sql_endereco)){
                        echo "  
                            <section class='pedidos'>
                        
                                <div class='dados_cliente'>
                                    <p>Rua:  " .$row2['rua_end']."</p>
                                    <p>Número:  ". $row2['num_end']."</p>
                                    <p>Bairro:  ". $row2['bai_end']."</p>
                                    <p>Complemento:  ".$row2['comp_end']."</p>
                                </div>
                                <div class='dados_pedido'>
                                    <p>Data do pedido:".$row['data_pedido'] ."</p>
                                    <p>Data do entrega:".$row['data_entrega'] ."</p>
                                    <p>Receita:</p>
                                </div>
                            </section>
                            ";
                        }
                }
             }else echo " <p style='color:#fff'> nada consta em seu historico!! </p>";
#aqui parte dos pedidos ainda em andamento


        ?>
            
       


    </section>
    </body>
</html>