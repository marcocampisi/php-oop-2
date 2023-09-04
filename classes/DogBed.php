<?php
require_once __DIR__.'/Product.php';

class DogBed extends Product {
    public $size;
    public $color;

    public function __construct($id, $image, $title, $price, $category, $size, $color) {
        parent::__construct($id, $image, $title, $price, $category);
        $this->size = $size;
        $this->color = $color;
    }

    public function printCard() {
        parent::printCard();
        echo "<p>$this->size</p>";
        echo "<p>$this->color</p>";
    }
}