<?php
$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'], '/')) : '/';

use App\Models\Connection;
use App\Classes\Products;
use App\Classes\DvdClass;
use App\Classes\BookClass;
use App\Classes\FurnClass;
use App\Controllers\PracController;

if ($url == '/') {
    require __DIR__ . '/vendor/autoload.php';

    $connecting = new Connection;
    $connecting->connect();
    $check = ['dvd' => new DvdClass(),
        'books' => new BookClass(),
        'furn' => new FurnClass()];
    $dir = new PracController;
    $dir->direct();
}
