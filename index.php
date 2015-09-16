<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta property="og:url"           content="http://www.fototube.com.br/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="FotoTube" />
    <meta property="og:description"   content="Fototube. Serviço de coleta e transmissão de mídia em seu evento." />
    <meta property="og:image"         content="https://fbcdn-sphotos-g-a.akamaihd.net/hphotos-ak-xft1/t31.0-8/11406349_853935531360141_2801376169339397453_o.jpg" />

    <title>FotoTube</title>

    <link rel="icon" href="img/favicon.png" type="image/x-icon" />

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/jquery.pagepiling.css" />
    <link rel="stylesheet" href="css/main.css?v=<?php echo time();?>" />
    <link rel="stylesheet" href="css/mobile.css?v=<?php echo time();?>" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/zf/dt-1.10.9,r-1.0.7/datatables.min.css"/>
  </head>
  <body>
<!-- NAV -->
<?php include('includes/menu.php');?>
<div id="pagepiling">
  <!-- HOME -->
<?php include('includes/home.php');?>
  <!-- HOW IT WORKS -->
<?php include('includes/howWorks.php');?>
  <!-- PLANS -->
<?php include('includes/plans.php');?>
  <!-- REGISTER -->
<?php include('includes/register.php');?>
  <!-- PAYMENT -->
<?php //include('includes/payment.php');?>
  <!-- CONTACT -->
<?php include('includes/contact.php');?>
  <!-- ORDER STATUS -->
<?php include('includes/orderStatus.php');?>
</div>


    <script src="js/vendor/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/r/zf/dt-1.10.9,r-1.0.7/datatables.min.js"></script>
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/jquery.pagepiling.js"></script>
    <script src="js/jquery.maskedinput.min.js"></script>

    <script src="js/wow.js"></script>
    <script src="js/main.js?v=<?php echo time();?>"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3&appId=431818303642036";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  </body>
</html>