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

<div style="padding-left:16px;padding-right: 5px">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.administracao"] ?></h2>
    <p><?= $_SESSION["lang.properties"]["pagina.autenticacao.descricao"] ?></p>
</div>

<div class="container">
    <span id="message" style="color: red"><?= $message ?></span>
    <form action="../service/loginService.php" method="post">
        <div class="row">
            <div class="col-25">
                <label for="user"><?= $_SESSION["lang.properties"]["pagina.autenticacao.usuario"] ?></label>
            </div>
            <div class="col-75">
                <input type="text" id="username" name="username" placeholder="">
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password"><?= $_SESSION["lang.properties"]["pagina.autenticacao.senha"] ?></label>
            </div>
            <div class="col-75">
                <input type="password" id="password" name="password" placeholder="">
            </div>
        </div>

        <div class="row">
            <div class="buttonDiv">
                <button class="button"><?= $_SESSION["lang.properties"]["pagina.autenticacao.conectar"] ?></button>
            </div>
        </div>
    </form>
</div>

<?php require("bottom.php"); ?>

</body>
</html>
