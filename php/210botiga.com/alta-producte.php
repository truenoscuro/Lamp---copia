<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alta productes</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/capcelera.css">  
</head>
<?php
include "configs/Para.php" ;
include "apps/TendaSql.php" ;
$para = Para::get() ;
$db = new TendaSql( $para) ;
$id = $db -> addProducte( $_POST["nom"] , $_POST["preu"] , $_POST["descripcio"],$_FILES) ;
$db -> close() ;
// agregar imagen
?>

<body>
<header> <?php  include "./capcelera.php"?> </header>
<main>
    <h1> INCLÓS</h1>
</main>
</body>
</html> 