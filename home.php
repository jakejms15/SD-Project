<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Cupping's</title>
        <link rel="stylesheet" type="text/css" href="css/homeStyle.css?v=3.4.2">
        <!-- charset meta tag -->
        <meta charset="utf-8">
        <!-- Responsive meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS (CDN) -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        
        <!-- font awesome -->
        <script src="https://use.fontawesome.com/4f7c6bbdcb.js"></script>
    </head> 
    
    <body>
        
         <?php 
            if (isset($_SESSION['UserId'])) 
            { 
                include 'navbarLogged.php';
            }
            else
            {
                include 'navbar.php';
            }
        ?>
        <div class="jumbotron m-4">
            <h1 class="display-3">Cupping's Restaurant</h1>

            <p>Overlooking the sea, enclosed within historically rich walls, Cupping's serves genuine Mediterranean cuisine. With a rich and varied menu that spans a wide range of dishes, our main concern is your satisfaction and enjoyment.</p>

            <p>For families, groups of friends or even just a romantic night out as a couple, Cupping's, with its relaxing, comfortable and upscale ambiance, will provide the tranquility that is so rare to find nowadays.</p>
        </div>
        
        <!-- javascript files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>