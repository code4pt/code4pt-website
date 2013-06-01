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
                <div class="span5 offset1">
                    <h2>O problema</h2>
                    <p class="lead">Actualmente as organizações precisam cada vez mais de ouvir as suas comunidades e de estabelecer relações. Exemplo disso são os Orçamentos Participativos das câmaras municipais. Infelizmente, cada câmara gasta tempo e dinheiro público a desenvolver o seu próprio site de votação online (reinventando a roda).</p>
                </div>
                <div class="span5">
                    <h2>A solução</h2>
                    <p class="lead">Propomos a utilização de uma plataforma online que permita de forma eficaz e  transparente a qualquer utilizador (cidadão) fazer propostas, debater argumentos e votar - porque isso é a verdadeira democracia. A plataforma <strong>DCID</strong> pode ser usada em qualquer organização para <em>decidir</em> sobre qualquer assunto.</p>
                </div>
            </div>
            
            <br/>
            
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
                <div class="span4 hero-unit" align="center">
                    
                        <img src="/styles/img/logo-dcid-lowres.png" width="450px" height="auto" alt="DCID logo" />
                    
                </div>
                <div class="span3">
                    <h2>Mais do que uma ideia</h2>
                    <p>Já temos um protótipo desenvolvido, embora com funcionalidades ainda muito limitadas.</p>
                    <p><a href="http://dcid.pythonanywhere.com/parliament/"><button class="btn btn-large btn-primary">EXPERIMENTA!</button></a></p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span5 offset1">
                    <a name="screenshots" id="screenshots"></a><h2>O que temos...</h2>
                    <script async class="speakerdeck-embed" data-slide="7" data-id="0adc20009545013076f96e899cf2bb4e" data-ratio="1.41436464088398" src="//speakerdeck.com/assets/embed.js"></script>
                </div>
                <div class="span5">
                    <br/><br/>
                    <h2>A equipa</h2>
                    <p>Todas <a href="team.php">estas pessoas já nos ajudaram</a> neste projeto.</p>
                    <br/>
                    <h2>Junta-te à conversa</h2>
                    <p><a href="https://facebook.com/code4pt"><img src="/styles/img/sico_facebook_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://twitter.com/code4pt"><img src="/styles/img/sico_twitter_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts"><img src="/styles/img/sico_google_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="http://www.code4pt.info/blog/"><img src="/styles/img/sico_rss_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://github.com/code4pt/dcid"><img src="/styles/img/sico_github_circle_black.png" width="50px" height="50px"/></a>&nbsp;
                    </p>
                    <p><code>#code4pt</code> <code>#dcid</code> <a class="btn" href="contact.php"><i class="icon-envelope"></i>&nbsp;Contactos</a></p>
                    <br/>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
