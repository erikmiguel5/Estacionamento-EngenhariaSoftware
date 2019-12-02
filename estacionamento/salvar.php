<?php
$numeroVaga = $_POST["numeroVaga"];


    include_once("conexao.php");

	$alert1 = "<script> alert('Vaga reservada para o dia');</script>";
	$alert0 = "<script> alert('Vaga reservada para o mes');</script>";
    $data =  date("d", mktime(gmdate("d")));
    $hora =  date("H", mktime(gmdate("H")-3));
    
	$saida= "SELECT * FROM vagareserva WHERE numeroVaga = $numeroVaga  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['situacao'];
  
    if($situacao == 0 ){
    $saida ="INSERT INTO vagareserva(numeroVaga,situacao,data,hora) VALUES ($numeroVaga,2,$data,$hora)";
    $resultado = mysqli_query($conn, $saida);

    echo "<script>window.location='ConfirmarReserva.php'</script>";
    

	}
	
      
    
   ?>