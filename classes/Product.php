<?php

class Product
{
    public $id;
    public $image;
    public $title;
    public $price;
    public $category;

    public function __construct($id, $title, $price, $category, $image = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->image = $image;
    }

    public function printCard()
    {

        if ($this->category == "cani") {
            $icon = "fas fa-dog";
        } else if ($this->category == "gatti") {
            $icon = "fas fa-cat";
        } else {
            $icon = " fas fa-question-circle";
        }
        echo "<div class='card'>";
        echo "<img src='$this->image' alt='$this->title'>";
        echo "<h3>$this->title</h3>";
        echo "<p>$this->price €</p>";
        echo "<span class='fa $icon'></span>";
        echo "</div>";
    }
}
