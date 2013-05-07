<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <title>dcid - Apresentação</title>
        <meta name="description" content="Uma plataforma online, aberta e uniformizada que permita de forma simples e eficaz a qualquer cidadão fazer propostas, debater argumentos e votar - porque isso é a verdadeira democracia">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span1 visible-desktop visible-tablet"></div> <!-- to center hero-unit on high-res -->
                <div class="span10">
                    <div class="hero-unit" align="center">
                        <h1><em>Uma assembleia de 10 milhões</em></h1>
                        <p>Esta é a nossa visão.</p>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <h2>O problema</h2>
                    <p class="lead">Várias câmaras municipais já começaram a implementar Orçamentos Participativos. Infelizmente, cada câmara gasta tempo e dinheiro público a desenvolver o seu próprio site de votação online (reinventando a roda). A autenticação dos cidadãos é feita através do seu endereço de email pessoal, o que não é fidedigno.</p>
                </div>
                <div class="span6">
                    <h2>A solução</h2>
                    <p class="lead">Uma plataforma online, aberta e uniformizada que permita de forma simples e eficaz a qualquer cidadão fazer propostas, debater argumentos e votar - porque isso é a verdadeira democracia. A autenticação garante que cada cidadão só vota uma vez e de forma anónima (por ex. usando <a href="http://www.senha001.gov.pt/instalacao.php">Cartão de Cidadão</a>). Além disso, a plataforma <strong>dcid</strong> pode ser usada para <em>decidir</em> sobre qualquer assunto.</p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span6">
                    <a name="screenshots" id="screenshots"></a><h2>O que temos...</h2>
                    <script async class="speakerdeck-embed" data-slide="7" data-id="0adc20009545013076f96e899cf2bb4e" data-ratio="1.41436464088398" src="//speakerdeck.com/assets/embed.js"></script>
                </div>
                <div class="span6">
                    <br/><br/>
                    <h2>A equipa</h2>
                    <p>Todas <a href="team.php">estas pessoas já nos ajudaram</a> neste projeto.</p>
                    <h2>Segue-nos ou vem connosco</h2>
                    <p><a href="https://facebook.com/code4pt"><img src="/styles/img/sico_facebook_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://twitter.com/code4pt"><img src="/styles/img/sico_twitter_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts"><img src="/styles/img/sico_google_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="#"><img src="/styles/img/sico_rss_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://github.com/code4pt/dcid"><img src="/styles/img/sico_github_circle_black.png" width="50px" height="50px"/></a>&nbsp;
                    </p>
                    <p><code>#code4pt</code> <code>#dcid</code> <a class="btn" href="contact.php"><i class="icon-envelope"></i>&nbsp;Contactos</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
