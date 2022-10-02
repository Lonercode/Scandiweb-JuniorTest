<?php
// This code concerns the processes that deal with the management of the database.

// The page contains database connection information.

//Get Heroku ClearDB connection information

require('conn.php');

$allp = "CREATE TABLE IF NOT EXISTS AllProducts(
    id INT NOT NULL AUTO_INCREMENT,
    sku  VARCHAR(200) NOT NULL,
    `name`  VARCHAR(200) NOT NULL,
    price  VARCHAR(200) NOT NULL,
    size  VARCHAR(200) NOT NULL,
    `weight`  VARCHAR(200) NOT NULL,
    height  VARCHAR(200) NOT NULL,
    width VARCHAR(200) NOT NULL,
    `length`  VARCHAR(200) NOT NULL,
    PRIMARY KEY(id),
    UNIQUE(sku)
  )";
  
$conn -> query($allp);


$sall = "SELECT * FROM AllProducts";
$showall = $conn ->query($sall);

?>