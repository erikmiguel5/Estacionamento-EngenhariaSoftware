<?php
$numeroVaga = $_POST["numeroVaga"];

    include_once("conexao.php");

    $alert1 = "<script> alert('Vaga Ocupada');</script>";
    $alert0 = "<script> alert('Vaga Selecionada');</script>";
    $diaf =  date("d", mktime(gmdate("d")));
    $mesf =  date("m", mktime(gmdate("m")));
    $anof = date("y", mktime(gmdate("y")));



    $saida ="UPDATE vagareserva SET situacao=0,dia=0,mes=0,ano=0,tipoReserva=0 WHERE tipoReserva =1 AND $diaf > dia";
    $resultado = mysqli_query($conn, $saida);

    $saida ="UPDATE vagareserva SET situacao=0,dia=0,mes=0,ano=0,tipoReserva=0 WHERE tipoReserva =2 AND $anof > ano AND (mes != 1 OR $diaf >= dia)";
    $resultado = mysqli_query($conn, $saida);

    $saida ="UPDATE vagareserva SET situacao=0,dia=0,mes=0,ano=0,tipoReserva=0 WHERE tipoReserva =2  AND $mesf > mes AND $diaf >= dia and $anof = ano)";
    $resultado = mysqli_query($conn, $saida);




	
    
	$saida= "SELECT * FROM vagareserva WHERE numeroVaga = $numeroVaga  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['situacao'];
  
    if($situacao == 0){
    $saida ="UPDATE vagareserva SET situacao=5,dia=$diaf,mes=$mesf,ano=$anof WHERE numeroVaga = $numeroVaga";
    $resultado = mysqli_query($conn, $saida);
    echo $alert0;
    echo "<script>window.location='ConfirmarReserva.php'</script>";
    

	}
	else{
		
		echo $alert1;
		echo "<script>window.location='Reservar.php'</script>";
	}
    
   ?>