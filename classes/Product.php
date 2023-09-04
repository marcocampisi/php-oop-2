<?php

class Product {
    public $id;
    public $image;
    public $title;
    public $price;
    public $category;

    public function __construct($id, $title, $price, $category, $image = null) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    public function printCard() {
        echo "<div class='card'>";
        echo "<img src='$this->image' alt='$this->title'>";
        echo "<h3>$this->title</h3>";
        echo "<p>$this->price €</p>";
        echo "<span>$this->category</span>"; //TO-DO visualizzare icona cane o gatto qui
        echo "</div>";
    }
}