<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Cupping's</title>
        <link rel="stylesheet" type="text/css" href="css/style.css"?v=3.4.2>
        <!-- charset meta tag -->
        <meta charset="utf-8">
        <!-- Responsive meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS (CDN) -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        
        <!-- font awesome -->
        <script src="https://use.fontawesome.com/4f7c6bbdcb.js"></script>
        
        <script src="js/map.js"></script>
    </head> 
    
    <body onload="myMap();">
        
         <?php if (isset($_SESSION['UserId'])) { ?>
        
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
            <div class="container">         
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">                        
                        <li class="nav-item">
                            <a class="nav-link" href="homeLogged.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signOut.php">Sign Out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="contactLogged.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menuLogged.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Make A Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="viewBooking.php">View Your Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deleteBooking.php">Delete Your Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
          <div class="container">
            <div class="row centered-form">
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-12">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">Contact Us</h1>
                        </div>
                        <div class="panel-body">
                            <form action="contactLogged.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div id="map" style="height:400px;"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3>Send Us A Message!</h3>
                                        <div class="row">
                                            <div class="col-md-12"><br/>
                                                <input type="text" class="form-control" name="userId" id="userId" placeholder="User Id" required>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12"><br/>
                                                <textarea type="text" class="form-control" name="message" placeholder="Enter Your Message" rows="10"required></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"><br/>
                                                <input type="submit" name="Submit" value="Send Message" class="btn btn-info btn-block">
                                            </div>
                                        </div><br/>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h5 style="font-weight:bold; text-decoration: underline;">Phone Numbers:</h5>
                                                <h5>T: 21 123 456</h5>
                                                <h5>M: 79/99 123 456</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"><br/>
                                                <h5 style="font-weight:bold; text-decoration: underline;">Address:</h5>
                                                <h5>Cupping's</h5>
                                                <h5>Kordin Street</h5>
                                                <h5>Paolo PLA 1234</h5>
                                                <h5>Malta</h5>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        else
                  {?>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
            <div class="container">            

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php include 'ifSession.php'; ?>
                      
        <?php }?>
        <?php        
            if(isset($_POST['Submit']))
            {
                $userId = $_POST['userId'];
                $message = $_POST['message'];                      
                mail("software.project.testing@gmail.com", "Message Us", $message, $userId);


            }
        ?>
   
         <!-- javascript files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDak6dbeVxemURykmld79GKTKbFLZuI0aE&callback=myMap"></script>
        
    </body>
</html>