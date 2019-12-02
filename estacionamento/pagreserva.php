<?php
$numeroVaga = $_POST["valor"];


    include_once("conexao.php");

    
	$saida= "SELECT * FROM vagareserva WHERE situacao = 5  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['tipoReserva'];
  
    if($numeroVaga == "Selecionar Diária" ){
    $saida ="UPDATE vagareserva SET tipoReserva=1,situacao=1 WHERE situacao = 5";
    $resultado = mysqli_query($conn, $saida);
    
    }
    if($numeroVaga == "Selecionar Mensal"){
    $saida ="UPDATE vagareserva SET tipoReserva=2,situacao=1 WHERE situacao = 5";
    $resultado = mysqli_query($conn, $saida);
    }

    $diaf=  date("d", mktime(gmdate("d")));
    $mesf =  date("m", mktime(gmdate("m")));

    
 


    



    echo "<script>window.location='pagarReserva.php'</script>";
    
	
	
      
    
   ?>