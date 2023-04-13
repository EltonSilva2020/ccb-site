<?php
require("../service/Settings.php");
require("../service/LangService.php");

header('Content-Type: text/html; charset=utf-8');

if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
}

$message = $_SESSION["message"];
$_SESSION["message"] = "";
?>

<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>
    
    <style>
        hr {
            width: 30%;
        }
    </style>
</head>

<body>
<?php require("top-menu.php"); ?>

<div style="padding-left:16px;padding-right: 5px;text-align: center">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.contato"] ?></h2>

</div>

<div style="overflow-x:auto;text-align: center">
    <h3>Liege Siege social</h3>
    <p>ASBL Congrégation Chrétienne en Belgique</p>
    <p>Rue Alexandre Raick 28 , 4101 Seraing</p>
    <p> Jours de culte Dim 17:00 - Jeu 19:00(RJM 1° e 3° Dim 17:00)</p>
</div>
<hr>

<div style="overflow-x:auto;text-align: center">
    <h3>Bruxelles</h3>
    <p>Rue Bollinckx 15, 1070 Anderlecht</p>
    <p>Jours de culte Dim 18:00 - Ven 20:00 - Mer-Sam 19:30(RJM Dim 10:00)</p>
</div>
<hr>
<div style="overflow-x:auto;text-align: center">
    <h3>Opwijk</h3>
    <p>Salle/Kamer Duivenzolder, Kloosterstraat 7, 1745 Opwijk</p>
    <p>Jour de culte Sam 20:00</p>
</div>
<hr>

<div style="overflow-x:auto;text-align: center">
    <h3>Quaregnon</h3>
    <p>Rue César Depaepe 117, 7390 Quaregnon</p>
    <p>Jour de culte Sam 15:00</p>
</div>
<hr>

<div style="overflow-x:auto;text-align: center">
    <h3>Merelbeke</h3>
    <p>Pastoor Clausplein 1, 9820 Merelbeke </p>
    <p>Jours de culte 2° e 4° dimanche á 10:30</p>
</div>
<hr>

<?php require("bottom.php"); ?>

</body>
</html>
