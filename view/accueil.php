<?php
require("../service/Settings.php");
require("../service/LangService.php");

header('Content-Type: text/html; charset=utf-8');

if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
}


?>
<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>
</head>

<body>
<?php require("top-menu.php"); ?>
<div style="padding-top: 50px">
    <!--    <p align="center"><img src="static/logo.JPG"/></p>-->
    <!--<p align="center"><span title="This translation could be wrong"> </span><span title="This translation could be wrong"> </span>Ce<strong>tt</strong><strong>e pag</strong><strong>e e</strong><strong>st </strong><strong>en cours</strong><strong> de</strong><strong> maintenance</strong>. </p>-->
    <p align="center">E-mail: secretariat@congregationchretienne.be

    </p>
</div>

<div style=" padding-top: 70px
            ">
    <?php require("bottom.php"); ?>
</div>


</body>
</html>
