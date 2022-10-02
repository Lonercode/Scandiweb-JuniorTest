<?php
// The page contains database connection information.

//Get Heroku ClearDB connection information

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b85b6000cc4c4a";
$password = "dab54a11";
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
$conn -> query($sql);
$sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");








/*
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
$conn -> query($sql);
$sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");





$servername = "localhost";
$username = "root";
$password = "";
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS Products";
$conn -> query($sql);
$sel = mysqli_select_db ($conn, "Products");

/*

$servername =  "remotemysql.com";
$username = "a04y3KYkVx";
$password = "WiobzK4RzL";
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
$conn = new mysqli($servername, $username, $password);
$sql = "CREATE DATABASE IF NOT EXISTS Products";
$conn -> query($sql);
$sel = mysqli_select_db ($conn, "Products");
$u = "USE Products";
$conn -> query($u);

*/

?>