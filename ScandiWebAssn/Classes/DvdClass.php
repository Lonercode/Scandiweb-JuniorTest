<?php
use Controllers\AllController;
use Models\db;



class DVD extends Products{
    public function unique(){
        return $this->size;

    }
}


class DvdClass extends Loc{
    public function get(){
  $d = new DVD ($_POST["sk"], $_POST["nme"], $_POST["prc"]);
  $d->size = $_POST["sz"];
  $sizeV = $d->unique();
  
  
  $dvdsql = "INSERT IGNORE INTO AllProducts(id, sku, `name`, price, size)
  VALUES (DEFAULT, '$d->sku', '$d->name', '$d->price', '$sizeV')";
 
 $servername = "us-cdbr-east-06.cleardb.net";
 $username = "b85b6000cc4c4a";
 $password = "dab54a11";
 mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
 $conn = new mysqli($servername, $username, $password);
 $sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
 $conn -> query($sql);
 $sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");




    $conn -> query($dvdsql);
    
      
    }
      
    }

?>