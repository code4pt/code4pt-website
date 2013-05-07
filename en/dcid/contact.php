<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(PHP_ROOT.'en_base.php'); require(PHP_ROOT.'en_common_dcid.php');
              echo $BS_header ?>
        <?php require_once(PHP_ROOT.'privatedaddy.php'); ?>
        <title>dcid - Contacts</title>
        <meta name="description" content="">
    </head>

    <body>

        <?php echo $navbar_top_dcid; ?>

        <div class="container">

            <div class="row">
                <div class="span12 well">
                    <h1>Choose wisely...</h1>
                </div>
            </div>

            <div class="row">
                <div class="span4">
                    <h2>More information</h2>
                    <p><a href="mailto:email@code4pt.info">email@code4pt.info</a></p>
                </div>
                <div class="span4">
                    <h2>Suggestions</h2>
                    <p><a href="mailto:email@code4pt.info">email@code4pt.info</a></p>
                </div>
                <div class="span4">
                    <h2>Project leader</h2>
                    <p><a href="mailto:email@code4pt.info">email@code4pt.info</a></p>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>
