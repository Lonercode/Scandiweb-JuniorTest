<?php
namespace App\Classes;

class DVD extends Products
{
    public function set()
    {
        return $this->size;
    }
}

class DvdClass extends Loc
{
    public function get()
    {
        $d = new DVD($_POST['sk'], $_POST['nme'], $_POST['prc'] . '.00 $');
        $d->size = $_POST['sz'];
        $sizeV = $d->set() . ' MB';

        $dvdsql = "INSERT IGNORE INTO AllProducts(id, sku, `name`, price, size)
  VALUES (DEFAULT, '$d->sku', '$d->name', '$d->price', '$sizeV')";

        global $conn;
        $conn->query($dvdsql);
    }
}
