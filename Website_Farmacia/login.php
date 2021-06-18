<?php
    include("conecta.php");

    $sql = mysqli_query($conexao, "select * from usuario where email='".$_POST['email']."'and senha='".$_POST['senha']. "'");

    $rows = mysqli_num_rows($sql);

if($rows){
    while($dados=mysqli_fetch_assoc($sql)){
        session_start();                            //ira iniciar a sessao
        $_SESSION['email'] = $dados['email'];      //passara esses parametros login 
        $_SESSION['senha'] = $dados['senha'];    // e senha
        $_SESSION['login'] = $dados['login'];
        $_SESSION['cod_usu'] = $dados['cod_usu'];   
        header("Location: home.php");   //será direcionado para a página home
    }
}else {
    echo $_POST['email']; echo '<br>';
    echo $_POST['senha'];
    echo "usuario nao cadastrado;";
    //header("Location: index.html");
}
?>