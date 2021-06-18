<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulario para receita</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="receita.css">
    </head>
    <body>
        <?php
            include("conecta.php");
            session_start();
            $codigo = $_SESSION['cod_usu'];
        ?>
        <section id="principal">
            
                <?php
                    echo "<div id='endereco'> ";
                    $sql = mysqli_query($conexao,"select * from endereco e  inner join usuario u on u.cod_usu = ".$codigo ." and e.cod_usu =".$codigo."");
                    if(mysqli_num_rows($sql)>0){
                        $display = mysqli_fetch_assoc($sql);
                     echo " 
                           <p class='titulo'>Você ja tem um endereço cadastrado</p>
                        <div class='dados_cliente'>
                            <div class='endereco'>
                                <p>Rua:  " .$display['rua_end']."</p>
                                <p>Número:  ". $display['num_end']."</p>
                                <p>Bairro:  ". $display['bai_end']."</p>
                                <p>Complemento:  ".$display['comp_end']."</p>
                            </div>
                        </div>
                        <div class='recadastro'>
                            <p>Se desejas cadastrar outro endereço clique no botão => </p>
                            <a href='endereco_cadastro.php'> <button>Cadastrar  endereço</button></a>
                        </div>
                        ";
                    }else{ echo "Nenhum endereço cadastrado. Você precisa cadastrar um endereço!!";
                           echo " <a href='endereco_cadastro.php'> <button>Cadastrar  endereço</button></a>";
                    }
                    echo "</div>"; 
                ?>


              <form action="dados_receita.php" method="post">  
                    <div class="container">
                        <span class="details">Data prevista para a entrega:</span>
                        <input type="date" name="data" id="data" >
                    </div> 
                    <div class="container">
                        Coloque aqui sua receita: <input  type="file" name="receita">
                    </div>  
                    <div class="container_button">
                        <button class="enviar">Enviar</button>
                    </div>
               </form>


               
        </section>

        
    </body>
</html>