<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Plantilla</title>
    <link rel="stylesheet" href="styles/general.css">  
    <link rel="stylesheet" href="styles/capcelera.css">  
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/llista.css">  

</head>
<?php
    include "apps/GeneradorTenda.php";
    $db = GeneradorTenda::singleton();
    $llistaCamisetes = $db -> llistaProductes();
    $db -> close();
?>
<body>
    <header> <?php include "./capcelera.php" ?> </header>
    <main>
        <div class ="estoc">
            <?php foreach ($llistaCamisetes as $camiseta ):?>
                <a href = 'fitxa.php?id=<?= $camiseta -> getId() ?>' class ="fitxa">
                    <p class ="nom"> <?= $camiseta -> getNom() ?> </p>
                    <img src= 'img/<?= $camiseta -> getId() ?>.webp' alt='<?= $camiseta -> getId() ?>' class='roba'>
                    <p class = "preu"> <?= $camiseta -> getPreu() ?> €</p>
               </a>
            <?php   endforeach ; ?>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>