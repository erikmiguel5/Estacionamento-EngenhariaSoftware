<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/index.css">
  <script language="JavaScript" src="backJ.js"></script>
<title>Pagamento</title>
</head>
<body >
   

    <form class ="box1" action="deletar.php" method="POST" >
            <h1>Pagamento</h1>

           
   
                        <p id="data">
                            <?php 
                                $data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
                                $hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

                                print "Data Atual.: " .$data.'<br>';
                                print "Hora Atual.: " .$hora;
                            ?>

                        
                    
                     </p>
                     <p id="data">
                        <?php  
                         include_once("conexao.php");
                          $dataf =  date("d", mktime(gmdate("d")));
                            $horaf =  date("H", mktime(gmdate("H")-3));
                            $calculo =2;
                           
                            $saida= "SELECT * FROM vaga WHERE situacao = 2 ";
                            $result = mysqli_query($conn, $saida);
                            $temp = mysqli_fetch_array($result);
                            $data=$temp['data'];
                            $hora=$temp['hora'];

                        
                             if($data==$dataf&&$hora<$horaf){

                                $calculo=($horaf-$hora)*2;

                        }
                            else if($data<$dataf&&$hora<$horaf){
                                $calculo=(((($dataf-$data)*24)+($horaf-$hora))*2);
                        }
                            else if($data<$dataf&&$hora>$horaf){
                            $aux = -(hora-24);
                            $calculo= ($aux+$horaf)*2;

                        }


                         print "Preço Final:" .$calculo; 

                        ?>

                     </p>
                    <input type ="submit" onclick="window.location='deletar.php';" value="Confirmar">

    
     </p>





</div>




</body>



</html>

