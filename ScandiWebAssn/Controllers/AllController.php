<?php
use Models\db;



function index(){
    $sall = "SELECT * FROM AllProducts";
    $showall = $conn ->query($sall);
    return $showall;
}



// the associative array '$check' and the function 'selectOption' help to distinguish product classes in database management.



function selectOption($check){
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
return $check[$_POST['choose']]-> get();
}
}


$check = ['dvd' => new DvdClass(),
'books' => new BookClass(),
'furn' => new FurnClass()];

selectOption($check);




//Deleting products from the database.
function delete(){

    $servername = "us-cdbr-east-06.cleardb.net";
    $username = "b85b6000cc4c4a";
    $password = "dab54a11";
    mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
    $conn = new mysqli($servername, $username, $password);
    $sql = "CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e";
    $conn -> query($sql);
    $sel = mysqli_select_db ($conn, "heroku_d3e16c4b654dd5e");

if (isset($_GET['delete-check-btn'])){
if (isset($_GET['delete_checkbox'])){
$cheks = implode("','", $_GET['delete_checkbox']);
$del = "DELETE FROM AllProducts WHERE id IN ('$cheks')";
$conn->query($del);
$reset = "ALTER TABLE AllProducts AUTO_INCREMENT = 1";
$conn -> query($reset);
}
}
};

delete();
header('Location: ../Views/home.php');
exit;

?>