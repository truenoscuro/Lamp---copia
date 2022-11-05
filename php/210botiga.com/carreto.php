<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Carreto</title>
    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/capcelera.css">  
    <link rel="stylesheet" href="styles/carreto.css">  
</head>
<?php
$llista = array(
    array("nom"=> "nom1","preu"=>20,"quantitat"=> 2),
    array("nom"=> "nom2","preu"=>10,"quantitat"=> 1),
    array("nom"=> "nom3","preu"=>30.5,"quantitat"=> 1),
);

$total = 0;
$llistaNova = array();
foreach ($llista as $producte) {
    $pQ = $producte["preu"] * $producte["quantitat"];
    $total += $pQ;
    $producte += array("pQ" => $pQ);
    $llistaNova[] = $producte;
}
?>

<body>
<header> 
    <?php include "./capcelera.php"  ?>
</header>
<main>

<table class="taula">
    <thead>
        <tr>
            <th> Nom </th>
            <th> Preu </th>
            <th> Quantitat </th>
            <th> Preu X Quantitat </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($llistaNova as $producte) :?>
        <tr>
            <td> <?= $producte["nom"] ?> </td>
            <td> <?= $producte["preu"] ?> </td>
            <td> <?= $producte["quantitat"] ?> </td>
            <td> <?= $producte["pQ"] ?> </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    <tfoot>
        <tr>
            <td> Total </td>
            <td> <?= $total ?> </td>
        </tr>
    </tfoot>
</table>
</main>
</body>
</html>