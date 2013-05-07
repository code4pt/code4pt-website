<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_home.php');
              echo $BS_header ?>
        <title>Code4PT, juntos programamos um Portugal melhor</title>
        <meta name="description" content="">
    </head>
    <body>

        <?php echo $navbar_top_home; ?>
        
        <div class="container">
            <img src="/styles/img/logo-code4pt-draft3-grad.png" width="350" align="right" />
            <div class="hero-unit">
                <h1>Programar por Portugal</h1>
                <p>Bem-vindo à página oficial do Code4PT.</p>
                <p><a class="btn btn-primary btn-large" href="/dcid/">Todos podem participar!</a></p>
            </div>

            <div class="row-fluid">
                <div class="span4">
                    <h2>Porquê?</h2>
                    <p>Indicar o que está mal não é suficiente. Queremos melhorar a vida das pessoas, queremos soluções e não estamos à espera... <strong>estamos a criá-las</strong>.</p>
                </div>
                <div class="span4">
                    <h2>Como?</h2>
                    <p>Identificamos quais são os problemas da sociedade. Os nossos programadores usam tecnologia livre para resolver esses problemas e disponibilizam-na para todo o mundo. No final do dia temos uma sociedade feliz e programadores realizados (e mais experientes).</p>
                </div>
                <div class="span4">
                    <h2>O quê?</h2>
                    <p>De momento estamos a construir uma plataforma para suportar Orçamentos Participativos e debates online. Também podes <a href="submit-idea.php">submeter a tua ideia</a> para projetos futuros.</p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h2>Projetos</h2>
                    <p><ul>
                        <li class="lead"><a href="/dcid/"><b>dcid</b> - uma plataforma para suportar Orçamentos Participativos e debates online.</a></li>
                    </ul></p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h3>Fala connosco</h3>
                    <div class="row-fluid">
                        <div class="span4">
                            <p><a class="btn btn-info" href="submit-idea.php">Tenho uma ideia &raquo;</a> Adiciona-a à nossa lista de ideias.</p>
                        </div>
                        <div class="span4">
                            <p><a class="btn btn-info" href="/dcid/contact.php">Quero apoiar-vos &raquo;</a> Há várias maneiras de nos ajudares, começa escolhendo uma.</p>
                        </div>
                        <div class="span4">
                            <p><a class="btn btn-info" href="/dcid/contact.php">Quero contactar-vos &raquo;</a> Teremos todo o gosto em ouvir o que tens para dizer.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <br/>            
            <div class="row-fluid">
                <div class="span12 well" align="center">
                    <h3><i class="icon-arrow-down" style="vertical-align:middle"></i> Agradecemos a quem nos apoia <i class="icon-arrow-down" style="vertical-align:middle"></i></h3>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12" align="center">
                    <p><?php echo $common_supporters; ?></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
