<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <title>DCID - Apresentação</title>
        <meta name="description" content="DCID é uma plataforma colaborativa online que permite a qualquer organização recolher e debater sugestões da sua comunidade.">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container-fluid">
            
            <div class="row-fluid">
                <div class="span5 offset1" id="video">
                    <iframe width="540" height="400" src="http://www.youtube.com/embed/7pzHStqGbQU?rel=0" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="span5 hero-unit text-center">
                    <img src="/styles/img/logo-dcid-lowres.png" width="250" height="auto" alt="DCID logo" />
                    <br/><br/>
                    <p class="lead"><strong>DCID é uma plataforma colaborativa online que permite a qualquer organização recolher e debater sugestões da sua comunidade.</strong></p>
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://code4pt.us7.list-manage2.com/subscribe/post?u=ed049287aaccb0a4fbd6b1c7a&amp;id=e3572e03c4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div class="mc-field-group">
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Deixe aqui o seu email">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div class="clear">
                                <strong><input type="submit" value="Nós avisamos quando estiver pronto!" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary btn-large"></strong>
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span10 offset1">
                    <h2>O que nos distingue</h2>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span3 offset1">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Colaboração</h4>
                    <span>Qualquer participante pode criar, apresentar e discutir sugestões em conjunto, num único local.</span>
                    <br/>
                </div>
                <div class="span4">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Facilidade</h4>
                    <span>Basta um registo, não precisa instalar nada. Uma interface minimalista e intuitiva, que se adapta ao dispositivo de cada utilizador.</span>
                    <br/>
                </div>
                <div class="span3">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Transparência</h4>
                    <span>Os participantes têm acesso a todas as propostas em discussão e ao respectivo número de votos.</span>
                    <br/>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span3 offset1">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Eficiência</h4>
                    <span>Recolha sugestões de dezenas ou milhares de participantes com a mesma facilidade e rapidez.</span>
                    <br/>
                </div>
                <div class="span4">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Flexibilidade</h4>
                    <span>O aspecto da plataforma é personalizável a cada organização. Também podemos desenvolver funcionalidades à medida das suas necessidades.</span>
                    <br/>
                </div>
                <div class="span3">
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25" height="25" alt="*" />&nbsp;Privacidade</h4>
                    <span>Torne a sua plataforma pública para a toda a gente poder participar ou torne-a privada para proteger a sua inovação interna.</span>
                    <br/>
                </div>
            </div>
        
            <br/>
            
            <div class="row-fluid">
                <div class="span10 offset1">
                    <h2>Mais que uma ideia</h2>
                    <p>Já temos um protótipo que pode experimentar, embora tenha funcionalidades e design muito limitados.</p>
                    <a href="http://dcid.pythonanywhere.com/parliament/" class="btn btn-large btn-block btn-primary">Experimente já o protótipo!!</a>
                </div>
            </div>
            
            <br/>
            
            <div class="row-fluid">
                <div class="span10 offset1">
                    <h2>Acompanhe as nossas novidades</h2>
                    <p><a href="https://facebook.com/code4pt"><img src="/styles/img/sico_facebook_circle_color.png" width="50" height="50"/></a>&nbsp;
                        <a href="https://twitter.com/code4pt"><img src="/styles/img/sico_twitter_circle_color.png" width="50" height="50"/></a>&nbsp;
                        <a href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts"><img src="/styles/img/sico_google_circle_color.png" width="50" height="50"/></a>&nbsp;
                        <a href="http://www.code4pt.info/blog/"><img src="/styles/img/sico_rss_circle_color.png" width="50" height="50"/></a>&nbsp;
                        <a href="mailto:email@code4pt.info"><img src="/styles/img/sico_mail.png" width="45" height="45"/></a>&nbsp;
                    </p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <script src="/styles/js/jquery.fitvids.min.js"></script>
        <script>
          $(document).ready(function(){
            // Target your .container, .wrapper, .post, etc.
            $("#video").fitVids();
          });
        </script>
        
        <?php echo $google_analytics; ?>

    </body>
</html>
