<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(PHP_ROOT.'en_base.php'); require(PHP_ROOT.'en_common_home.php');
              echo $BS_header ?>
        <title>Code4PT, coding a better Portugal together</title>
        <meta name="description" content="">
    </head>
    <body>

        <?php echo $navbar_top_home; ?>
        
        <div class="container">
            <img src="/styles/img/logo-code4pt-draft3-grad.png" width="350" align="right"/>
            <div class="hero-unit">
                <h1>Code For Portugal</h1>
                <p>Welcome to Code4PT's official webpage.</p>
                <p><a class="btn btn-primary btn-large" href="dcid/">Developers, join the cause</a></p>
            </div>

            <div class="row-fluid">
                <div class="span4">
                    <h2>Why</h2>
                    <p>Pointing out what's wrong is not enough, we want to improve people's life. We want solutions and we're not waiting... <strong>we're creating them</strong>.</p>
                </div>
                <div class="span4">
                    <h2>How</h2>
                    <p>We find out what troubles society. Then our developers use open technology to solve those problems and release it to the world. At the end of the day we have a happier society and fulfilled developers.</p>
                </div>
                <div class="span4">
                    <h2>What</h2>
                    <p>Currently we're building a platform to support Participatory Budgets (Orçamentos Participativos) and online discussions. You can also <a href="en/submit-idea.php">submit an idea</a> for future projects.</p>
                </div>
            </div>
                        
            <div class="row-fluid">
                <div class="span12">
                    <h2>Projects</h2>
                    <p><ul>
                        <li class="lead"><a href="dcid/"><b>dcid</b> - a plaftorm to support Participatory Budgets (Orçamentos Participativos) and online discussions.</a></li>
                    </ul></p>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h3>Reach out</h3>
                    <div class="row-fluid">
                        <div class="span4">
                            <p><a class="btn btn-info" href="submit-idea.php">I want to share an idea &raquo;</a> Submit it to our idea pool.</p>
                        </div>
                        <div class="span4">
                            <p><a class="btn btn-info" href="dcid/contact.php">I want to support you &raquo;</a> There are many ways you can help us, start by choosing one.</p>
                        </div>
                        <div class="span4">
                            <p><a class="btn btn-info" href="dcid/contact.php">I want to contact you &raquo;</a> We would love to hear from you.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <br/>            
            <div class="row-fluid">
                <div class="span12 well" align="center">
                    <h3><i class="icon-arrow-down" style="vertical-align:middle"></i> We thank our supporters <i class="icon-arrow-down" style="vertical-align:middle"></i></h3>
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
