<?php

    include("../conecta.php");

    $senha = $_POST['senha'];
    $senha_acesso = $_POST['senha_acesso'];
    $email = $_POST['email'];

    if($senha_acesso = '0501'){
        $sql = mysqli_query($conexao,"select * from usuario where email = '".$email."' and senha = '".$senha."'");
        $rows = mysqli_num_rows($sql);
        echo $email;
        echo $senha;
        echo $senha_acesso;
        if($rows){
            while($dados=mysqli_fetch_assoc($sql)){
                session_start();
                header("Location: adm_index.php");
            }
        }
    }

?>