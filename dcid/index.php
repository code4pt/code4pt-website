<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <title>dcid - Apresentação</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container">

            <div class="hero-unit" align="center">
                <h1><em>Uma assembleia de 10 milhões</em></h1>
                <p>Esta é a nossa visão.</p>
            </div>

            <div class="row">
                <div class="span6">
                    <h2>O problema</h2>
                    <p class="lead">Várias câmaras municipais já começaram a implementar Orçamentos Participativos. Infelizmente, cada câmara gasta tempo e dinheiro público a desenvolver o seu próprio site de votação online (reinventando a roda). A autenticação dos cidadãos é feita através do seu endereço de email pessoal, o que não é fidedigno.</p>
                </div>
                <div class="span6">
                    <h2>A solução</h2>
                    <p class="lead">Uma plataforma online e aberta que ofereça uma maneira simples e eficaz para fazer propostas, debater argumentos e votar - porque isso é a verdadeira democracia. Os cidadãos podem autenticar-se utilizando o seu <a href="http://www.senha001.gov.pt/instalacao.php">Cartão de Cidadão</a> e muito mais. A plataforma tem o nome de código 'dcid' (<em>Decisão do CIDadão</em>).</p>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <h2>A equipa</h2>
                    <p>Todas <a href="team.php">estas pessoas já nos ajudaram</a> neste projeto. Se quiseres ver o estado de desenvolvimento podes fazê-lo no nosso <a class="btn btn-primary" href="https://trello.com/board/dcid/503deb00e6d4f29553864216">Trello board (brevemente)</a></p>
                </div>
                <div class="span6">
                    <h2>Atualiza-te. Involve-te.</h2>
                    <p><a class="btn btn-info" href="https://twitter.com/code4pt">Novidades @Twitter</a> <a class="btn btn-info" href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts">Reuniões @Google Plus</a></p>
                    <p><a class="btn btn-primary">Código (brevemente)</a> <a class="btn" href="contact.php">Contactos</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
