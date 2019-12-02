<!DOCTYPE html>
<head>
  <meta charset="utf-8">
 <link rel="stylesheet" href="css/index.css">
  <script language="JavaScript" src="backJ.js"></script>
<title>Saida</title>
</head>
<body >
   

    <form class ="box1" action="atualizar.php" method="POST" >
            <h1>Saida</h1>

             <p>
            <input type="submit" name ="numeroVaga" id="1" value ="1">
            <input type="submit" name ="numeroVaga" id="2" value ="2">
            <input type="submit" name ="numeroVaga" id="3" value ="3">
            <input type="submit" name ="numeroVaga" id="4" value ="4">
            <input type="submit" name ="numeroVaga" id="5" value ="5">
            <input type="submit" name ="numeroVaga" id="6" value ="6">
        

        
            </p>
            <p>
                <input type="submit"  name ="numeroVaga" id="7" value ="7">
                <input type="submit"  name ="numeroVaga" id="8" value ="8">
                <input type="submit"  name ="numeroVaga"id="9" value ="9">
                <input type="submit"  name ="numeroVaga"id="10" value ="10">
                <input type="submit"  name ="numeroVaga"id="11" value ="11">
                <input type="submit"  name ="numeroVaga"id="12" value ="12">
                
            </p>
            <p>
                    <input type="submit"  name ="numeroVaga" id="13" value ="13">
                    <input type="submit"  name ="numeroVaga" id="14" value ="14">
                    <input type="submit"  name ="numeroVaga" id="15" value ="15">
                    <input type="submit"  name ="numeroVaga" id="16" value ="16">
                    <input type="submit"  name ="numeroVaga" id="17" value ="17">
                    <input type="submit"  name ="numeroVaga" id="18" value ="18">
                

                
                       
            </p>
                <p>
                        <input type="submit"  name ="numeroVaga" id="19" value ="19">
                        <input type="submit"  name ="numeroVaga" id="20" value ="20">
                        <input type="submit"  name ="numeroVaga" id="21" value ="21">
                        <input type="submit"  name ="numeroVaga" id="22" value ="22">
                        <input type="submit"  name ="numeroVaga" id="23" value ="23">
                        <input type="submit"  name ="numeroVaga" id="24" value ="24">
                </p>
   
                                <p id="data">
                            <?php 
                                $data = date("d/m/Y", mktime(gmdate("d"), gmdate("m"), gmdate("Y")));
                                $hora = date("H:i:s", mktime(gmdate("H")-3, gmdate("i"), gmdate("s")));

                                print "Data Atual.: " .$data.'<br>';
                                print "Hora Atual.: " .$hora;
                            ?>

                        
                    
                     </p>

                    
                    <input type ="button" onclick="window.location='indexC.html';" value="Voltar">

    
     </p>





</div>




</body>



</html>

