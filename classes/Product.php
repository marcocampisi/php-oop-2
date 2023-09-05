<?php

class Product
{
    use IconTrait;

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

        try {

            $icon = $this->calculateIcon($this->category);

            if (empty($this->image)) {
                throw new Exception("Nessuna immagine specificata per il prodotto: $this->title");
            }

            echo "<div class='card m-3' style='width: 18rem;'>";
            echo "<img src='$this->image' class='card-img-top' alt='$this->title'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>$this->title</h5>";
            echo "<p class='card-text'>$this->price €</p>";
            echo "<span class='fa $icon text-muted'></span>";
            echo "</div>";
        } catch (Exception $e) {
            echo 'Errore: ' . $e->getMessage();
        }
    }
}

trait IconTrait
{
    public function calculateIcon($category)
    {
        if ($category == "cani") {
            return "fas fa-dog";
        } elseif ($category == "gatti") {
            return "fas fa-cat";
        } else {
            return "fas fa-question-circle";
        }
    }
}
