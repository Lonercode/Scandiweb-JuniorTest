<?php
namespace App\Controllers;

class Databases
{
    // the associative array '$check' and the function 'selectOption' help to distinguish product classes in database management.

    public function insert($check)
    {
        global $check;
        if (isset($_POST['choose'])) {
            $check[$_POST['choose']]->get();
        }
    }

    //Deleting products from the database.
    public function delete()
    {
        global $conn;

        if (isset($_POST['delete-check-btn'])) {
            if (isset($_POST['delete_checkbox'])) {
                $cheks = implode("','", $_POST['delete_checkbox']);
                $del = "DELETE FROM AllProducts WHERE id IN ('$cheks')";
                $conn->query($del);
                $reset = 'ALTER TABLE AllProducts AUTO_INCREMENT = 1';
                $conn->query($reset);
            }
        }
    }

    public function select()
    {
        $servername = 'us-cdbr-east-06.cleardb.net';
        $username = 'b85b6000cc4c4a';
        $password = 'dab54a11';
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $conn = new \mysqli($servername, $username, $password);
        $sql = 'CREATE DATABASE IF NOT EXISTS heroku_d3e16c4b654dd5e';
        $conn->query($sql);
        $sel = mysqli_select_db($conn, 'heroku_d3e16c4b654dd5e');

        $array = [];
        $sall = 'SELECT * FROM AllProducts';
        $showall = $conn->query($sall);
        while ($row = $showall->fetch_assoc()) {
            $array[] = $row;
        }
        return $array;
    }
};

class AllController
{
    public function processes()
    {
        global $check;
        global $option;
        global $post;
        $option = new Databases;
        $option->insert($check);
        $option->delete();
        $post = $option->select();
        require_once __DIR__ . '/../Views/Home/Nav.php';
    }
}
