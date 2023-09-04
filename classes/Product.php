<?php

class Product {
    public $id;
    public $image;
    public $title;
    public $price;
    public $category;

    public function __construct($id, $image, $title, $price, $category) {
        $this->id = $id;
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }

    public function printCard() {
        echo "<div class='card'>";
        echo "<img src='$this->image' alt='$this->title'>";
        echo "<h3>$this->title</h3>";
        echo "<p>$this->price €</p>";
        echo "<span>$this->category</span>";
        echo "</div>";
    }
}

?>