<?php
// email
$email = $_POST["email"];

// name
$name = $_POST["name"];

// the message
$msg = "Someone has registered!\nName: ".$name."\nEmail: ".$email;

// headers
$headers = "From: ".$email. "\r\n";
$headers .= "Reply-To: ".$email. "\r\n";
$headers .= "BCC: spaanem@gmail.com\r\n";

// send email
mail("spaanem@gmail.com","Alta Registration",$msg);
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel='stylesheet' id='google-font-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C600%2C700%7CLora%3A400%2C700%7CDroid+Sans+Mono' type='text/css' media='all' />
        <link rel="stylesheet" href="css/styles.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container__large">
          <header>
            <img src="img/alta_logo.svg" alt="Alta Planning + Design Logo" class="Logo">
          </header>
          <main>
            <p>Thanks for registering! We&rsquo;ll be contacting you soon with more details.</p>
            <h4>Stay Tuned!</h4>
          </main>
        </div>
        <footer>
          <div class="container__large">
            <p>Copyright © 2016, Alta Planning + Design. <br class="hide-for-medium">All rights reserved.</p>
          </div>
        </footer>
        </div>
    </body>
</html>
