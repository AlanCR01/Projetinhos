<?php

    include("conecta.php");session_start();
    $codigo = $_SESSION['cod_usu'];
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $telefone = $_POST['telefone'];

    $teste_se_tem_cadastro = mysqli_query($conexao,"select * from endereco where cod_usu = '".$codigo."'");
    if(mysqli_num_rows($teste_se_tem_cadastro)>0){
        $query_novo_endereco = mysqli_query($conexao,"update endereco set rua_end = '".$rua."',num_end = '". $numero."',comp_end = '".$complemento."', bai_end = '".$bairro."' where cod_usu = '".$codigo."'");
       
        $queryUsuario = mysqli_query($conexao,"update usuario set nome = '".$nome ."' where cod_usu = ". $codigo."");

    }else{
      #senao tiver cadastrado o endereço ira cadastrar com dados abaixo

    $queryEndereco = mysqli_query($conexao,"insert into endereco(cod_end,rua_end,num_end,comp_end,bai_end,cod_usu) values($codigo,'$rua','$numero','$complemento','$bairro',$codigo)");
      if($queryEndereco){
         echo 'endereco ok';
       }else echo 'endereco nao cadastrado';  
      $queryUsuario = mysqli_query($conexao,"update usuario set nome = '".$nome ."' where cod_usu = ". $codigo."");
      if($queryUsuario)
      echo "Nome do usuario cadastrado.";
      else echo "nome usuario nao cadastrado;";
      }


?>