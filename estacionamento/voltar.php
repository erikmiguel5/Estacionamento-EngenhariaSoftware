<?php
$valor = $_POST["valor"];
var_dump($_POST["valor"]);

    include_once("conexao.php");

	$alert1 = "<script> alert('Vaga reservada para o dia');</script>";
	$alert0 = "<script> alert('Vaga reservada para o mes');</script>";
    $data =  date("d", mktime(gmdate("d")));
    $hora =  date("H", mktime(gmdate("H")-3));
    
	$saida= "SELECT * FROM vaga WHERE situacao = 3  ";
   	$result = mysqli_query($conn, $saida);
    $temp = mysqli_fetch_array($result);
    $situacao=$temp['situacao'];

    if($situacao == 3 && $valor=="Selecionar Diária"){
    $saida="UPDATE vaga SET situacao=1, dataSaida=$data+1, horaSaida =$hora WHERE situacao=$situacao";
    $resultado = mysqli_query($conn, $saida);
    echo $alert1;
    echo "<script>window.location='indexC.html'</script>";
    

    }
   if($situacao == 3 && $valor=="Selecionar Mensal"){
   $saida="UPDATE vaga SET situacao=1, dataSaida=$data+30, horaSaida =$hora WHERE situacao=$situacao";;
    $resultado = mysqli_query($conn, $saida);
    echo $alert0;
    echo "<script>window.location='indexC.html'</script>";
    

    }
    ?>