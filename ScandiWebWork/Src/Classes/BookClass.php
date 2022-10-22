<?php
namespace App\Classes;

class Books extends Products
{
    public function set()
    {
        return $this->weight;
    }
}

class BookClass extends Loc
{
    public function get()
    {
        $d = new Books($_POST['sk'], $_POST['nme'], $_POST['prc'] . '.00 $');
        $d->weight = $_POST['wt'];
        $weightV = $d->set() . ' KG';

        $booksql = "INSERT IGNORE INTO AllProducts(id, sku, `name`, price, `weight`)
    VALUES (DEFAULT, '$d->sku', '$d->name', '$d->price', '$weightV')";

        global $conn;
        $conn->query($booksql);
    }
};
