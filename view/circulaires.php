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
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.circular"] ?></h2>

</div>

<div style="overflow-x:auto;">
    <table align="center" class="tableLayout">
        <tr>
            <th><?= $_SESSION["lang.properties"]["pagina.circular.tabela.cabecalho.titulo"] ?></th>
            <th><?= $_SESSION["lang.properties"]["pagina.circular.tabela.cabecalho.data"] ?></th>
            <th><?= $_SESSION["lang.properties"]["pagina.circular.tabela.cabecalho.numero"] ?></th>
            <th><?= $_SESSION["lang.properties"]["pagina.circular.tabela.cabecalho.documento"] ?></th>
        </tr>
        <tr>
            <td><?= $_SESSION["lang.properties"]["document.circular.05-2020"] ?></td>
            <td style="text-align: center;">17-04-2020</td>
            <td style="text-align: center;">05-2020</td>
            <td style="text-align: center;">
                <a target="_blank" href="../documents/circular/Circulaire-05-2020-Français-Portugais.pdf">
                    <img width="40" height="40" src="static/adobe-pdf-icon.png">
                </a>
            </td>
        </tr>
        <tr>
            <td><?= $_SESSION["lang.properties"]["document.circular.07-2021"] ?></td>
            <td style="text-align: center;">12-06-2020</td>
            <td style="text-align: center;">07-2021</td>
            <td style="text-align: center;">
                <a target="_blank" href="../documents/circular/Circulaire 07-2021-Français-Portugais.pdf">
                    <img width="40" height="40" src="static/adobe-pdf-icon.png">
                </a>
            </td>
        </tr>
    </table>
</div>

<?php require("bottom.php"); ?>

</body>
</html>
