<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require(PHP_ROOT.'en_base.php'); require(PHP_ROOT.'en_common_home.php');
              echo $BS_header ?>
        <title>Code4PT - Idea submission</title>
        <meta name="description" content="">
    </head>
    <body>

        <?php echo $navbar_top_home; ?>
        
        <div class="container">

            <div class="row-fluid">
                <div class="span12">
                    
                    <p><span class="label label-info">Please note</span> Before submiting your idea have a look at the idea pool below. Only submit a new idea if it doesn't already exist.</p>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <form name="ideaform" action="/styles/php/idea-to-email.php" method="post">
                        <legend><h2>Idea submission</h2></legend>
                        <label>Describe the problem:</label>
                        <textarea class="span12" rows="2" name="prob_desc" placeholder="using less than 200 characters"></textarea>
                        <label>Problem's keywords:</label>
                        <input class="span12" type="text" name="prob_tags" placeholder="separate each with a comma ','" />
                        <label>Describe how the problem can be solved using technology:</label>
                        <textarea class="span12" rows="2" name="sol_desc" placeholder="using less than 200 characters"></textarea>
                        <label>Your name:</label>
                        <input type="text" name="firstname" placeholder="First Name" />
                        <input type="text" name="lastname" placeholder="Last Name" />
                        <label>Your email:</label>
                        <input type="text" name="email" placeholder="___@___.___" onfocusout="validateEmail()" />
                        <br/>
                        <input class="btn" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h2>Idea pool</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tags</th>
                                <th>Problem's summary</th>
                                <th>Solution's summary</th>
                                <th>Proposer</th>
                                <th>Contact</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="badge">democracy</span> <span class="badge">web 2.0</span> <span class="badge">vote</span> <span class="badge">website</span> <span class="badge">community</span></td>
                                <td>City councils have started implementing Participatory Budgets. Each one spends money and time developing its own ad hoc voting website. Authentication uses personal emails which isn't reliable.</td>
                                <td>A standard platform offering a way to submit proposals, create pools, vote and debate opinions. The users' login should be attested using the citizens' Cartão de Cidadão.</td>
                                <td>Diogo Nunes</td>
                                <td>dialex.nunes@gmail.com</td>
                                <td><span class="label label-info">Under development</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <?php echo $footer; ?>

        </div>

        <?php echo $JS_scripts; ?>
        <?php echo $google_analytics; ?>

    </body>
</html>