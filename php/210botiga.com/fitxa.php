<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/capcelera.css">
    <link rel="stylesheet" href="styles/fitxa.css">
</head>
<?php
include "apps/GeneradorTenda.php";
$db = GeneradorTenda::singleton();
$id = $_GET["id"];
// te torna un array d'un array interesant
$camiseta = $db ->producte( $id );
$db -> close();
?>
<body>
<header> <?php include "./capcelera.php" ?> </header>
<main>
    <div class="fitxa">
        <img src='<?= "img/".$camiseta -> getId().".webp" ?>' alt='<?= $camiseta -> getId() ?>'  >
        <div class="caProducte">
            <h1 class = "nom"> <?= $camiseta -> getNom() ?> </h1>
            <p class = "descripcio"  > <?= $camiseta -> getDescripcio() ?> </p>
            <h1 class = "preu"> <?= $camiseta -> getPreu() ?> € </h1>
            <a href="carreto.php"> COMPRA! </a>
        </div>
    </div>
</main>

<footer>
  
</footer>
</body>
</html>