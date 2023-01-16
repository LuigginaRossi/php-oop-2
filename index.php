<!-- Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed 
il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia) -->
<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";

// //prova stampa category
// $category = new Category("cat", "icon_cat");

// var_dump($category);

// echo ;
//lavorare sul true false ($this) ? "avaiable" :"coming soon"



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
    <h1 class="text-center py-5">Pet Shop</h1>
    <span><i class="fa-solid fa-cat"></i><i class="fa-solid fa-dog"></i></span>


</body>
</html>