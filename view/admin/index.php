<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    header('Content-Type: text/html; charset=utf-8');
    require("../service/DatabaseService.php");

    if (!isset($_SESSION["lang"])) {
        $lang = new LangService();
        //$lang->switchLang("fr-be");
        $lang->switchLang("pt-br");
        $_SESSION["message"] = "";
    }

    if (!isset($_SESSION["username"])) {
        header("Location: /view/login.php");
    }

    ?>

    <?php require("../header.php"); ?>

<body>

<?php require("../top-menu.php"); ?>


<div style="padding-left:16px;padding-right: 5px">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.pedir.oracao"] ?></h2>
</div>

<div class="container">
    <div style="overflow-x:auto;">
        <table>
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
                        <img src="../static/logo.JPG">
                    </div>
                </th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.enfermidade"] ?></th>
                <th><?= $row['illness'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.tribulacao"] ?></th>
                <th><?= $row['tribulation'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.causa"] ?></th>
                <th><?= $row['cause'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.viagem"] ?></th>
                <th><?= $row['trip'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.acidentados"] ?></th>
                <th><?= $row['accident'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.familia"] ?></th>
                <th><?= $row['family'] ?></th>
            </tr>
            <tr>
                <th colspan="2"></th>
            </tr>
            <tr>
                <th width="80%"
                    style="text-align: left"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.testemunhado"] ?></th>
                <th><?= $row['cause'] ?></th>
            </tr>
            <tr>
                <th colspan="2" style="padding-bottom: 35px"></th>
            </tr>
            <tr>
                <th colspan="2"><?= $_SESSION["lang.properties"]["pagina.pedir.oracao.data"] ?><?= date("d/m/Y") ?></th>
            </tr>
        </table>
    </div>
</div>

<?php require("../bottom.php"); ?>

</body>
</html>
