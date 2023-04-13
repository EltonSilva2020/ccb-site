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
</head>

<body>
<?php require("top-menu.php"); ?>

<h1 style="color:black;text-align:center">Agendamento para os cultos presenciais estará disponível em breve.</h1>


<?php require("bottom.php"); ?>
</body>
</html>
