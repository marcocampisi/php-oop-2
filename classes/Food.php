<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $weight;

    public function __construct($id, $title, $price, $category, $weight, $image = null)
    {
        parent::__construct($id, $title, $price, $category, $image);
        $this->weight = $weight;
    }

    public function printCard()
    {
        parent::printCard();
        echo "<p>$this->weight g</p>";
    }
}
