<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="Cache-control" content="public">      
      <title>Design4Green</title>
      <link rel="stylesheet" href="style/style.css" />
      <link rel="stylesheet" media="print" href="style/style.css" />
   </head>
   <body>
           
      <div class="main">
         <div class="prez">
            <hr class='title'> 
            <a href="index.php"><h1>DESIGN 4 GREEN</h1></a>
            <hr class='title'> 
         </div>
         <div class="violet">
            <nav class="navi">
               <!-- Menue Nav -->
               <a href="index.php" >Stratégie&nbsp;</a> 
               <a href="index.php">Spécifications&nbsp;</a>
               <a href="index.php">UX/UI&nbsp;</a> 
               <a href="index.php">Contenus&nbsp;</a> 
               <a href="index.php">Architecture&nbsp;</a>
               <a href="index.php">Frontend&nbsp;</a> 
               <a href="index.php">Backend&nbsp;</a>
               <a href="index.php">Hébergement&nbsp;</a> 
               <a href="" class="panier">PANIER&nbsp;</a> 
               
            </nav>
         </div>
      </div>
    

      <div id='cartcontent'>
         <?php
            
            session_start();


             require_once('fonction.php');
             $database = new CreateDb("dara","data");

             
             $result = $database->getDataCard();

       
            echo "
            <h1> PANIER</h1></br>
            <hr class='rounded'> 
            </br>

            ";
            

            if(isset($_POST['delete'])){
               $id= $_POST['id'];
               $database->DeleteDataCard($id);
              echo '<meta http-equiv=Refresh content="0;url=cart.php?reload=1">';
            
             }


            if (!$result){
               echo "<h2>Panier vide</h2>";
            }
            else { 
             while ($row = mysqli_fetch_assoc($result)){
                compoment_cart(utf8_encode($row['Famille Origine']),utf8_encode($row['CRITERES']),utf8_encode($row['ID']));

                     
             }
         }
   
         ?>

   
      </div>   
   </body>
</html>