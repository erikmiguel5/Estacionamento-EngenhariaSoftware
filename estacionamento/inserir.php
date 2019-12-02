<?php
$numeroVaga = $_POST["numeroVaga"];

    include_once("conexao.php");

	$alert1 = "<script> alert('Vaga Ocupada');</script>";
	$alert0 = "<script> alert('Vaga Selecionada');</script>";
    $data =  date("d", mktime(gmdate("d")));
    $hora =  date("H", mktime(gmdate("H")-3));
    
	$saida= "SELECT * FROM vaga WHERE numeroVaga = $numeroVaga  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['situacao'];
  
    if($situacao == 0){
    $saida ="UPDATE vaga SET situacao=1,data=$data,hora=$hora WHERE numeroVaga = $numeroVaga";
    $resultado = mysqli_query($conn, $saida);
    echo $alert0;
    echo "<script>window.location='indexC.html'</script>";
    

	}
	if($situacao==1){
		
		echo $alert1;
		echo "<script>window.location='Entrar.php'</script>";
	}
    
   ?>