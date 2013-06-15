<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <?php require_once(PHP_ROOT.'privatedaddy.php'); ?>
        <title>DCID - Contactos</title>
        <meta name="description" content="Como contactar a equipa responsável pelo projecto DCID.">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container">

            <div class="row">
                <div class="span12 well">
                    <h1>É só escolher...</h1>
                </div>
            </div>

            <div class="row">
                <div class="span4">
                    <h2>Mais informação</h2>
                    <p><a href="mailto:email@code4pt.info">email@code4pt.info</a></p>
                </div>
                <div class="span4">
                    <h2>Sugestões</h2>
                    <p><a href="mailto:email@code4pt.info">email@code4pt.info</a></p>
                </div>
                <div class="span4">
                    <h2>Líder do projeto</h2>
                    <p><a href="mailto:email@code4pt.info">diogo.alexandre@ist.utl.pt</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
