<?php

require_once "./classes/Product.php";
require_once "./classes/Category.php";
require_once "./classes/Food.php";
require_once "./classes/Game.php";


$product1 = new Product("url.img", "name", 50, false, new Category("nomeCategoria", "icona"));
var_dump($product1);
echo "disponibile: " . $product1->getAvailable();

$catCategory= new Category("Cat", "fa-cat");
$dogCategory= new Category("Dog", "fa-dog");

$cuccia= new Food("cibo_cane.jpg", "Royal Canin", 50, true, $dogCategory, "dog treats", ["rise", "chicken"]);
var_dump($cuccia);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Pet Shop</title>


</head>

<body>
    <h1 class="text-center pt-5">Pet Shop</h1>
    <!-- <span><i class="fa-solid fa-cat"></i><i class="fa-solid fa-dog"></i></span> -->

    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php ?>
                <div class="col">
                    <div class="card">
                        <img src="imgs/" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">
                                
                            </p>
                        </div>   
                    </div>
                </div>
            <?php ?>
        </div>
</body>

</html>