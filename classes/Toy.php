<?php
require_once __DIR__ . '/Product.php';

class Toy extends Product
{
    public $material;

    public function __construct($id, $title, $price, $category, $material, $image = null)
    {
        parent::__construct($id, $title, $price, $category, $image);
        $this->material = $material;
    }

    public function printCard()
    {
        parent::printCard();
        echo "<p>$this->material</p>";
    }
}
