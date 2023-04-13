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
    <h2>Agendamento</h2>

</div>

<div style="overflow-x:auto;">

    <div class="divTable" style="width: 50%;">
        <div class="divTableBody">
            <br>
               <div class="divTableRow">

                              <div class="divTableCell">
                                                <p style="margin:0 ;font-size: larger">

                                                Chèrs freres et soeurs, la paix de Dieu. Veuillez svp noter que la prise de rendez-vous en ligne ne se fait plus nécessaire pour la participation aux cultes à la maison de prière de Bruxelles.
                                                Dieu vous bénisse

                                                LAdministration
                                                </p>
                                            </div>
                        </div>
<br>
<br>
<br>
            <div class="divTableRow">
                <div class="divTableCell">
                    <p style="margin:0 ;font-size: larger">Prezada irmandade, a paz de Deus. Informamos que não é mais necessário proseguir com o agendamento para participar dos cultos na casa de oração de Bruxelas.
                                                           Deus vos abençoe
                                                           Administração</p>
                </div>

            </div>
        </div>
    </div>


</div>

<?php require("bottom.php"); ?>

</body>
</html>