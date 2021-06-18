<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Formulário</title>
        <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="formulario.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         
        <?php include("conecta.php");session_start();
        $codigo = $_SESSION['cod_usu'];
        $teste_se_tem_cadastro = mysqli_query($conexao,"select * from endereco where cod_usu = '".$codigo."'");

       echo  "<div class='container_pre_endereco'>";
            if( mysqli_num_rows($teste_se_tem_cadastro) > 0){
                while($rows = mysqli_fetch_assoc($teste_se_tem_cadastro)){
                    echo "
                            <div class='dados_cliente'>
                                            <p>Rua:  " .$rows['rua_end']."</p>
                                            <p>Número:  ". $rows['num_end']."</p>
                                            <p>Bairro:  ". $rows['bai_end']."</p>
                                            <p>Complemento:  ".$rows['comp_end']."</p>
                            </div>
                        ";
                }

                echo "Você ja tem um endereço cadastrado, se deseja alterá-lo apenas preencha o formulário abaixo e clique em enviar!";

            }else echo "Você não tem endereço cadastrado, cadastre preenchendo o formulário abaixo e clicando em enviar";
        echo "</div>";
        ?>

       <div class="container">
            <div class="title">
                Coloque seu dados abaixo
            </div>
            <form action="formulario.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Nome Completo:</span>
                        <input type="text" name="nome" id="nome" placeholder="Digite aqui seu nome...">   
                    </div>
                    <div class="input-box">
                        <span class="details">Rua:</span>
                        <input type="text" name="rua" id="rua" placeholder="Digite aqui nome da rua...">   
                    </div>
                    <div class="input-box">
                        <span class="details">Número:</span>
                        <input type="number" name="numero" id="numero" placeholder="Digite aqui número...">   
                    </div>
                    <div class="input-box">
                        <span class="details">Bairro:</span>
                        <input type="text" name="bairro" id="bairro" placeholder="Digite aqui nome do bairro...">   
                    </div>
                    <div class="input-box">
                        <span class="details">Complemento:</span>
                        <input type="text" name="complemento" id="complemento" placeholder="Digite aqui o complemento do endereço...">   
                    </div>
                    <div class="input-box">
                        <span class="details">Telefone:</span>
                        <input type="tel" name="telefone" id="telefone" placeholder="Digite aqui seu nome...">   
                    </div>
                </div>
                <button type="submit">Enviar</button>
            </form>
       </div>
    </body>
</html>