<?php
require("../service/Settings.php");
require("../service/LangService.php");

header('Content-Type: text/html; charset=utf-8');

if (!isset($_SESSION["lang"])) {
    $lang = new LangService();
    //$lang->switchLang("fr-be");
    $lang->switchLang("pt-br");
}

if (!isset($_SESSION["selectedMenu"])) {
    $_SESSION["selectedMenu"] = "service";
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php require("header.php"); ?>
</head>
<body>
<?php require("top-menu.php"); ?>

<div style="padding-left:16px;padding-right: 5px;text-align: center">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.culto"] ?></h2>
</div>
<div style="padding-left:16px;padding-right: 5px">
    <h4><?=$_SESSION["lang.properties"]["pagina.culto.online.horario.titulo"] ?></h4>
    <p><?=$_SESSION["lang.properties"]["pagina.culto.online.horario.descricao"] ?>

    <p><?=$_SESSION["lang.properties"]["pagina.culto.online.horario.sabado"] ?>
       <br><?=$_SESSION["lang.properties"]["pagina.culto.online.horario.domingo"] ?></p>


</div>
<div class="container">

    <?php

    if (isset($_SESSION["lang"]) && $_SESSION["lang"] == 'pt-br') {
        ?>
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.conexao"] ?></strong></button>
        <div class="panel">


            <!-- INFORMACOES PARA CONEXAO-->
            <div>
                <ul>
                    <li><strong>Assistir o santo culto através do YOUTUBE:</strong> Utilizar smartphones, tablets ou
                        computadores
                        que tenham acesso à internet.

                        <div style="padding-left: 30px" class="row">
                            <!--                        <div class="column" style="width: 20%;">-->
                            <!--                            <a href="">-->
                            <!--                                <img src="static/youtube.png" class="responsive">-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!---->
                            <!--                        <div class="column"  style="width: 80%;">-->
                            <!--                            [CLIQUE AQUI PARA ASSISTIR]-->
                            <!--                        </div>-->
                            </br>
                            <ol>
                                <li>Clicar no link do Youtube 30 minutos antes de começar o santo culto pois a meia hora
                                    será
                                    executada.
                                </li>
<!--                                <li>A cada santo culto um novo link do Youtube será disponibilizado neste site web.</li>-->
                            </ol>
                            </br>
                            <table>
                                <tr>
                                    <td><a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank">
                                            <img src="static/youtube.png" class="responsive">
                                        </a></td>
                                    <td>
                                        <a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank">[CLIQUE AQUI PARA ASSISTIR]</a>
                                    </td>

                                </tr>

                            </table>
                        </div>
                    </li>
                </ul>

<!--                <ul>-->
<!--                    <li><strong>Ouvir o santo culto através de chamada telefônica:</strong>Caso os irmãos não tenham-->
<!--                        acesso-->
<!--                        à-->
<!--                        internet para participar dos santos cultos, podem ligar para o número abaixo e seguir as-->
<!--                        instruções:-->
<!---->
<!--                        <div style="padding-left: 30px">-->
<!--                            </br> +32 2 588 4188-->
<!--                            </br> +32 1579 5132-->
<!--                            </br> +32 2 290 9360-->
<!--                            </br>-->
<!--                            </br> ID da reunião: 725-201-0380 #-->
<!--                            </br>-->
<!--                            </br> Por favor, utilizar esse número somente em caso de necessidade.-->
<!--                        </div>-->
<!--                    </li>-->
<!--                </ul>-->

                <ul>
                    <li><strong>Pedido de orações:</strong>
                        </br>
                        <div style="padding-left: 30px;padding-top: 15px">
                            <ol>
                                <li>Antes de começar o santo culto, os irmãos que sentem de pedir oração deverão acessar
                                    o menu <a
                                            href="https://www.congregationchretienne.be/demandesdeprieres">Pedir
                                        Oração</a> neste site
                                </li>
                                <li>Selecionar os pedidos de oração e clicar no botão "Confirmar Pedido".
                                </li>
                            </ol>
                        </div>
                    </li>
                </ul>

                <p>Caso tenha alguma dificuldade para acessá-lo, entrar em contato com algum irmão membro da
                    Administração
                    antes do santo culto iniciar. </p>
            </div>


        </div>


        <!-- INFORMACOES PARA A IRMANDADE -->
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.irmandade"] ?></strong></button>
        <div class="panel">
            <div>
                <ul>
                    <li>Estar vestido(a) como fosse ao santo culto na igreja</li>
                    <li>As irmãs devem estar cobertas com véu.</li>
                    <li>Fazer a sua oração individual e esperar o santo culto iniciar.</li>
                    <li>Não se distrair com as coisas da casa. Estar em comunhão.</li>
                    <li>Usemos essa liberdade com entendimento para louvarmos ao nosso Deus.
                    </li>
                    <li><strong>É estritamente vedada qualquer tipo de gravação, reprodução ou compartilhamento dos
                            áudios e
                            vídeos gerados nos santos cultos.</strong>
                    </li>
                </ul>

                <p>“Louvai ao Senhor, porque é bom cantar louvores ao nosso Deus; isto é agradável; decoroso é o louvor”
                    -
                    Salmos 147</p>
            </div>
        </div>

    <?php } ?>



    <?php
    if (isset($_SESSION["lang"]) && $_SESSION["lang"] == 'en-gb') {
        ?>
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.conexao"] ?></strong></button>
        <div class="panel">


            <!-- INFORMACOES PARA CONEXAO-->
            <div>
                <ul>
                    <li><strong>The online services can be viewed on YouTube:</strong> Please connect using a
                        smartphone, tablet or a computer with internet access.

                        <div style="padding-left: 30px" class="row">
                            <!--                        <div class="column" style="width: 20%;">-->
                            <!--                            <a href="">-->
                            <!--                                <img src="static/youtube.png" class="responsive">-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!---->
                            <!--                        <div class="column"  style="width: 80%;">-->
                            <!--                            [CLIQUE AQUI PARA ASSISTIR]-->
                            <!--                        </div>-->
                            </br>
                            <ol>
                                <li>The link will be live 30 minutes prior to the start of the services.
                                </li>
                                <!--                            <li>Each online service will have a unique link that will be available on this site.-->
                                <!--                            </li>-->
                            </ol>
                            </br>
                            <table>
                                <tr>
                                    <td><a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank">
                                            <img src="static/youtube.png" class="responsive">
                                        </a></td>
                                    <td>
                                        <a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank">[Click here to watch]</a>
                                    </td>

                                </tr>

                            </table>
                        </div>
                    </li>
                </ul>

                <ul>
                    <li><strong>Listening to the online services by phone:</strong> Those who cannot watch services
                        online via YouTube have the possibility to listen in by calling the landline numbers below:

                        <div style="padding-left: 30px">
                            </br>+32 2 588 4188
                            </br>+32 1579 5132
                            </br>+32 2 290 9360
                            </br>
                            </br> Meeting ID: 725-201-0380 #
                            </br>
                        </div>
                    </li>
                </ul>

                <ul>
                    <li><strong>Prayer Requests</strong>
                        </br>
                        <div style="padding-left: 30px;padding-top: 15px">
                            <ol>
                                <li> If you would like the church to pray for a need, you can present your request via
                                    the <a
                                            href="https://www.congregationchretienne.be/view/demandesdeprieres.php">Prayer
                                        Request</a> form prior to the beginning of the service.
                                </li>
                                <li>Please select the type of request and click on the "Submit" button.
                                </li>
                            </ol>
                        </div>
                    </li>
                </ul>

                <p>If there are any problems accessing the online services please contact us.</p>
            </div>


        </div>


        <!-- INFORMACOES PARA A IRMANDADE -->
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.irmandade"] ?></strong></button>
        <div class="panel">
            <div>
                <ul>
                    <li>Please wear the same types of clothing as we would in a church building;</li>
                    <li>Sisters should wear their veils;</li>
                    <li>In the time preceding the service, pray privately;</li>
                    <li>Find a quiet environment to connect to the service, and be in communion;</li>
                    <li><strong>The Christian Congregation in Belgium does not authorize the recording, reproduction or sharing of online
                            services.</strong></li>
                </ul>

                <p>“How good it is to sing praises to our God, how pleasant and fitting to praise him” - Psalm 147</p>
            </div>
        </div>

    <?php } ?>

    <?php

    if (isset($_SESSION["lang"]) && $_SESSION["lang"] == 'fr-be') {
        ?>
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.conexao"] ?></strong></button>
        <div class="panel">


            <!-- INFORMACOES PARA CONEXAO-->
            <div>
                <ul>
                    <li><strong>Regardez le service via YOUTUBE:</strong> L'accès aux services de culte en ligne peut
                        être effectué par des smartphones, des tablettes et des ordinateurs dotés d'Internet.

                        <div style="padding-left: 30px" class="row">
                            <!--                        <div class="column" style="width: 20%;">-->
                            <!--                            <a href="">-->
                            <!--                                <img src="static/youtube.png" class="responsive">-->
                            <!--                            </a>-->
                            <!--                        </div>-->
                            <!---->
                            <!--                        <div class="column"  style="width: 80%;">-->
                            <!--                            [CLIQUE AQUI PARA ASSISTIR]-->
                            <!--                        </div>-->
                            </br>
                            <ol>
                                <li>Accédez au lien YouTube 30 minutes avant le début du service, car la demi-heure sera
                                    déjà jouée.
                                </li>
<!--                                <li>A chaque service un nouveau lien Youtube sera mis à disposition sur ce site.-->
<!--                                </li>-->
                            </ol>
                            </br>
                            <table>
                                <tr>
                                    <td><a href="">
                                            <a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank"><img src="static/youtube.png" class="responsive"></a>
                                        </a></td>
                                    <td>
                                        <a href="https://www.youtube.com/channel/UCrwn9COxouYpQzSkaQD0k9Q" target="_blank"> [CLIQUEZ ICI POUR REGARDER]</a>
                                    </td>

                                </tr>

                            </table>
                        </div>
                    </li>
                </ul>

                <ul>
                    <li><strong>Écoutez le service par un appel téléphonique:</strong>Si les frères n'ont pas accès à
                        Internet, pour accéder à la salle virtuelle, vous pouvez appeler le numéro:

                        <div style="padding-left: 30px">
                            </br> +32 2 588 4188
                            </br> +32 1579 5132
                            </br> +32 2 290 9360
                            </br>
                            </br> ID de la reunion: 725-201-0380 #
                            </br>
                        </div>
                    </li>
                </ul>

                <ul>
                    <li><strong>Demandes de prières:</strong>
                        </br>
                        <div style="padding-left: 30px;padding-top: 15px">
                            <ol>
                                <li>Avant de commencer le service, le frère et sœurs qui se sentent de demander la
                                    prière, doivent entrer <strong><a
                                                href="https://www.congregationchretienne.be/demandesdeprieres">[ICI] -
                                            Demandes de prières</a></strong>
                                </li>
                                <li>Cliquer sur le champ qui correspond et appuyer sur le bouton "Confirmer la command".
                                </li>
                            </ol>
                        </div>
                    </li>
                </ul>

                <p>Si vous rencontrez des difficultés pour y accéder, contactez un membre de l'administration avant le
                    début du service </p>
            </div>


        </div>


        <!-- INFORMACOES PARA A IRMANDADE -->
        <button class="accordion">
            <strong><?= $_SESSION["lang.properties"]["pagina.titulo.culto.instrucoes.irmandade"] ?></strong></button>
        <div class="panel">
            <div>
                <ul>
                    <li>Être habillé comme si vous alliez au service de culte normalement dans une maison de prière.
                    </li>
                    <li>Les sœurs doivent être couvertes par le voile.</li>
                    <li>Faite votre prière individuelle et attendez que le service commence.</li>
                    <li>Ne vous laissez pas distraire par les choses de la maison. Être en communion.</li>
                    <li>Utilisons cette liberté avec compréhension pour louer notre Dieu.
                    </li>
                </ul>

                <p>“Louez l'Éternel! Car il est beau de célébrer notre Dieu, Car il est doux, il est bienséant de le
                    louer ”
                    -
                    Psaumes 147</p>
            </div>
        </div>

    <?php } ?>
</div>

<?php require("bottom.php"); ?>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
