<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Shop</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <?php
    require_once 'classes//Product.php';
    require_once 'classes//Food.php';
    require_once 'classes//Toy.php';
    require_once 'classes//DogBed.php';


    $food1 = new Food("[1]", "Croccantini per cani", 15.99, "cani", 100);
    $food2 = new Food("[2]", "Croccantini per gatti", 19.99, "gatti", 150);
    $toy1 = new Toy("[3]", "Palla per cani", 4.99, "cani", "gomma");

    $food1->printCard();
    $food2->printCard();
    $toy1->printCard();
    ?>
</body>

</html>