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
    
    <style>
        hr {
            width: 30%;
        }
    </style>
</head>

<body>
<?php require("top-menu.php"); ?>

<div style="padding-left:16px;padding-right: 5px;text-align: center">
    <h2><?= $_SESSION["lang.properties"]["pagina.titulo.estatuto"] ?></h2>
</div>
<div class="page">
    <div class="container">
        
        <ul class="breadcrumb ml-0">
            <li class="breadcrumb-item"><a href="/institucional">Institucional</a></li>
            <li class="breadcrumb-item">Estatuto</li>
        </ul>
        <div class="box">
            <div class="d-lg-flex justify-content-between align-items-end mb-4">
                <h1>ESTATUTO</h1>
                <div id="font-box">
                    <a href="#" class="text-size-decrease"><i class="fas fa-font"></i></a>
                    <a href="#" class="text-size-increase"><i class="fas fa-font"></i></a>
                    <a href="#" class="text-size-default"><i class="fas fa-sync-alt"></i></a>
                </div>
            </div>
<div class="text-size-changer">
                <h3>ESTATUTO PADRÃO<br><small>BRASIL</small></h3>
<h4 class="mt-4"><b>PREÂMBULO</b></h4>
<p>O Senhor iniciou Sua Obra no Brasil por um Seu servo, em junho de 1910, sem denominação alguma, propagando-se, todavia, rapidamente, por intermédio de Seus crentes, desde então chamados por fé, em Nosso Senhor Jesus Cristo.</p>
<p>Com o progresso da Obra, viu-se a necessidade de ser adquirida a propriedade do imóvel onde Seu povo já se congregava na Capital do Estado de São Paulo, sendo, então, escolhido o nome de Congregação Cristã do Brasil. Entretanto, por questões doutrinárias, houve a mudança do nome de Congregação Cristã do Brasil para Congregação Cristã no Brasil, o que se fez por Assembleia Geral Extraordinária, realizada em 21 de Abril de 1962, na Casa de Oração do Brás, na Capital de São Paulo, na Rua Visconde de Parnaíba n.o 1616, até então sede administrativa de todas as Congregações que seguem a mesma Fé e Doutrina no País.</p>
<p>
    Sempre que se fez necessário, este Estatuto foi reformado na sua parte administrativa, para governo das coisas materiais da Congregação. Na parte espiritual não existe nenhum governo humano, pois só o Divino prevalece, como se depreenderá dos artigos que se seguem.<br>
</p>
<div class="alert alert-info my-2">
    <p>O estatuto da Congregação Cristã no Brasil é o mesmo modelo em todas as suas administrações descentralizadas variando apenas SEDE e REGISTRO.</p>
</div>
<p class="bottom-30 color-theme">
    Em ..., este Estatuto foi reformado parcialmente e consolidado, em Assembléia Geral Extraordinária especialmente convocada, conforme determinação contida no “caput” de seu art. 43, estando registrado sob nº <i>301.383</i>, do Registro Civil de Pessoa Jurídica, em ..., perante o <i>...º Oficial de Registro de Títulos e Documentos e Civil de Pessoa Jurídica</i> da Comarca de ..., Estado de ....<br>
</p>
<h4 class="mt-4">
    <b>CAPÍTULO I</b><br>
    Denominação, Finalidade, Sede, Foro e Administração
</h4>
<p>
    <b>Art. 1º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL é uma comunidade religiosa fundamentada na doutrina apostólica (Atos 2:42 e 4:33), organizada nos termos do artigo 44, inciso IV da Lei 10.406/02, apolítica, sem fins lucrativos, constituída de número ilimitado de membros, sem distinção de sexo, nacionalidade, raça, ou cor, tendo por finalidade propagar o Evangelho de Nosso Senhor Jesus Cristo, o amor a Deus, tendo por cabeça só a Jesus Cristo e por guia o Espírito Santo (São João, 16:13). Iniciada em Junho de 1910, com Estatuto regularmente aprovado em 04 de Março de 1931 e reformado em 30 de Março de 1936, 23 de Abril de 1943, 29 de Novembro de 1944, 04 de Dezembro de 1946, 08 de Fevereiro de 1956, 21 de Abril de 1962, 12 de Abril de 1968, 23 de Abril de 1975, 04 de Abril de 1980, 13 de Abril de 1995, 10 de Abril de 2004 e 05 de Junho de 2013.
</p>
<p>
    <b>§ 1º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL tem sua personalidade jurídica amparada nos dispositivos da Constituição da República Federativa do Brasil, no Código Civil Brasileiro e legislação pertinente.
</p>
<p>
    <b>§ 2º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL não depende, nem mantem vínculo com instituições outras, quer no País, quer no exterior, porém, conserva comunhão espiritual com comunidades religiosas no exterior que professam a mesma Fé e Doutrina.
</p>
<p>
    <b>Art.2º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL terá sede e foro onde se instalarem suas Administrações, em consequência da descentralização administrativa deliberada pela Assembleia Geral de 21 de Abril de 1962, realizada na Casa de Oração da Rua Visconde de Parnaíba nº 1616, em São Paulo – SP, descentralização essa que teve por finalidade melhor gestão dos recursos ofertados pela irmandade, sem perda de sua unidade.
</p>
<p>
    <b>§ 1º</b>. Embora seja possível a descentralização administrativa prevista neste artigo, a Congregação Cristã no Brasil é espiritual e doutrinariamente una.
</p>
<p>
    <b>§ 2º</b>. A criação de nova pessoa jurídica descentralizada e a formação de sua respectiva Administração dependerão, sempre, da prévia autorização do Conselho dos Anciães mais Antigos do Brasil.
</p>
<p>
    <b>§ 3º</b>. A Administração constituída na cidade de &nbsp;, Estado de &nbsp;, tem sua sede na &nbsp;Rua / Avenida , nº &nbsp;, titulando e gerindo o patrimônio das cidades de &nbsp;, e o seu foro é o da Comarca de &nbsp;.
</p>
<p>
    <b>Art. 3º</b>. O tempo de duração da CONGREGAÇÃO CRISTÃ NO BRASIL é indeterminado.
</p>
<p>
    <b>Art. 4º</b>. Ao Ministério da CONGREGAÇÃO CRISTÃ NO BRASIL cabe o exercício de todas as atividades espirituais, bem como a ministração dos serviços sagrados, na forma prevista neste Estatuto, vedando-se nesse mister qualquer tipo de interferência dos administradores.
</p>
<p>
    <b>Art. 5º</b>. À Administração da CONGREGAÇÃO CRISTÃ NO BRASIL, constituída no mínimo por 3 (três) membros (presidente, secretário, tesoureiro e/ou respectivos vices), compete gerir o patrimônio e as questões administrativas, sempre em harmonia e sob o conselho do Ministério, na forma dos arts. 30 e seguintes deste Estatuto.
</p>
<p>
    <b>Parágrafo único</b>. É vedado o acúmulo, pelo mesmo membro, de cargo ministerial com cargo administrativo.
</p>
<p>
    <b>Art. 6º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL possui número ilimitado de casas de oração e de Administrações.&nbsp; À Administração de São Paulo – Capital compete coordenar e incluir em relatório anual, nos termos do § 1º, o movimento espiritual e material das demais casas de oração da mesma Fé em todo o País, cabendo-lhe também orientar as demais Administrações na aplicação das leis e questões administrativas.
</p>
<p>
    <b>§ 1º</b>. Anualmente é publicado, sob a denominação de “Relatório”, cadastro das casas de oração, constando os integrantes do Ministério de cada localidade, no País e no exterior.
</p>
<a name="gerais"></a>
<p>
    <b>§ 2º</b>. Todas as Administrações e casas de oração da CONGREGAÇÃO CRISTÃ NO BRASIL são regidas por Estatuto idêntico a este.
</p>

<h4 class="mt-4">
    <b>Disposições Gerais</b>
</h4>
<p>
    <b>Art. 7º</b>. A receita da CONGREGAÇÃO CRISTÃ NO BRASIL é auferida por coletas e ofertas voluntárias e anônimas, cujos valores devem ser aplicados integralmente em seus objetivos, observando-se fielmente suas finalidades, na Administração local ou em outra, a juízo da Reunião Ministerial prevista no artigo 32 do Estatuto. Em casos de calamidades, o Ministério dos Diáconos está autorizado às transferências, apresentando relatório na reunião subsequente.
</p>
<p>
    <b>§ 1º</b>. Ao final de cada exercício, os saldos a serem transferidos para o exercício seguinte, integrando o patrimônio social, por deliberação conjunta do Conselho de Anciães, Diáconos e Administração, poderão ter sua finalidade adequada a outras necessidades.
</p>
<p>
    <b>§ 2º</b>. Em decorrência da natureza de liberalidade, essas coletas e ofertas não geram qualquer direito, em tempo algum, sob qualquer pretexto.
</p>
<p>
    <b>Art. 8º</b>. Quem aceitar Jesus Cristo como seu Salvador, e Sua doutrina, conforme consta no “caput” do art. 1o e dos arts. 19, 20 e 21, submetendo-se ao santo batismo, ministrado segundo a fé e doutrina da CONGREGAÇÃO CRISTÃ NO BRASIL, é admitido como seu membro e assume uma responsabilidade pessoal para com Deus.
</p>
<p>
    <b>§ 1º</b>. Não faz jus a qualquer remuneração o membro exercente de qualquer cargo ou função, ministerial ou não, pelo exercício dessas funções.
</p>
<p>
    <b>§ 2º</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL poderá arcar com o custeio de viagens missionárias, quer no Brasil, quer no Exterior, desde que previamente autorizadas por deliberação do Ministério, em reunião, não possuindo essa liberalidade natureza remuneratória.
</p>
<p>
    <b>§ 3º</b>. O exercício de qualquer atividade voluntária, em prol da CONGREGAÇÃO CRISTÃ NO BRASIL, terá a natureza de oferta e assumirá índole de liberalidade.
</p>
<p>
    <b>Art. 9º</b>. Os membros da CONGREGAÇÃO CRISTÃ NO BRASIL, ocupantes de quaisquer cargos ou funções, ministeriais ou não, só poderão ser demitidos ou afastados do exercício deles, por deliberação do Conselho de Anciães (artigo 22 e parágrafos) que, sob a guia de Deus, decidirá soberanamente a respeito, nos seguintes casos:
</p>
<ol type="I">
    <li>a pedido;</li>
    <li>mudança para outra localidade;</li>
    <li>assunção de compromissos contrários aos princípios da CONGREGAÇÃO CRISTÃ NO BRASIL, ou que impliquem na ausência inevitável às reuniões ou na impossibilidade do atendimento pontual das exigências do cargo ou função;</li>
    <li>incapacidade física ou jurídica que os impeçam de exercer o cargo ou função;</li>
    <li>inidoneidade moral ou espiritual que os inabilitem para o cargo ou função;</li>
    <li>improbidade ou desídia; e</li>
    <li>quebra da fidelidade à doutrina ou à disciplina ministerial da CONGREGAÇÃO CRISTÃ NO BRASIL, a juízo do Conselho de Anciães.</li>
</ol>

<p>
    <b>Art. 10</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL, não impõe deveres exigíveis juridicamente nem outorga direitos materiais subjetivos aos seus membros. Apenas propaga a fé cristã-apostólica, dando cumprimento ao seu objetivo.
</p>
<p>
    <b>Art. 11</b>. A participação e manifestação individual dos membros, nos serviços religiosos, fazem parte do culto e dependem do juízo de quem o preside, sob a guia de Deus. A ministração dos serviços sagrados está sujeita à convicção espiritual do ministrante.
</p>
<p>
    <b>Parágrafo único</b>. O Conselho de Anciães, em proteção à sã Doutrina, poderá retirar a liberdade de manifestação nos cultos de qualquer membro, bem como comunicar às Igrejas para cumprimento dessa deliberação.
</p>
<p>
    <b>Art. 12</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL não se responsabiliza pelos atos pessoais praticados por qualquer dos seus membros.
</p>
<p>
    <b>Art. 13</b>. Todo o patrimônio adquirido em nome da CONGREGAÇÃO CRISTÃ NO BRASIL é fruto de contribuições e de ações voluntárias em benefício dela, que procura unificar-se sempre mais à fé apostólica na sua simplicidade e na sua sinceridade a Deus, conforme o Santo Evangelho, cuja Obra está sendo acompanhada pelo Senhor Jesus Cristo com seus sinais milagrosos, prometidos na Santa Palavra de Deus, não podendo, pois, ser dividido com qualquer grupo dissidente.
</p>
<p>
    <b>Art. 14</b>. Em caso de cisma ou separação, o patrimônio permanecerá com a CONGREGAÇÃO CRISTÃ NO BRASIL, não assistindo qualquer direito ao grupo que dela se separar.
</p>
<p>
    <b>Art. 15</b>. Não mais havendo irmandade numa localidade ou por conveniência administrativa, a critério da reunião prevista no art. 32 deste Estatuto, a pessoa jurídica e seu patrimônio serão incorporados à CONGREGAÇÃO CRISTÃ NO BRASIL indicada nos atos de incorporação.
</p>
<p>
    <b>Art. 16</b>. Dar-se-á a extinção da CONGREGAÇÃO CRISTÃ NO BRASIL quando for comprovado que não mais existam fiéis que sigam a mesma Fé e Doutrina, em todo Território Nacional. Dissolvida a CONGREGAÇÃO CRISTÃ&nbsp; NO BRASIL, far-se-á a sua liquidação de conformidade com as leis em vigor, destinando-se o seu patrimônio a asilos, orfanatos, escolas e hospitais públicos.
</p>
<p>
    <b>Art. 17</b>. Sendo a CONGREGAÇÃO CRISTÃ NO BRASIL, uma comunidade religiosa de doutrina apostólica, fundamentada na Bíblia Sagrada, nela não existe hierarquia; entretanto, é respeitada a antiguidade entre os membros do Ministério, honrada sempre a guia do Espirito Santo, observado o ensinamento apostólico de que aqueles que governam bem, com respeito à Palavra e à Doutrina, sejam tidos em duplicada honra.
</p>
<p>
    <b>Parágrafo único</b>. A presidência das reuniões ministeriais se fará por indicação do Conselho dos Anciães mais Antigos do Brasil, honrando-se, sempre, os dons que Deus distribuiu aos Seus servos.
</p>
<p>
    <b>Art. 18</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL mantém um serviço de assistência aos fiéis necessitados, conforme a guia de Deus.
</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO II
    </b><br>
    Fé e Doutrina
</h4>
<p>
    <b>Art. 19</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL é constituída por uma comunidade que aceita toda a Bíblia Sagrada, na qual está contida a infalível Palavra de Deus, estando devotada a Jesus Cristo, Autor e Consumador da Fé, fundada na Doutrina Apostólica.
</p>
<p>
    <b>Art. 20</b>. A fé que a CONGREGAÇÃO CRISTÃ NO BRASIL, propaga consiste em magnificar sempre mais a celeste vocação, em cada um dos membros e reter a liberdade que Cristo Jesus Nosso Senhor nos franqueou com a Sua morte e ressurreição, para que Ele possa imperar com a Divina Graça nos corações dos remidos pelo Sangue do Concerto Eterno e guiá-los pelo Espírito Santo em toda a verdade, em honra, louvor e glória a Deus Pai, O eternamente Bendito. (No demais sejamos sóbrios, lançando sobre Ele toda a nossa ansiedade, porque Ele tem cuidado de todos nós e de Sua Obra – I Pedro, 5:7-8).&nbsp;
</p>
<p>
    <b>Art. 21</b>. A doutrina professada na CONGREGAÇÃO CRISTÃ NO BRASIL é resumida nos seguintes doze pontos:
</p>
<p>I – Nós cremos na inteira Bíblia Sagrada e aceitamo-la como contendo a infalível Palavra de Deus, inspirada pelo Espírito Santo. A Palavra de Deus é a única e perfeita guia da nossa fé e conduta, e a Ela nada se pode acrescentar ou d’Ela diminuir. É, também, o poder de Deus para salvação de todo aquele que crê. (II Pedro 1:21; II Tim. 3:16-17; Rom. 1:16)</p>
<p>II – Nós cremos que há um só Deus vivente e verdadeiro, eterno e de infinito poder, Criador de todas as coisas, em cuja unidade estão o Pai, o Filho e o Espírito Santo. (Ef. 4:6; Mat. 28:19; I João 5:7)</p>
<p>III – Nós cremos que Jesus Cristo, o Filho de Deus, é a Palavra feita carne, havendo assumido uma natureza humana no ventre de Maria virgem, possuindo Ele, por conseguinte, duas naturezas, a divina e a humana; por isso é chamado verdadeiro Deus e verdadeiro homem e é o único Salvador, pois sofreu a morte pela culpa de todos os homens. (Luc. 1:27-35; João 1:14; I Pedro 3: 18)</p>
<p>IV – Nós cremos na existência pessoal do diabo e de seus anjos, maus espíritos, que, junto a ele, serão punidos no fogo eterno. (Mat. 25:41)</p>
<p>V – Nós cremos que o novo nascimento e a regeneração só se recebem pela fé em Jesus Cristo, que pelos nossos pecados foi entregue e ressuscitou para nossa justificação. Os que estão em Cristo Jesus são novas criaturas. Jesus Cristo, para nós, foi feito por Deus sabedoria, justiça, santificação e redenção. (Rom. 3:24-25; I Cor. 1:30; II Cor. 5:17)</p>
<p>VI – Nós cremos no batismo na água, com uma só imersão, em Nome de Jesus Cristo (Atos 2:38) e em Nome do Pai, e do Filho, e do Espírito Santo. (Mat. 28:18-19)</p>
<p>VII – Nós cremos no batismo do Espírito Santo, com evidência de novas línguas, conforme o Espírito Santo concede que se fale. (Atos 2:4; 10:45-47 e 19:6)</p>
<p>VIII – Nós cremos na Santa Ceia. Jesus Cristo, na noite em que foi traído, tomando o pão e havendo dado graças, partiu-o e deu-o aos discípulos, dizendo: “Isto é o meu corpo, que por vós é dado; fazei isto em memória de mim”. Semelhantemente tomou o cálice, depois da ceia, dizendo: “Este cálice é o Novo Testamento no meu sangue, que é derramado por vós”. (Luc. 22:19-20; I Cor. 11:24-25)</p>
<p>IX – Nós cremos na necessidade de nos abster das coisas sacrificadas aos ídolos, do sangue, da carne sufocada e da fornicação, conforme mostrou o Espírito Santo na Assembleia de Jerusalém. (Atos 15:28-29; 16:4 e 21:25)</p>
<p>X – Nós cremos que Jesus Cristo tomou sobre si as nossas enfermidades. “Está alguém entre vós doente? Chame os presbíteros da Igreja, e orem sobre ele, ungindo-o com azeite em nome do Senhor; e a oração da fé salvará o doente, e o Senhor o levantará; e, se houver cometido pecados, ser-lhe-ão perdoados”. (Mat. 8:17; Tiago 5:14-15)</p>
<p>XI – Nós cremos que o mesmo Senhor (antes do milênio) descerá do céu com alarido, com voz de arcanjo e com a trombeta de Deus; e os que morreram em Cristo ressuscitarão primeiro. Depois, nós, os que ficarmos vivos, seremos arrebatados juntamente com eles nas nuvens, a encontrar o Senhor nos ares e assim estaremos sempre com o Senhor. (I Tess. 4:16-17; Apoc. 20:6)</p>
<p>XII – Nós cremos que haverá a ressurreição corporal dos mortos, justos e injustos. Estes irão para o tormento eterno, mas os justos para a vida eterna. (Atos 24:15; Mat. 25:46)</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO III
    </b><br>
    Anciães, Cooperadores do Ofício Ministerial, Diáconos e suas Atribuições
</h4>
<p>
    <b>Art. 22</b>. O Ministério da CONGREGAÇÃO CRISTÃ NO BRASIL é composto de Anciães, que em seu conjunto formam o Conselho de Anciães, Cooperadores do Ofício Ministerial e Diáconos.
</p>
<p>
    <b>§ 1º</b>. O Conselho de Anciães se reunirá em “Reuniões Regionais de Ministério”, compondo o Conselho Regional de Anciães, integrado por todos os Anciães das localidades da respectiva Região ou do respectivo Estado e deliberará sobre as questões espirituais regionais, bem como as materiais, estas, em conjunto com a Administração, dando cumprimento ao artigo 32 deste Estatuto.
</p>
<p>
    <b>§ 2º</b>. O Conselho dos Anciães mais Antigos do Brasil, que se reúne em São Paulo, em proteção à unidade espiritual, poderá revisar ou substituir, soberanamente, qualquer decisão tomada pelo Conselho de Anciães em Reunião Regional ou Estadual, indicando-se nesse ato a Administração que deverá executar eventual medida para cumprimento da deliberação.
</p>
<p>
    <b>§ 3º</b>. Os Conselhos de Anciães previstos nos parágrafos 1º e 2º poderão indicar alguns de seus membros para a apreciação e resolução de questões urgentes.
</p>
<p>
    <b>§ 4º</b>. A criação de Reunião Regional ou Estadual, bem como a solução de questões relativas a Pontos de Doutrina, são de competência exclusiva do Conselho dos Anciães mais Antigos do Brasil.
</p>
<p>
    <b>Art. 23</b>. Os irmãos Anciães e Diáconos são ordenados (I Tim. 4:14), e os Cooperadores do Ofício Ministerial são apresentados, conforme deliberação do Conselho de Anciães, segundo a guia de Deus pela revelação do Espírito Santo, dentre os membros da CONGREGAÇÃO CRISTÃ NO BRASIL que apresentarem as virtudes consignadas no Santo Evangelho (I Tim. 3:1-7 e 8-13; Atos 6:6; Tito 1:5-10; I Pedro 5:2-3).
</p>
<p>
    <b>§ 1º</b>. A apresentação e oração a Deus para confirmação de irmãos Anciães e Diáconos se farão exclusivamente na primeira das Reuniões Gerais Anuais de Ensinamentos de cada Estado, conforme lista de Reuniões Gerais Anuais a ser anualmente elaborada pelo Conselho dos Anciães mais Antigos do Brasil, com exceção do Estado de São Paulo, que serão realizadas anualmente em outra data, na cidade de São Paulo.
</p>
<p>
    <b>§ 2º</b>. A ordenação ou apresentação sempre será realizada por um Ancião, dentre os mais antigos do Ministério, de comum acordo com o Conselho de Anciães mais Antigos do Brasil.
</p>
<p>
    <b>Art. 24</b>. Os serviços de culto nas Casas de Oração são presididos pelos irmãos Anciães ou Cooperadores do Ofício Ministerial, os quais devem vigiar na liberdade do Espírito Santo e em todo o tempo, para que nenhuma coisa estranha ao Santo Evangelho seja manifestada.
</p>
<p>
    <b>Art. 25</b>. Os serviços sagrados de Batismo e Santa Ceia são ministrados exclusivamente pelo ofício de Ancião.
</p>
<p>
    <b>Art. 26</b>. Aos irmãos Diáconos compete o atendimento da Obra da Piedade, podendo ser auxiliados por irmãs preparadas por Deus para essa finalidade. Na sua falta, tais atribuições serão exercidas pelos demais integrantes do Ministério.
</p>
<p>
    <b>§ 1º</b>. Aos irmãos Diáconos compete dar assistência às casas de oração quanto ao recebimento de coletas e ofertas e à remessa dos valores que devem ser depositados em estabelecimentos bancários, bem como aplicar aquelas destinadas às Obras Pias e viagens missionárias. Todos os prontuários, em função do caráter eminentemente sigiloso, serão mantidos em poder dos mesmos, que em tudo se farão guiar por Deus. A documentação contábil será encaminhada à Contabilidade, após o que, serão tais documentos encaminhados ao Conselho Fiscal.
</p>
<p>
    <b>§ 2º</b>. Os Diáconos ou irmãos responsáveis pelo atendimento da Obra da Piedade e viagens missionárias, mediante procuração específica outorgada pela CONGREGAÇÃO CRISTÃ NO BRASIL, movimentarão conta bancária especial, para os devidos fins. Essa conta será movimentada no mínimo por 3 (três) irmãos, devendo conter sempre 2 (duas) assinaturas. Onde houver Diáconos, estes obrigatoriamente assinarão.
</p>
<p>
    <b>§ 3º</b>. Os Diáconos, na escrituração das despesas decorrentes do exercício de suas atribuições, poderão ser assessorados por um contabilista.
</p>
<p>
    <b>§ 4º</b>. Aos irmãos Diáconos e/ou responsáveis pelo atendimento das Obras Pias e viagens missionárias, aplica-se o disposto nas alíneas “b”, “c” e “d”, do art. 36 deste Estatuto.
</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO IV
    </b><br>
    Assembleia Geral<br>
</h4>
<p>
    <b>Art. 27</b>. A Assembleia Geral da irmandade é o órgão competente para a ratificação da indicação dos Administradores e membros do Conselho Fiscal da CONGREGAÇÃO CRISTÃ NO BRASIL, aprovação de contas, relatórios da Administração e alterações estatutárias na forma do art. 42 deste Estatuto.
</p>
<p>
    <b>Art. 28</b>. A realização da Assembleia Geral será feita por convocação, pelo irmão Presidente da Administração, através de edital afixado na sede com 10 dias de antecedência, a quem cabe também presidi-la, nas hipóteses previstas neste Estatuto, exceto no caso do art. 30.&nbsp;
</p>
<p>
    <b>Art. 29</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL não efetua registro de membros por entender que o vínculo é de natureza espiritual do fiel para com Deus.&nbsp; As decisões da Assembleia Geral serão tomadas, em qualquer convocação, pela maioria dos membros presentes, cuja forma de manifestação será por aclamação.
</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO V
    </b><br>
    Administrações e suas Atribuições
</h4>
<p>
    <b>Art. 30</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL, será representada e seu patrimônio gerido por uma Administração, com 3 (três) membros (Presidente, Secretário e Tesoureiro) indicados pelo Conselho Regional de Anciães, sob a guia de Deus, apresentados e empossados em Assembleia Geral da irmandade local, presidida pelo irmão Ancião que atender a localidade.
</p>
<p>
    <b>§ 1º</b>. Havendo necessidade poderão ser criados cargos, como Vices Presidente, Secretário, Tesoureiro e/ou Auxiliares da Administração, tudo conforme o disposto no “caput” deste artigo.
</p>
<p>
    <b>§ 2º</b>. À Administração compete administrar a totalidade dos bens patrimoniais localizados em um ou mais municípios, vedada a existência de mais de uma Administração para um mesmo município.
</p>
<p>
    <b>§ 3º</b>. A Administração poderá ser extinta por deliberação do Conselho de Anciães, devidamente guiado da parte de Deus, devendo, tal decisão, ser ratificada pela Assembleia Geral da irmandade local.
</p>
<p>
    <b>§ 4º</b>. A Administração poderá sugerir, sempre que se fizer necessário, a formação de Departamentos de Construções, Engenharia, Compra de Materiais, etc. Estas sugestões deverão, sempre, ser submetidas à aprovação do Conselho de Anciães.
</p>
<p>
    <b>Art. 31</b>. O mandato dos membros da Administração será de 3 (três) anos, permitida a recondução ao cargo.
</p>
<p>
    <b>Parágrafo único</b>.&nbsp; Os administradores que forem indicados em substituição, para preencher cargos vagos, cumprirão o tempo faltante dos membros substituídos.
</p>
<p>
    <b>Art. 32</b>. Os atos de administração do patrimônio da CONGREGAÇÃO CRISTÃ NO BRASIL que excedam a simples gestão, incluindo aquisição e alienação de bens imóveis, serão previamente apresentados a Deus em oração conjunta do Conselho Regional de Anciães, Diáconos, Cooperadores do Ofício Ministerial, estes se presentes, e Administração, para d’Ele se obter a confirmação, lavrando-se a seguir ata sobre a deliberação tomada para sua perfeita execução.
</p>
<p>
    <b>Parágrafo único</b>. As construções e/ou reformas de imóveis serão deliberadas em reunião conjunta do Conselho Regional de Anciães, Diáconos, Cooperadores do Ofício Ministerial, estes se presentes, e Administração.
</p>
<p>
    <b>Art. 33</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL poderá outorgar, a membros da mesma fé, procuração para representá-la, com poderes específicos de administração e prazo não excedente de um ano da sua outorga. Em tais situações deverão ser nomeados no mínimo 3 (três) procuradores, para cujos atos deverão assinar no mínimo 2 (dois), vedado o substabelecimento.
</p>
<p>
    <b>Art. 34</b>. O patrimônio da CONGREGAÇÃO CRISTÃ NO BRASIL, em cada localidade, responde por suas obrigações. A irmandade não responde, nem mesmo subsidiariamente, pelas obrigações da entidade.
</p>
<p>
    <b>§ 1º</b>. Os integrantes do Ministério e da Administração responderão pelos excessos eventualmente praticados que ocasionarem danos morais ou patrimoniais à CONGREGAÇÃO CRISTÃ NO BRASIL ou a terceiros.
</p>
<p>
    <b>§ 2º</b>. Todos os atos de aquisição ou disposição de bens imóveis devem ser assinados pelos Administradores titulares ou vices em exercício, observadas as substituições previstas nos parágrafos únicos dos arts.&nbsp; 37, 38 e 39 deste Estatuto.
</p>
<p>
    <b>§ 3º</b>. Os valores pecuniários pertencentes à CONGREGAÇÃO CRISTÃ NO BRASIL deverão ser depositados, em nome desta, em estabelecimentos bancários da localidade. No movimento bancário assinarão sempre 2 (dois) Administradores, devendo um destes, necessariamente, ser o Tesoureiro ou o Presidente, observadas as substituições previstas nos parágrafos únicos dos arts. 37, 38 e 39 deste Estatuto.
</p>
<p>
    <b>Art. 35</b>. Compete à Administração:
</p>
<ol type="a">
    <li>dar cumprimento às deliberações das reuniões ministeriais, às disposições estatutárias e às deliberações das Assembleias Gerais;</li>
    <li>participar dos trabalhos de compra e venda de imóveis, construções, reformas e manutenção de casas de oração e de toda a administração patrimonial e financeira da CONGREGAÇÃO CRISTÃ NO BRASIL;</li>
    <li>elaborar e apresentar anualmente à Assembleia Geral, até o último dia do mês de março, relatório circunstanciado de suas atividades, incluindo o movimento espiritual de Batismos e Santas Ceias, bem como o balanço e a apresentação das contas do exercício findo em 31 de dezembro do ano anterior;</li>
    <li>reunir-se periodicamente com o Ministério local e, em estreita colaboração com o mesmo, examinar e tratar dos assuntos materiais da CONGREGAÇÃO CRISTÃ NO BRASIL;</li>
    <li>cuidar, com todo o zelo e diligência, dos valores preparados por Deus nas coletas e ofertas;</li>
    <li>manter em perfeita ordem todos os livros contábeis, auxiliares e de atas, com escrituração atualizada, guardando os respectivos documentos comprobatórios em ordem cronológica, inclusive os títulos de propriedades;</li>
    <li>zelar pelo patrimônio da CONGREGAÇÃO CRISTÃ NO BRASIL;</li>
    <li>prestar os informes às autoridades e órgãos governamentais, em cumprimento a dever legal.</li>
</ol>

<p>
    <b>Art. 36</b>. É terminantemente vedado à Administração:
</p>
<ol type="a">
    <li>intervir no Ministério da CONGREGAÇÃO CRISTÃ NO BRASIL, não podendo instituir, destituir nem afastar seus integrantes, atribuição essa que é de exclusiva competência do Conselho de Anciães, nos termos do art. 9º deste Estatuto;</li>
    <li>abonar, avalizar, endossar títulos, prestar fianças ou qualquer garantia em favor de terceiros, em nome da CONGREGAÇÃO CRISTÃ NO BRASIL; </li>
    <li>pleitear em nome da CONGREGAÇÃO CRISTÃ NO BRASIL, junto a entes governamentais ou privados, auxílios ou subvenções de qualquer natureza;</li>
    <li>utilizar-se de quaisquer bens ou valores pertencentes à CONGREGAÇÃO CRISTÃ NO BRASIL, para fins estranhos aos interesses da mesma.</li>
</ol>
<h4 class="mt-4">
    <b>
        CAPÍTULO VI
    </b><br>
    Atribuições dos Administradores
</h4>
<p>
    <b>Art. 37</b>. Compete ao Presidente:
</p>
<ol type="a">
    <li>convocar e presidir as Assembleias Gerais;</li>
    <li>representar ou fazer representar a CONGREGAÇÃO CRISTÃ NO BRASIL, em juízo ou fora dele, bem como constituir advogados com poderes específicos;</li>
    <li>apresentar em Assembleia Geral Ordinária o movimento espiritual e material, bem como as demonstrações contábeis da CONGREGAÇÃO CRISTÃ NO BRASIL;</li>
    <li>abrir, movimentar, operar e encerrar as contas bancárias conjuntamente com o Tesoureiro, Secretário ou seus substitutos;</li>
</ol>
<p>
    <b>Parágrafo único</b>. O Presidente, em suas faltas, será substituído pelo Vice-Presidente; não havendo este, por qualquer dos Administradores titulares no exercício do cargo.
</p>
<p>
    <b>Art. 38</b>. Compete ao Secretário:
</p>
<ol type="a">
    <li>superintender os trabalhos de Secretaria da CONGREGAÇÃO CRISTÃ NO BRASIL, propondo as providências administrativas necessárias à sua eficiente organização;</li>
    <li>redigir e assinar as correspondências e documentos da Administração;</li>
    <li>responsabilizar-se pela guarda do arquivo e livros da Administração, mantendo-os atualizados e em ordem;</li>
    <li>abrir, movimentar, operar e encerrar as contas bancárias conjuntamente com o Presidente, Tesoureiro ou seus substitutos.</li>
</ol>

<p>
    <b>Parágrafo único</b>. O Secretário, em suas faltas, será substituído pelo Vice-Secretário; não havendo este, por qualquer dos Administradores titulares no exercício do cargo.
</p>
<p>
    <b>Art. 39</b>. Compete ao Tesoureiro:
</p>
<ol type="a">
    <li>receber, registrar em livro caixa próprio e guardar, sob sua responsabilidade, os valores pertencentes à CONGREGAÇÃO CRISTÃ NO BRASIL, depositando as importâncias à conta desta, em estabelecimentos bancários escolhidos pela Administração;</li>
    <li>apresentar relatórios financeiros e todos os dados para elaboração das demonstrações contábeis;</li>
    <li>abrir, movimentar, operar e encerrar as contas bancárias juntamente com o Presidente, Secretário ou seus substitutos.</li>
</ol>

<p>
    <b>Parágrafo único</b>. O Tesoureiro, em suas faltas, será substituído pelo Vice-Tesoureiro; não havendo este, por qualquer dos Administradores titulares no exercício do cargo.
</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO VII
    </b><br>
    Conselho Fiscal e suas Atribuições
</h4>
<p>
    <b>Art. 40</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL, terá um Conselho Fiscal composto de 3 (três) membros e, facultativamente, um suplente, com mandato de um ano, que serão indicados pelo Conselho Regional de Anciães, sob a guia de Deus, apresentados e empossados em Assembleia Geral da irmandade local, permitida a recondução.
</p>
<p>
    <b>Parágrafo único</b>. Compete ao Conselho Fiscal, podendo ser assessorado por um contabilista, o exame de todos os documentos contábeis, financeiros e patrimoniais, emitindo o competente parecer para ser transmitido à Assembleia Geral.
</p>
<h4 class="mt-4">
    <b>
        CAPÍTULO VIII
    </b><br>
    Disposições Finais e Transitórias
</h4>
<p>
    <b>Art. 41</b>. A fim de conservar a unidade de Espírito entre o povo de Deus serão realizadas, anualmente, reuniões gerais de ensinamentos, na cidade de São Paulo, de irmãos Anciães da CONGREGAÇÃO CRISTÃ NO BRASIL de todo o País, formando o Conselho Geral de Anciães, assim como dos que vierem do Exterior e que seguem a mesma Fé e Doutrina, conforme consta do § 2º, do art. 1º, deste Estatuto, cujas deliberações suprirão as eventuais omissões deste Estatuto.
</p>
<p>
    <b>§1º</b>. Também se reunirão, na mesma localidade, os irmãos Diáconos do Brasil que forem convocados e os que vierem do Exterior, para tratar de assuntos inerentes ao seu Ministério.
</p>
<p>
    <b>§ 2º</b>. Serão realizadas também reuniões com a mesma finalidade em outros Estados, as quais deverão ser presididas pelos irmãos Anciães mais antigos no Ministério, que presidem as reuniões gerais anuais e nelas deverão ser expostos os mesmos ensinamentos apresentados nas reuniões gerais em São Paulo, conservando-se a unidade de Espírito e o Fundamento de nossa Fé e Doutrina.
</p>
<p>
    <b>§ 3º</b>. Os Diáconos que não forem convocados na forma do §1º e os Cooperadores do Ofício Ministerial participarão das Reuniões Gerais de Ensinamentos a que sua região pertence.
</p>
<p>
    <b>Art. 42</b>. O presente Estatuto só poderá ser modificado por deliberação do Conselho Geral de Anciães presentes à reunião geral anual realizada em São Paulo, de acordo com o art. 41, vedada a alteração de seus fins espirituais.
</p>
<p>
    <b>§ 1º</b>. A alteração de endereço de sede administrativa, para local no mesmo município (art.2º, § 3º) será deliberada na forma do art. 32.
</p>
<p>
    <b>§ 2º</b>. As modificações no Estatuto deverão ser imediatamente ratificadas em Assembleia Geral por todas as Administrações constituídas no País.
</p>
<p>
    <b>Art. 43</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL, sob a coordenação da Distribuidora Geral Brás – São Paulo, poderá manter distribuidoras, as quais serão responsáveis pela distribuição de Bíblias Sagradas, hinários, véus e demais artigos necessários, de acordo com a sua Fé e Doutrina, integradas à contabilidade da Administração.
</p>
<p>
    <b>Parágrafo único</b>. A CONGREGAÇÃO CRISTÃ NO BRASIL poderá manter, anexos às suas casas de oração, depósitos dos itens relacionados no “caput” deste artigo.
</p>
<p><b>Art. 44</b>. Eventuais omissões deste Estatuto serão supridas conforme as deliberações do Conselho Geral de Anciães, reunidos na forma prevista no “caput” do art. 41 deste Estatuto, através de tópicos de ensinamentos.</p>
<p><b>Art. 45</b>. Este Estatuto revoga quaisquer outros e entrará em vigor na data de sua aprovação pela Assembleia Geral, especialmente convocada, devendo ser registrado no órgão público competente.</p>
            </div>
        </div>
    </div>
</div>


           

<?php require("bottom.php"); ?>

</body>
</html>
