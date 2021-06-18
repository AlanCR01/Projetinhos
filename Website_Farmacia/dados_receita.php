<?php

        include("conecta.php");
        session_start();
        $codigo = $_SESSION['cod_usu'];
        $data_pre_entrega = $_POST['data'];
         $data = date("Y-m-d");
   


         
        $sql = mysqli_query($conexao,"insert into pedido(data_pedido,cod_usu,data_pre_pedido) values ('$data','$codigo', '$data_pre_entrega')");

        

?>