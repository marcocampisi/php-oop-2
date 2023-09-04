<?php
require_once __DIR__.'/Product.php';

class Toy extends Product {
    public $material;

    public function __construct($id, $image, $title, $price, $category, $material) {
        parent::__construct($id, $image, $title, $price, $category);
        $this->material = $material;
    }

    public function printCard() {
        parent::printCard();
        echo "<p>$this->material</p>";
    }
}