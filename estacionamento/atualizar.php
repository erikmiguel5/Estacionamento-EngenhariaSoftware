<?php

$numeroVaga = $_POST["numeroVaga"];


    include_once("conexao.php");
  
  $dataf =  date("d", mktime(gmdate("d")));
    $horaf =  date("H", mktime(gmdate("H")-3));
    $alert = "<script> alert('Erro ao selecionar vaga');</script>";

    $saida= "SELECT * FROM vaga WHERE numeroVaga = $numeroVaga  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['situacao'];

    if($situacao == 1){
    $saida= "UPDATE vaga SET situacao=2,dataSaida=$dataf,horaSaida=$horaf WHERE numeroVaga=$numeroVaga";
    $resultado = mysqli_query($conn, $saida);
    header("Location: pagar.php");
	}
	if($situacao == 0){
		echo $alert;
		echo "<script>window.location='Sair.php'</script>";
	}

     
?>