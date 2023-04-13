<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
header('Content-Type: text/html; charset=utf-8');
require("../service/Settings.php");
require("../service/LangService.php");
require("../service/DatabaseService.php");


//session_start();
$prayRequestId = null;
if (!isset($_COOKIE['prayRequestId'])) {
    $prayRequestId = uniqid();
    setcookie("prayRequestId", $prayRequestId, time() + (86400 * 1), "/");
} else {
    $prayRequestId = $_COOKIE['prayRequestId'];
}

if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
    $_SESSION["message"] = "";
}

$dbService = new DatabaseService();
$result = $dbService->getPrayRequestsFromCurrentDay($prayRequestId);
if ($result->num_rows > 0) {
    $_SESSION["message"] = $_SESSION["lang.properties"] ["pagina.pedido.efetuado"];
    header("Location: message.php");
}

$_SESSION["selectedMenu"] = "prayRequest";

if (!isset($_SESSION["selectedMenu"])) {
    $_SESSION["selectedMenu"] = "prayRequest";
}

if (!isset($_SESSION["message"])) {
    $_SESSION["message"] = "";
}

?>
<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>

</head>
<body>
<?php require("top-menu.php"); ?>

<div style="padding-left:16px;padding-right: 5px">
<!--    <div style="padding-top: 15px">-->
<!--        <img src="static/logo.JPG">-->
<!--    </div>-->
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.pedir.oracao"] ?></h2>
    <p><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.descricao"] ?></p>
</div>

<div class="container">
    <span id="message" style="color: red"><?= $_SESSION["message"] ?></span>
    <form action="../service/prayRequest.php" method="post">
        <input type="hidden" name="prayRequestId" id="prayRequestId" value="<?= $prayRequestId; ?>"/>

        <div class="row">
            <div class="col-25">
                <label for="illness"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.enfermidade"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="illness" name="illness" placeholder="" class="largerCheckbox">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="tribulation"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.tribulacao"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="tribulation" name="tribulation" placeholder="" class="largerCheckbox">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="cause"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.causa"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="cause" name="cause" placeholder="" class="largerCheckbox">
            </div>
        </div>

        <div class="row">
            <div class="col-25">
                <label for="trip"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.viagem"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="trip" name="trip" placeholder="" class="largerCheckbox">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="family"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.acidentados"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="accident" name="accident" placeholder="" class="largerCheckbox">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="family"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.familia"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="family" name="family" placeholder="" class="largerCheckbox">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="witness"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.testemunhado"] ?></label>
            </div>
            <div class="col-75">
                <input type="checkbox" id="witness" name="witness" placeholder="" class="largerCheckbox">
            </div>
        </div>

        <div class="row">
            <div class="buttonDiv">
                <button class="button"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.confirmar"] ?></button>
            </div>
        </div>
    </form>
</div>

<?php require("bottom.php"); ?>

</body>
</html>
