<div style="padding-top: 10px;padding-bottom: 10px">
    <img src="static/logo.JPG" width="116" height="57"/>
</div>
<div class="topnav" id="myTopnav">
    <a href="accueil.php"><?= $_SESSION["lang.properties"]["pagina.menu.inicio"] ?></a>
    <a href="culteOnline.php"><?= $_SESSION["lang.properties"]["pagina.menu.culto.online"] ?></a>

    <!--   // //= $_SESSION["selectedMenu"] == 'prayRequest' ? 'class="active"' : '' -->
    <a href="circulaires.php">
        <?= $_SESSION["lang.properties"]["pagina.menu.circular"] ?>
    </a>

    <a href="collectes.php">
        <?= $_SESSION["lang.properties"]["pagina.menu.coleta"] ?>
    </a>

    <a href="demandesdeprieres.php">
        <?= $_SESSION["lang.properties"]["pagina.menu.pedir.oracao"] ?>
    </a>

    <a href="seatbooking.php">
            <?= $_SESSION["lang.properties"]["pagina.menu.agendamento"] ?>
    </a>

    <a href="admin.php"><?= $_SESSION["lang.properties"]["pagina.menu.administracao"] ?></a>

    <a href="estatuto.php">
        <?= $_SESSION["lang.properties"]["pagina.menu.estatuto"] ?>
    </a>

    <a href="contact.php">
        <?= $_SESSION["lang.properties"]["pagina.menu.contato"] ?>
    </a>

    <div class="dropdown">
        <button class="dropbtn"><img width="20" height="20" src="static/<?= $_SESSION["lang"] ?>.png"></button>
        <div class="dropdown-content">
            <?php if ($_SESSION["lang"] != "fr-be") { ?>
                <a href="../service/SwitchLang.php?lang=fr-be">
                    <img width="20" height="20" src="static/fr-be.png">
                </a>
            <?php } ?>

            <?php if ($_SESSION["lang"] != "pt-br") { ?>
                <a href="../service/SwitchLang.php?lang=pt-br">
                    <img width="20" height="20" src="static/pt-br.png">
                </a>
            <?php } ?>

            <?php if ($_SESSION["lang"] != "en-gb") { ?>
                <a href="../service/SwitchLang.php?lang=en-gb">
                    <img width="20" height="20" src="static/en-gb.png">
                </a>
            <?php } ?>


        </div>
    </div>

    <!--    <a href="../service/SwitchLang.php?lang=--><? //= $_SESSION["lang.switch"] ?><!--">-->
    <!--        <img width="20" height="20" src="static/--><? //= $_SESSION["lang.switch"] ?><!--.png">-->
    <!--    </a>-->
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>