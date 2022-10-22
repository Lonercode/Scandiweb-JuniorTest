<?php
namespace App\Models;

// The page contains database connection information.

class Connection
{
    public function connect()
    {
        global $conn;
        $servername = 'us-cdbr-east-06.cleardb.net';
        $username = 'b85b6000cc4c4a';
        $password = 'dab54a11';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $conn = new \mysqli($servername, $username, $password);
        $sql = 'CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e';
        $conn->query($sql);
        $sel = mysqli_select_db($conn, 'heroku_d3e16c4b654dd5e');

        $allp = 'CREATE TABLE IF NOT EXISTS AllProducts(
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
  )';

        $conn->query($allp);
    }
}
