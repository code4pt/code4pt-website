<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "code4pt@gmail.com";
    $email_subject = "Sugestão de Ideia";
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below:<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    
    // validation expected data exists
    if(!isset($_POST['prob_desc']) ||
        !isset($_POST['prob_tags']) ||
        !isset($_POST['sol_desc']) ||
        !isset($_POST['firstname']) ||
        !isset($_POST['lastname']) ||
        !isset($_POST['email'])) {
        died('Por favor, preencha todos os campos. / Please, fill all fields.');       
    }
     
    $problem_desc = $_POST['prob_desc'];
    $problem_tags = $_POST['prob_tags'];
    $solution_desc = $_POST['sol_desc'];
    $name = $_POST['firstname']." ".$_POST['lastname'];
    $email = $_POST['email'];
    
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Nome: ".clean_string($name)."\n\n";
    $email_message .= "Problema: ".clean_string($problem_desc)."\n\n";
    $email_message .= "Problema tags: ".clean_string($problem_tags)."\n\n";
    $email_message .= "Solução: ".clean_string($sol_desc)."\n\n";
    $email_message .= "Contacto: ".clean_string($email)."\n\n";
     
     
    // create email headers
    $headers = 'From: '.$email."\r\n".
    'Reply-To: '.$email."\r\n" .
    'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<!DOCTYPE html>
<html lang="pt">
    <head>
        
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Code4PT">
    <link rel="shortcut icon" href="/styles/img/favicon.ico">

    <!-- Le styles -->
    <link href="/styles/css/bootstrap.css" rel="stylesheet">
    <style>
        body {padding-top: 60px;}
    </style>
    <link href="/styles/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        <title>Code4PT, juntos programamos um Portugal melhor</title>
        <meta name="description" content="">
    </head>
    <body>
    
    <br/>
    <p align="center">Obrigado, vamos analisar a sua proposta. <a href="http://www.code4pt.info/">Voltar ao site.</a></p>
    <p align="center">Thank you, we'll analyse your proposal. <a href="http://www.code4pt.info/en">Return to the website.</a></p>
    
    </body>
</html>
 
<?php
}
?>