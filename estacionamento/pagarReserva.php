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
          
                           
                            $saida= "SELECT * FROM vagareserva WHERE situacao = 5 ";
                            $result = mysqli_query($conn, $saida);
                            $temp = mysqli_fetch_array($result);
                            $data=$temp['tipoReserva'];
                            

                        
                             if($data==1){

                                $calculo=10;

                        }
                            else{
                            $calculo=150;
                          }


                         print "Preço Final:" .$calculo; 

                        ?>

                     </p>
                  
                  <input id="reservaPagar" type ="button" onclick="window.location='indexC.html';" value="Confirmar Pagamento">
              
    
     </p>





</div>




</body>



</html>

