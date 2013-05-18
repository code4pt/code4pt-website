<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(PHP_ROOT.'en_base.php'); require(PHP_ROOT.'en_common_dcid.php');
              echo $BS_header ?>
        <title>dcid - Developers homepage</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container">

            <div class="hero-unit">
                <h1>We intend to update democracy.</h1>
                <h1>Bit by bit.</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="span6">
                    <h2>The problem</h2>
                    <p class="lead">Some city councils have started implementing Participatory Budgets. This is a major step towards a more participative democracy. However, each city council spends money and time developing its own <i>ad hoc</i> voting website and the authentication of a user is made using his/her personal email.</p>
                </div>
                <div class="span6">
                    <h2>Our solution</h2>
                    <p class="lead">Codenamed 'dcid' (spelled <em>decide</em>) is an open platform which offers a simple and effective way to discuss arguments and vote on polls online, because that's what democracy is about. For Participatory Budgets the users' login is attested using the citizens' <a href="http://www.senha001.gov.pt/instalacao.php">Cartão de Cidadão</a>.</p>
                </div>
            </div>
            <div class="row">
                <div class="span6">
                    <h2>The team</h2>
                    <p>You can check the <a href="team.php">contributors</a> so far.</p>
                </div>
                <div class="span6">
                    <h2>Join the conversation</h2>
                    <p><a href="https://facebook.com/code4pt"><img src="/styles/img/sico_facebook_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://twitter.com/code4pt"><img src="/styles/img/sico_twitter_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://plus.google.com/b/117147943367819166591/117147943367819166591/posts"><img src="/styles/img/sico_google_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="#"><img src="/styles/img/sico_rss_circle_color.png" width="50px" height="50px"/></a>&nbsp;
                        <a href="https://github.com/code4pt/dcid"><img src="/styles/img/sico_github_circle_black.png" width="50px" height="50px"/></a>&nbsp;
                    </p>
                    <p><code>#code4pt</code> <code>#dcid</code> <a class="btn" href="contact.php"><i class="icon-envelope"></i>&nbsp;Contacts</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
