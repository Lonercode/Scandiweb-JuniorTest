<?php

use Controllers\AllController;
use Models\db;





class Furniture extends Products{
    public function unique(){
        return array($this->height, $this->width,$this->length) ;

    }
   
}


class FurnClass extends Loc{
    public function get(){
      $d = new Furniture ($_POST["sk"], $_POST["nme"], $_POST["prc"]);
      $d -> height = $_POST["ht"] ;
      $d -> width = $_POST["wd"] ;
      $d -> length = $_POST["lt"];
      list($h,$w,$l) = $d->unique();
     
      
    $furnsql = "INSERT IGNORE INTO AllProducts(id, sku, `name`, price, height, width, `length`)
    VALUES (DEFAULT, '$d->sku', '$d->name', '$d->price','$h','$w', '$l' )";
    
    $servername = "us-cdbr-east-06.cleardb.net";
    $username = "b85b6000cc4c4a";
    $password = "dab54a11";
    mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password);
    $sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
    $conn -> query($sql);
    $sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");

    $conn -> query($furnsql);
    
    }
    };
    

?>