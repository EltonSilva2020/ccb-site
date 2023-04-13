<?php
//error_reporting(E_ALL);
//ini_set('display_errors', TRUE);
require("../service/Settings.php");
require("../service/LangService.php");
require("../service/DatabaseService.php");
//session_start();
header('Content-Type: text/html; charset=utf-8');

$_SESSION["selectedMenu"] = "admin";
$_SESSION["message"] = "";
if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
}

if (!isset($_SESSION["selectedMenu"])) {
    $_SESSION["selectedMenu"] = "admin";
}

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>
</head>

<body>

<?php require("top-menu.php"); ?>


<div style="padding-left:16px;padding-right: 5px" align="center">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.admin"] ?></h2>
</div>

<div style="overflow-x:auto;" align="center">
    <table style="background-color:#f2f2f2;width: 25% !important;">
        <?php

        // $conn = new mysqli("localhost", "flavio", "8zK_L0wVLL0", "ccb");
        // $conn = new mysqli("localhost", "flawellc_ccb", "8zK_L0wVLL0", "flawellc_ccb");
        $dbService = new DatabaseService();
        $conn = $dbService->getConnection();
        if ($conn->connect_error) {
            echo "Erro: Failed to connect to MySQL: " . $mysqli->connect_error;
        }

        $sql = "SELECT sum(cause) cause ,sum(tribulation) tribulation, sum(trip) trip, sum(illness) illness, sum(witness) witness, sum(family) family, sum(accident) accident FROM prayrequest WHERE DATE(requestDate) = CURDATE()";
        $result = $conn->query($sql);

        $row = $result->fetch_assoc();
        ?>
        <tr>
            <th colspan="2">
                <div style="padding-bottom: 15px">
                    <img src="static/logo.JPG" width="232" height="115">
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"><h2><?= $_SESSION["lang.properties"]["pagina.titulo.pedir.oracao"] ?></h2></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.enfermidade"] ?></th>
            <th width="32%">
                <div align="left">
                    <?= $row['illness'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.tribulacao"] ?></th>
            <th>
                <div align="left">
                    <?= $row['tribulation'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.causa"] ?></th>
            <th>
                <div align="left">
                    <?= $row['cause'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.viagem"] ?></th>
            <th>
                <div align="left">
                    <?= $row['trip'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.acidentados"] ?></th>
            <th>
                <div align="left">
                    <?= $row['accident'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.familia"] ?></th>
            <th>
                <div align="left">
                    <?= $row['family'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2"></th>
        </tr>
        <tr>
            <th width="68%"
                style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.testemunhado"] ?></th>
            <th>
                <div align="left">
                    <?= $row['cause'] ?>
                </div>
            </th>
        </tr>
        <tr>
            <th colspan="2" style="padding-bottom: 35px"></th>
        </tr>
        <tr>
            <th colspan="2"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.data"] ?><?= date("d/m/Y") ?></th>
        </tr>
    </table>
</div>


<?php require("bottom.php"); ?>

</body>
</html>
