<?php
namespace App\Controllers;

class PickDTO
{
    public $id;
    public $sku;
    public $name;
    public $price;
    public $size;
    public $weight;
    public $height;
    public $width;
    public $length;

    public function __construct($id, $sku, $name, $price, $size, $weight, $height, $width, $length)
    {
        $this->id = $id;
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
        $this->weight = $weight;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function id()
    {
        global $post;
        return $this->id;
    }

    public function sku()
    {
        global $post;
        return $this->sku;
    }

    public function name()
    {
        global $post;
        return $this->name;
    }

    public function price()
    {
        global $post;
        return $this->price;
    }

    public function size()
    {
        global $post;
        return $this->size;
    }

    public function weight()
    {
        global $post;
        return $this->weight;
    }

    public function height()
    {
        global $post;
        return $this->height;
    }

    public function width()
    {
        global $post;
        return $this->width;
    }

    public function length()
    {
        global $post;
        return $this->length;
    }
}
{
}
class PracController
{
    public function direct()
    {
        $another = new AllController;
        $another->processes();
        global $post;
        foreach ($post as $post) {
            $n = new PickDTO($post['id'], $post['sku'], $post['name'], $post['price'], $post['size'], $post['weight'], $post['height'], $post['width'], $post['length']);
            require __DIR__ . '/../Views/Home/Body.php';
        }

        require __DIR__ . '/../Views/Home/Footer.php';
    }
}
