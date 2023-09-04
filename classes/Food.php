<?php
require_once __DIR__.'/Product.php';

class Food extends Product {
    public $weight;
    public $animal;

    public function __construct($id, $image, $title, $price, $category, $weight, $animal) {
        parent::__construct($id, $image, $title, $price, $category);
        $this->weight = $weight;
        $this->animal = $animal;
    }

    public function printCard() {
        parent::printCard();
        echo "<p>$this->weight g</p>";
    }
}


?>