<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_dcid.php');
              echo $BS_header ?>
        <title>DCID - Apresentação</title>
        <meta name="description" content="Uma plataforma online, aberta e uniformizada que permita de forma simples e eficaz a qualquer cidadão fazer propostas, debater argumentos e votar - porque isso é a verdadeira democracia">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span10 offset1 hero-unit" align="center">
                    <img src="/styles/img/logo-dcid-lowres.png" width="250px" height="auto" alt="DCID logo" />
                    <br/><br/><p class="lead"><strong>DCID é uma plataforma colaborativa online que permite a qualquer organização recolher sugestões da sua comunidade.</strong></p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span5 offset1">
                    <script async class="speakerdeck-embed" data-slide="8" data-id="0adc20009545013076f96e899cf2bb4e" data-ratio="1.41436464088398" src="//speakerdeck.com/assets/embed.js"></script>
                </div>
                <div class="span5">
                    <h2>O que temos para oferecer</h2>
                    <br/>
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25px" height="25px" alt="" />&nbsp;Eficiência</h4>
                    <span>Permite recolher sugestões de dezenas ou milhares de participantes com a mesma facilidade.</span>
                    <br/><br/>
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25px" height="25px" alt="" />&nbsp;Colaboração</h4>
                    <span>Qualquer participante pode apresentar e discutir sugestões em conjunto, num único local.</span>
                    <br/><br/>
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25px" height="25px" alt="" />&nbsp;Transparência</h4>
                    <span>Os participantes têm acesso a todas as propostas em discussão e ao respectivo número de votos.</span>
                    <br/><br/>
                    <h4><img src="/styles/img/logo-dcid-head.png" width="25px" height="25px" alt="" />&nbsp;Facilidade</h4>
                    <span>Possui interface minimalista, intuitiva e multi-dispositivo.</span>
                </div>
            </div>
            
            <br/><br/>
            
            <div class="row-fluid">
                <div class="span3 offset1">
                    <h2>Novidades</h2>
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://code4pt.us7.list-manage2.com/subscribe/post?u=ed049287aaccb0a4fbd6b1c7a&amp;id=e3572e03c4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                            <div class="mc-field-group">
                                <p>Visita regularmente o <a href="/blog/">blogue</a> ou deixa-nos o teu email e nós avisamos-te das novidades:</p>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Endereço de email">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>
                            <div class="clear">
                                <input type="submit" value="Subscrever" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary">
                            </div>
                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
                <div class="span4">
                    <h2>Mais que uma ideia</h2>
                    <p>Apesar de ter funcionalidades mínimas, já temos um protótipo que podes experimentar.</p>
                    <br/>
                    <a href="http://dcid.pythonanywhere.com/parliament/" class="btn btn-large btn-block btn-primary">Experimenta já!!</a>
                </div>
                <div class="span3">
                    <h2>Junta-te à conversa</h2>
                    <p><a href="https://facebook.com/code4pt"><img src="/styles/img/sico_facebook_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://twitter.com/code4pt"><img src="/styles/img/sico_twitter_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts"><img src="/styles/img/sico_google_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="http://www.code4pt.info/blog/"><img src="/styles/img/sico_rss_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="mailto:email@code4pt.info"><img src="/styles/img/sico_mail.png" width="45px" height="45px"/></a>&nbsp;
                    </p>
                    <p><code>#code4pt</code> <code>#dcid</code></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
