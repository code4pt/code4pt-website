<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <title>dcid - A equipa</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container">

            <div class="row">
                <div class="span12 well">
                    <h1>Apresentamos... os actores da mudança</h1>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <h2>Equipa principal</h2>
                    <ul class="thumbnails">
                        <li class="span2 offset1">
                            <div class="thumbnail text-center">
                                <img src="img/team/placeholder.jpg" alt="photo">
                                <h3>Diogo Nunes</h3>
                                <p><a href="https://www.facebook.com/dialexnunes"><img src="/styles/img/sico_facebook_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                    <a href="http://www.linkedin.com/in/nunesdiogo"><img src="/styles/img/sico_linkedin_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                </p>
                            </div>
                        </li>
                        <li class="span2 offset1">
                            <div class="thumbnail text-center">
                                <img src="img/team/placeholder.jpg" alt="photo">
                                <h3>António Pereira</h3>
                                <p><a href="https://www.facebook.com/Redeagle48"><img src="/styles/img/sico_facebook_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                    <a href="https://www.linkedin.com/in/antonioppereira"><img src="/styles/img/sico_linkedin_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                </p>
                            </div>
                        </li>
                        <li class="span2 offset1">
                            <div class="thumbnail text-center">
                                <img src="img/team/placeholder.jpg" alt="photo">
                                <h3>Paulo Morais</h3>
                                <p><a href="https://www.facebook.com/paulo.pontes.m"><img src="/styles/img/sico_facebook_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                    <a href="http://www.linkedin.com/in/paulopmartins"><img src="/styles/img/sico_linkedin_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                </p>
                            </div>
                        </li>
                        <li class="span2 offset1">
                            <div class="thumbnail text-center">
                                <img src="img/team/placeholder.jpg" alt="photo">
                                <h3>Ana Almeida</h3>
                                <p><a href="https://www.facebook.com/ana.almeida.372"><img src="/styles/img/sico_facebook_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                    <a href="http://www.linkedin.com/in/anaalm"><img src="/styles/img/sico_linkedin_circle_color.png" width="25px" height="25px"/></a>&nbsp;
                                </p>
                            </div>
                        </li>
                    </ul>
                    <h3>Antigos membros</h3>
                    <p>Cátia Ferreira, Rafael Santos, João Mateus, Filipe Tavares</p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h2>Parceiros</h2>
                    <p><a href="contact.php">Podemos ajudar-nos mutuamente?</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
