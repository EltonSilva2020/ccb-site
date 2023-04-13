<?php
require("../service/Settings.php");
require("../service/LangService.php");

header('Content-Type: text/html; charset=utf-8');
if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
}

//    if (!isset($_SESSION["prayInserted"]) || $_SESSION["prayInserted"] != true) {
//        header("Location: index.php");
//    } else {
//        $_SESSION["prayInserted"] = null;
//    }

?>
<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>

</head>

<body>

<?php require("top-menu.php"); ?>

<div style="padding-left:16px;padding-right: 5px;text-align: center">
    <h2><?= $_SESSION["lang.properties"] ["pagina.titulo.pedido.feito"]; ?></h2>
</div>

<div class="container">
    <div style="text-align: center !important;">
        <span style="color: #45a049;font-weight: bold;font-size: medium"> <?= $_SESSION["lang.properties"] ["pagina.pedido.efetuado"]; ?></span>
    </div>
</div>
<?php require("bottom.php"); ?>

</body>
</html>
