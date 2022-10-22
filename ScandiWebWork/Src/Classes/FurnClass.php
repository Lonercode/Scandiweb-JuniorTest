<?php
namespace App\Classes;

class Furniture extends Products
{
    public function set()
    {
        return [$this->height, $this->width, $this->length] ;
    }
}

class FurnClass extends Loc
{
    public function get()
    {
        $d = new Furniture($_POST['sk'], $_POST['nme'], $_POST['prc'] . '.00 $');
        $d->height = $_POST['ht'] ;
        $d->width = $_POST['wd'] ;
        $d->length = $_POST['lt'];
        list($h, $w, $l) = $d->set();

        $furnsql = "INSERT IGNORE INTO AllProducts(id, sku, `name`, price, height, width, `length`)
    VALUES (DEFAULT, '$d->sku', '$d->name', '$d->price','$h','$w', '$l' )";

        global $conn;
        $conn->query($furnsql);
    }
};
