<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(PHP_ROOT.'en_base.php'); require(PHP_ROOT.'en_common_dcid.php');
              echo $BS_header ?>
        <title>DCID - Developers homepage</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container-fluid">

            <div class="hero-unit">
                <h1>We intend to update democracy.</h1>
                <h1>Bit by bit.</h1>
                <p></p>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <h2>The problem</h2>
                    <p class="lead">Some city councils have started implementing Participatory Budgets. This is a major step towards a more participative democracy. However, each city council spends money and time developing its own <i>ad hoc</i> voting website. Also more and more enterprises need to manage their internal innovation.</p>
                </div>
                <div class="span6">
                    <h2>Our solution</h2>
                    <p class="lead">DCID (spelled <em>decide</em>) is an online platform that offers an intuitive way to discuss arguments and vote on polls online. It provides transparency and scalability to your decision process.</p>
                </div>
            </div>
            
            <div class="row-fluid">
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
