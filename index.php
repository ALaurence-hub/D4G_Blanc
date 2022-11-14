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
            <div class="name">Created by Alexandre Rouillé, Alessandro Gadrat & Baptiste Blanc</div>
         </div>
         <div class="violet">
            <nav class="navi">
               <!-- Menue Nav -->
               <a onclick="window.scrollTo({top: 350,behavior: 'smooth'})">Stratégie&nbsp;</a> 
               <a onclick="window.scrollTo({top: 4250,behavior: 'smooth'})">Spécifications&nbsp;</a>
               <a onclick="window.scrollTo({top: 8180,behavior: 'smooth'})">UX/UI&nbsp;</a> 
               <a onclick="window.scrollTo({top: 12790,behavior: 'smooth'})">Contenus&nbsp;</a> 
               <a onclick="window.scrollTo({top: 16330,behavior: 'smooth'})">Architecture&nbsp;</a>
               <a onclick="window.scrollTo({top: 20930,behavior: 'smooth'})">Frontend&nbsp;</a> 
               <a onclick="window.scrollTo({top: 26260,behavior: 'smooth'})">Backend&nbsp;</a>
               <a onclick="window.scrollTo({top: 30900,behavior: 'smooth'})">Hébergement&nbsp;</a> 
               <a href="cart.php" class="panier">PANIER&nbsp;</a> 
               
            </nav>
         </div>
      </div>

      

      <div id='container'>
         <?php
            
            session_start();


             require_once('fonction.php');
             $database = new CreateDb("dara","data");

             
             $result = $database->getData();

             if(isset($_POST['add'])){
              $t= $_POST['t'];
              $c= $_POST['c'];
              $id= $_POST['id'];
              $database->putDataInCart($t,$c,$id);               
            }
             while ($row = mysqli_fetch_assoc($result)){
               compoment(utf8_encode($row['Famille Origine']),utf8_encode($row['CRITERES']),utf8_encode($row['ID']));
             }
   
         ?>
      </div>
   </body>
</html>