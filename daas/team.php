<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_daas.php');
              echo $BS_header ?>
        <title>DaaS - A equipa</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_daas; ?>

        <div class="container">

            <div class="row">
                <div class="span12 well">
                    <h1>Apresentamos... os actores da mudança</h1>
                </div>
            </div>

            <div class="row">
                <div class="span6">
                    <h2>Programadores</h2>
                    <p>Indivíduos que deram do seu tempo, conhecimento e olhinhos para programar este projeto. Muito obrigado:</a></p>
                    <p><ul><b>
                        <li>Diogo Nunes</li>
                        <li>João Mateus</li>
                        <li>Paulo Martins</li>
                        <li>Filipe Tavares</li>
                        <li>Rafael Santos</li>
                        <li>Cátia Ferreira</li>
                    </b></ul></p>
                </div>
                <div class="span6">
                    <h2>Colaboradores</h2>
                    <p></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
