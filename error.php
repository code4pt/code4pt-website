<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Code4PT">
    <link rel="shortcut icon" href="/styles/img/favicon.ico">

    <!-- Le styles -->
    <link href="/styles/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {padding-top: 60px;}
    </style>
    <link href="/styles/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <title>Code4PT | Error</title>
</head>

<body>

    <div class="hero-unit">
    <?php
    
    $status = $_SERVER['REDIRECT_STATUS'];
    $codes = array(
            403 => array('403 Forbidden', 'The server has refused to fulfill your request.'),
            404 => array('404 Not Found', 'The document or file requested was not found.'),
            405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'),
            408 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
            500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'),
            502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
            504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.')
            );
            
    $title = $codes[$status][0];
    $message = $codes[$status][1];
    if ($title == false || strlen($status) != 3) {
        $message = 'Unknown error code.';
    }
    echo '<h1>' , $title , '</h1>' ,"\n", 
         '<p>' , $message , '</p>';
    ?>
    </div>
    
    <p>Pedimos desculpa, pois <strong><em>ocorreu um erro</em></strong> ao tentar aceder à página que indicou. Escreveu o endereço correctamente?</p>
    <p><strong>Experimente visitar a página principal em <a href="http://www.code4pt.info">www.code4pt.info</a></strong></p>

</body>
</html>