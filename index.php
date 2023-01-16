<!-- Stampiamo delle card contenenti i dettagli dei prodotti, 
come immagine, titolo, prezzo, icona della categoria ed 
il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia) -->
<?php
require_once "./classes/Product.php";
require_once "./classes/Category.php";

//prova stampa product
$product1 = new Product("imgs/cuccia.jpg", "cuccia", 40, true);

var_dump($product1);

echo "Disponibilità: " . $product1->getAvailable() ;
//lavorare sul true false ($this) ? "avaiable" :"coming soon"



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Pet Shop</title>


</head>
<body>
    <h1 class="text-center py-5">Pet Shop</h1>


</body>
</html>