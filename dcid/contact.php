<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <?php require_once(PHP_ROOT.'privatedaddy.php'); ?>
        <title>dcid - Contactos</title>
        <meta name="description" content="">
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
                    <p><a href="mailto:code4pt@gmail.com">code4pt@gmail.com</a></p>
                </div>
                <div class="span4">
                    <h2>Sugestões</h2>
                    <p><a href="mailto:code4pt@gmail.com">code4pt@gmail.com</a></p>
                </div>
                <div class="span4">
                    <h2>Líder do projeto</h2>
                    <p><a href="mailto:code4pt@gmail.com">code4pt@gmail.com</a></p>
                </div>
            </div>
            
            <div class="span12"><p><i>Sim, nós sabemos que um endereço gmail não é profissional. Criar um email *@code4pt.info está na nossa lista de afazeres mas não é prioritário. Obrigado pela compreensão :)</i></p></div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
