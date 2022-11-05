<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta producte</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/capcelera.css">  
    <link rel="stylesheet" href="styles/form-afegir-producte.css">  
</head>
<body>
<header>
<?php include "capcelera.php"   ?>
</header>
<main>

    <form class="formulari" method="post" action="alta-producte.php" enctype="multipart/form-data"> <!-- Si pases fitxes a de ser post-->
        <p>
            <label for="nom">Nom producte</label>
            <input type="text" name="nom" id="nom">
        </p>
        <p>
            <label for="descripcio">Descripcio producte</label>
            <input type="text" name="descripcio" id="descripcio">
        </p>
        <p>
            <label for="preu">Preu producte</label>
            <input type="number" step="0.01" name="preu" id="preu">
        </p>
        <p>
            <label for="imagen"> Fotografia:</label>
            <input type="file" name="imagen" id="imagen">
        </p>
            <input type="submit" name="submit" value="Procesar" class="submit">
        
    </form>






</main>
<footer>


</footer>
</body>
</html>