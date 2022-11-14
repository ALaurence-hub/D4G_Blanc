<?php
   function compoment($t,$c,$id){

      $c=str_replace("'"," ",$c);

      $element ="

      <form action='index.php' id='container' method='post'> 

      <div>
      <h3>$t</h3>
      <hr class='content'> 
      <p>$c</p>
   
      <input type='submit' value='Ajouter' class='btn' name='add'/>
      
      <input type='hidden' name='t' value=$t>
      <input type='hidden' name='c' value='$c'>
      <input type='hidden' name='id' value='$id'>
      </div>
      </form>
      ";
   
   echo $element;
   } 

function compoment_cart($t,$c,$id){

   $c=str_replace("'"," ",$c);

   $element ="

   <form action='cart.php' id='cartcontent' method='post'> 

   <div><h3>$t</h3>
   <div class='contentcart'>$c</div>
   <input type='submit' value='Supprimer' class='button' name='delete'/>
   <input type='hidden' name='t' value=$t>
   <input type='hidden' name='c' value='$c'>
   <input type='hidden' name='id' value='$id'>
   </div>
   </form>
   ";

echo $element;
} 


      class CreateDb
      {

         public $servername;
         public $username;
         public $password;
         public $dbname;
         public $tablename;
         public $con;

 
      public function __construct(
         $dbname = "dara",
         $tablename = "data",
         $servername = "localhost",
         $username = "root",
         $password = ""
     )
     {
       $this->dbname = $dbname;
       $this->servername = $servername;
       $this->username = $username;
       $this->password = $password;
       $this->tablename = $tablename;

 
       // create connection
         $this->con = mysqli_connect($servername, $username, $password,$dbname);
 
         // Check connection
         if (!$this->con){
             die("Connection failed : " . mysqli_connect_error());
         }
   }

   public function getData(){

         $sql ="SELECT `Famille Origine`,`ID`,`CRITERES` FROM $this->tablename WHERE `CRITERES`!=''" ;
 
         $result = mysqli_query($this->con, $sql);
 
         if(mysqli_num_rows($result) > 0){
            return $result;
        }
         
     }

   public function putDataInCart($t,$c,$id){

      $t= utf8_decode($t);
      $c= utf8_decode($c);
      $id= utf8_decode($id);
      
      $sql ="INSERT INTO `panier`(`Famille Origine`, `ID`, `CRITERES`) VALUES ('$t','$id','$c')";
 
         $result = mysqli_query($this->con, $sql);
   }


   public function getDataCard(){

      $sql = "SELECT * FROM `panier`;";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
         return $result;
     }
      
  }

  public function DeleteDataCard($id){


   $sql = "DELETE FROM `panier` WHERE `ID`='$id'";

   $result = mysqli_query($this->con, $sql);

   
}
   

   }  

?>  

