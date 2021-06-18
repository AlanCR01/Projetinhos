<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="home.css">
        <link rel="icon" type="imagem/png" href="logo.png">
    </head>
    <body>
        <?php include("conecta.php");session_start();
        $logado = null;
        /*aqui ira verificar se o usuario esta logado para que nao consigam burlar o sistema digitando direto na url a página home*/  
            if((!isset ($_SESSION['login']) == true) and (!isset($_SESSION['password']) == true)){
                unset($_SESSION['login']);
                unset($_SESSION['password']);
            }
            else $logado = $_SESSION['login'];
        
        ?>
        <header>
            <nav>
                <a href="" class="logo">Pharmacy</a>
                <ul>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#container_services">Nossos serviços</a></li>
                    <li><a href="#container_time">Nossa Equipe</a></li>
                    <li><a href="#container_contato">Contato</a></li>
                    <?php 
                        if($logado!=null){   
                          echo "  <li class='menu_drop'>
                                        <a href='#' >Minhas preferencias</a>
                                        <ul class='drop'>
                                            <li><a href='endereco_cadastro.php'>Meu endereço</a></li>
                                            <li><a href='historico.php'>Meu historico</a></li>
                                        </ul>
                                    </li>
                          ";    
                        }else{ echo "<li><a href='#'>Cadastrar-se |</a></li>
                                        <li><a href='login.html'>Acessar</a></li>
                                     
                                    ";}
                    ?>
                </ul>
            </nav> 
        </header>
        <section id="principal">
            <?php
                if($logado!=null){
                echo "   
                        <section class='cliente containers'>
                        <h2>Seja bem vindo ".$_SESSION['login'] ."</h2>
                        </section>
                    " ;
                }
            ?>
            <div class="seta">
                <a href="#principal"><img src="images/seta.png" alt=""></a>
            </div>
            <section id="produtos" class="containers"> <!--Secao dos produtos do site-->
                <div class="container_produtos">
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>
                    </div>
                    <div class="produtos">
                        <img src="images/medicamento2.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento3.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento2.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento3.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                    <div class="produtos">
                        <img src="images/medicamento1.png" alt="medicamento" width="150px">
                        <p>Descrição do produto</p>
                        <p>R$100,00</p>

                    </div>
                </div>
            </section>

            <section id="pedidos_receita" class="containers">
                <div class="container_pedido">
                    <h2 class="titulo">Tem sua receita peça seu medicamento</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. Donec viverra risus at gravida scelerisque. Proin tempor augue sollicitudin lorem suscipit, eu maximus lorem iaculis.</p>
                   <form action="receita.php" target="_parent">
                        <button type="submit" class="botao_receita">
                            Enviar Receita
                        </button>
                    </form>
                </div>
            </section>

            <section id="container_services" class="containers"> <!--Aqui container com informacoes dos servicos do local-->
                <div class="services">  
                    <h2>Nossos Serviços</h2>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. </p>
                    <div class="div_service">
                        <div class="service">
                            <img src="images/siringa.png" alt="" width="150px">
                            <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. </p>
                        </div>
                        <div class="service">
                            <img src="images/medicamento.png" alt="" width="150px">
                            <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. </p>
                        </div>
                        <div class="service">
                            <img src="images/balanca.png" alt="" width="150px">
                            <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. </p>
                        </div>
                    </div>
                </div>
            </section>



            <section id="container_time"class="containers">
                <div class="time">
                    <h2 class="titulo">Nossa equipe</h2>
                    <p class="descricao">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. </p>
                    <img src="images/medicos.jpg" alt="equipe_medica">
                </div>
            </section>
            <section id="container_contato" class="containers"><!--parte do formulario pergunta ao suporte-->
                <div class="contato">
                    <h2 class="titulo">Entrar em contato</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a semper arcu. Donec viverra risus at gravida scelerisque. Proin tempor augue sollicitudin lorem suscipit, eu maximus lorem iaculis. </p>
                    <form action="" class="formulario">

                        <label for="nome" class="label_input"><input type="text" id="nome" name="nome" placeholder="Digite aqui seu nome..." class="inputs"></label>

                        <label for="email"  class="label_input"><input type="email" id="email" name="email" placeholder="Coloque aqui seu E-mail..." class="inputs"></label>

                        <textarea name="comentario" id="comentario" cols="30" rows="10" class="area_texto">
                        Digite aqui sua mensagem...
                        </textarea>

                        <button class="botao">Enviar</button>

                    </form>
                </div>
            </section>



        </section>
        <script src="mobile_navbar.js"></script>
    </body>
</html>