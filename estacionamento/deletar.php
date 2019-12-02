<?php

    include_once("conexao.php");
  


    $saida= "UPDATE vaga SET situacao=0,data=null,hora=null,dataSaida=null,horaSaida=null WHERE situacao=2";
    $resultado = mysqli_query($conn, $saida);
    header("Location: indexC.html"); 
?>