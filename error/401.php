<?php 
  header("HTTP/1.0 401 Unauthorized");
  include($_SERVER['DOCUMENT_ROOT'] . '/ad_inserter.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <meta name="description" content="Error 401 - Unauthorized - Ultifree Hosting" />
        <meta name="robots" content="noindex">

        <title>Unauthorized - Ultifree Hosting</title>

        <script src="../js/blockadblock.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Merriweather:300,700' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/b2b26cfd37.js"></script>
        <link href="../css/style.css" rel="stylesheet">
        <link rel="icon" href="../images/favicon.png">
        <script async src="../js/analytics.js"></script>
    </head>
    <body>

    <?php include '../nav.php';?>

        <section class="content">
          <div class="container" id="error_container">
            <h1>Error 401 - Unauthorized</h1>

            <br />
            <?php insertAds('erro01', false);?>
            <br />

            <p>
              Sorry, you do not have permission to access this page. The website owner requires you to login.
            </p>

            <br />

            <h3 style="text-align:center;">Here are some places you could go:</h3>

            <ul style="text-align:center;">
                <li><a href="../index.php#pricing">Free Hosting</a></li>
                <li><a href="../index.php#pricing">Premium Hosting</a></li>
                <li><a href="../faq.php">FAQ/Support</a></li>
                <li><a href="https://app.ultifreehosting.com">Login</a></li>
            </ul>

            <br />
            
            <?php insertAds('erro02', false);?>
            
          </div>
        </section>

        <?php include '../footer.php';?>

        <script>notMainFolder = true;</script>
        <script data-cookieconsent="ignore" src="../js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../js/detectmobilebrowser.js"></script>
        <script src="../js/script.js"></script>

    </body>
</html>
