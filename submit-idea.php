<!DOCTYPE html>
<html lang="pt">
    <head>
        <?php require(PHP_ROOT.'base.php'); require(PHP_ROOT.'common_home.php');
              echo $BS_header ?>
        <title>Code4PT - Submissão de ideias</title>
        <meta name="description" content="">
    </head>
    <body>

        <?php echo $navbar_top_home; ?>
        
        <div class="container">

            <div class="row-fluid">
                <div class="span12">
                    
                    <p><span class="label label-info">Por favor</span> Antes de submeteres uma ideia deves verificar o nosso banco de ideias. Só deves submetê-la se ainda não existir uma semelhante.</p>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <form name="ideaform" action="/styles/php/idea-to-email.php" method="post">
                        <legend><h2>Submissão de ideia</h2></legend>
                        <label>Descreve o problema:</label>
                        <textarea class="span12" rows="2" name="prob_desc" placeholder="em menos de 200 caracters"></textarea>
                        <label>Palavras chave do problema:</label>
                        <input class="span12" type="text" name="prob_tags" placeholder="separadas por vírgulas ','" />
                        <label>Descreve como é que o problema pode ser resolvido usando tecnologia:</label>
                        <textarea class="span12" rows="2" name="sol_desc" placeholder="em menos de 200 caracteres"></textarea>
                        <label>O teu nome:</label>
                        <input type="text" name="firstname" placeholder="Primeiro nome" />
                        <input type="text" name="lastname" placeholder="Último nome" />
                        <label>O teu email:</label>
                        <input type="text" name="email" placeholder="___@___.___" onfocusout="" />
                        <br/>
                        <input class="btn" type="submit" value="Submeter">
                    </form>
                </div>
            </div>
            
            <div class="row-fluid">
                <div class="span12">
                    <h2>Banco de ideias</h2>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Temas</th>
                                <th>Resumo do problema</th>
                                <th>Resumo da solução</th>
                                <th>Proponente</th>
                                <th>Contacto</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><span class="badge">democracia</span> <span class="badge">web 2.0</span> <span class="badge">votar</span> <span class="badge">website</span> <span class="badge">comunidade</span></td>
                                <td>As Câmaras começaram a implementar Orçamentos Participativos. Cada uma gasta tempo e dinheiro a desenvolver o seu site de votação à medida. Autenticação é feita pelos emails pessoais o que não é fidedigno.</td>
                                <td>Uma plataforma standard online que permita submeter propostas, criar votações, votar e bedater opiniões. O login dos cidadãos deve ser feito através do Cartão de Cidadão.</td>
                                <td>Diogo Nunes</td>
                                <td>dialex.nunes@gmail.com</td>
                                <td><span class="label label-info">Em desenvolvimento</span></td>
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