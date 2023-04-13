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

<div style="padding-left:16px;padding-right: 5px;text-align: center">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.coleta"] ?></h2>

</div>

<div style="overflow-x:auto;">

    <div align="center" style="padding-bottom: 40px;color: red;font-weight: bold;font-size: larger">
        <?= $_SESSION["lang.properties"]["pagina.coleta.aviso"] ?>
    </div>


    <div class="divTable" style="width: 50%;">
        <div class="divTableBody">
            <div class="divTableRow">
                <div class="divTableCell"><span
                            style="font-size: larger"><b> <?= $_SESSION["lang.properties"]["pagina.coleta.destino"] ?></b></span>
                </div>
                <div class="divTableCell"><span
                            style="font-size: larger"> <?= $_SESSION["lang.properties"]["pagina.coleta.destino.opcoes"] ?></span>
                </div>
            </div>
            <br>
            <div class="divTableRow">
                <div class="divTableCell"><span
                            style="font-size: larger"><b> <?= $_SESSION["lang.properties"]["pagina.coleta.casaoracao"] ?></b></span>
                </div>
                <div class="divTableCell"><span
                            style="font-size: larger"><?= $_SESSION["lang.properties"]["pagina.coleta.casaoracao.opcoes"] ?></span>
                </div>
            </div>
            <br>
            <div class="divTableRow">
                <div class="divTableCell"><span
                            style="font-size: larger"><b><?= $_SESSION["lang.properties"]["pagina.coleta.dadosbancarios"] ?></b></span>
                </div>
                <div class="divTableCell">
                    <p style="margin:0 ;font-size: larger"><?= $_SESSION["lang.properties"]["pagina.coleta.dadosbancarios.opcoes.1"] ?></p>
                    <p style="margin:0 ;font-size: larger"><?= $_SESSION["lang.properties"]["pagina.coleta.dadosbancarios.opcoes.2"] ?></p>
                    <p style="margin:0 ;font-size: larger"><?= $_SESSION["lang.properties"]["pagina.coleta.dadosbancarios.opcoes.3"] ?></p>
                    <p style="margin:0 ;font-size: larger"><?= $_SESSION["lang.properties"]["pagina.coleta.dadosbancarios.opcoes.4"] ?></p>
                </div>
            </div>
        </div>
    </div>


</div>

<?php require("bottom.php"); ?>

</body>
</html>