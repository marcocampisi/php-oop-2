<?php
require_once __DIR__ . '/Product.php';

class DogBed extends Product
{
    public $size;
    public $color;

    public function __construct($id, $title, $price, $category, $size, $color, $image = null)
    {
        parent::__construct($id, $title, $price, $category, $image);
        $this->size = $size;
        $this->color = $color;
    }

    public function printCard()
    {
        parent::printCard();
        echo "<div class='card-footer'>";
            echo "<p>$this->size</p>";
            echo "<p>$this->color</p>";
        echo "</div>";
        echo "</div>";
    }
}
