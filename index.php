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

$dogFood= new Food("cibo_cane.jpg", "Royal Canin", 50, true, $dogCategory, "dog treats", ["rise", "chicken"]);
$catFood= new Food("cibo_gatto.jpg", "Royal Canin", 30.989 , false, $catCategory,"cat treats", ["salmon"] );
$tiragraffi= new Game("tiragraffi.jpg","Tiragraffi", 20, false, $catCategory, ["wood", "string"]);
$peluche= new Game("gioco_cane.jpg", "Peluche", 19.45, true, $dogCategory, ["coton"]);
$kennel= new Product("cuccia.jpg", "Cuccia", 50.894, false, $dogCategory, ["coton", "plastic"]);
$featherRod= new Game("gioco_gatto.jpg", "Asta con piume", 20.355, true, $catCategory, ["wood", "plastic"]);
var_dump($dogFood, $catFood, $tiragraffi, $peluche);

$productList= [
    $dogFood,
    $catFood,
    $tiragraffi,
    $peluche,
    $kennel,
    $featherRod,
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title>Pet Shop</title>


</head>

<body>
    <h1 class="text-center pt-5">Pet Shop</h1>
    <!-- <i class="fa-solid fa-cat"></i>
    <i class="fa-solid fa-dog"></i> -->

    <div class="container py-4">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php foreach($productList as $product) :?>
                <div class="col">
                    <div class="card">
                        <img src="imgs/<?php echo $product->getImg() ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->getProductName() ?></h5>
                            <div class="card-text">
                                <?php echo 
                                "Available: " . $product->getAvailable() . "<br>".
                                "Price: " . $product->getPrice() ."&#8364;". "<br>"
                                ?>
                            </div>
                            <?php if(method_exists($product, "getTypology")) : ?>
                                <div>
                                    <!-- food typology -->
                                    <?php echo "Typology: " . $product->getTypology() . "<br>" .
                                      "Ingredients: " .   implode(" , " ,$product->getIngredients()) ?>
                                </div>
                            <?php endif ?>

                            <?php if(method_exists($product, "getMaterials")) : ?>
                                <div>
                                    <!-- game -->
                                    <?php echo "Materials: " . implode(" , ", $product->getMaterials()) . "<br>" ?>
                                </div>
                            <?php endif ?>
                          <div>
                            <?php echo $product->getCategory()["name"] ?>
                            <?php echo $product->getCategory()["icon"] ?>

                          </div>
                        
                        </div>   
                    </div>
                </div>
            <?php endforeach ?>
        </div>
</body>

</html>