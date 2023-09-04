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
        echo "<div class='card m-3' style='width: 18rem;'>";
        echo "<img src='$this->image' class='card-img-top' alt='$this->title'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>$this->title</h5>";
        echo "<p class='card-text'>$this->price €</p>";
        echo "<span class='fa $icon text-muted'></span>";
        echo "</div>";
    }
}
