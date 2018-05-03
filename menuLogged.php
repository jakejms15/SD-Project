<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Cupping's</title>
        <link rel="stylesheet" type="text/css" href="css/styleMenu.css?v=3.4.2">
        <!-- charset meta tag -->
        <meta charset="utf-8">
        <!-- Responsive meta tag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Bootstrap CSS (CDN) -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        
        <!-- font awesome -->
        <script src="https://use.fontawesome.com/4f7c6bbdcb.js"></script>
    </head> 
    
    <body id="cont">
        
        <?php if (isset($_SESSION['UserId'])) { ?>
        
        <nav class=" navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
            <div class="container">                            
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">                        
                        <li class="nav-item">
                            <a class="nav-link" href="homeLogged.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signOut.php">Sign Out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactLogged.php">Contact Us</a>
                        </li>
                        <li class="nav-item active">
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
                <div class="col-md-12">
                    <div class="panel panel-default ml-3 p-3"  style="background-color: #24262d ; height: 1680px;">
                        <div class="panel-heading">
                            <br/><br/>
                            <h1 style="text-decoration: underline; text-align: center;">Menu</h1><br/><br/>
                        </div>
                            <div id="pBody">
                                <div id="food">
                                    <h3>Starters</h3>
                                    <h4>Mushroom in Garlic</h4>
                                    <h4>Garlic Bread</h4>
                                    <h4>Cheesy Bruschetta</h4>
                                    <br/><div id="sLast"></div><br/>
                                    <h3>Pizza</h3>
                                    <h4>Margherita</h4>
                                    <h6>Tomato Sauce, Mozarella</h6>
                                    <h4>Funghi</h4>
                                    <h6>Tomato Sauce, Mozarella, Mushrooms</h6>
                                    <h4>Capricciosa</h4>
                                    <h6>Tomato Sauce, Mozarella, Mushrooms, Ham, Olives, Eggs</h6>
                                    <h4>Maltese</h4>
                                    <h6>Tomato Sauce, Mozarella, Cheeselet, Maltese Sausage, Salami, Capers</h6>
                                    <h4>BBQ Chicken</h4>
                                    <h6>Tomato Sauce, Mozarella, Chicken, Green Peppers, Corn, BBQ Sauce</h6>
                                    <h4>Marinara</h4>
                                    <h6>Tomato Sauce, Shrimps, Muscles, Octopus, Olives</h6>
                                    <br/><div id="sLast"></div><br/>
                                    <h3>Burgers</h3>
                                    <h6>All served with chips and salad</h6>
                                    <h4>Plain Burger</h4>
                                    <h4>Cheese Burger</h4>
                                    <h4>Cheese & Egg Burger</h4>
                                    <h4>Deluxe Burger</h4>
                                    <br/><div id="sLast"></div><br/>
                                    <h3>Meat</h3>
                                    <h6>All served with chips, salad and Mushroom/Pepper Sauce</h6>
                                    <h4>Black Angus Ribeye</h4>
                                    <h4>Fillet</h4>
                                    <h4>T-Bone</h4>
                                    <h4>Veal T-Bone</h4>
                                    <h4>Siloin</h4>
                                    <br/><div id="sLast"></div><br/>
                                    <h3>Pasta</h3>
                                    <h6>A selection of spaghetti, tagliatelli or penne</h6>
                                    <h4>Napolitana</h4>
                                    <h4>Bolognese</h4>
                                    <h4>Carbonara</h4>
                                    <h4>Marinara</h4>
                                    <h4>Chicken & Spinach</h4>
                                    <h4>Salmon</h4>
                                </div>
                                <div id="price">
                                    <br/><br/>
                                    <h4>€5</h4>
                                    <h4>€2.50</h4>
                                    <h4>€3</h4>
                                    <br/><br/><br/>
                                    <h4>€5</h4>
                                    <br/>
                                    <h4>€6</h4>
                                    <br/>
                                    <h4>€7</h4>
                                    <br/>
                                    <h4>€7</h4>
                                    <br/>
                                    <h4>€8</h4>
                                    <br/>
                                    <h4>€9.50</h4>
                                    <br/><br/><br/><br/><br/><br/>
                                    <h4>€6</h4>
                                    <h4>€6.50</h4>
                                    <h4>€7</h4>
                                    <h4>€7.50</h4>
                                    <br/><br/><br/><br/><br/>
                                    <h4>€19.50</h4>
                                    <h4>€21.50</h4>
                                    <h4>€25</h4>
                                    <h4>€23</h4>
                                    <h4>€21</h4>
                                    <br/><br/><br/><br/><br/>
                                    <h4>€6</h4>
                                    <h4>€7</h4>
                                    <h4>€7</h4>
                                    <h4>€9</h4>
                                    <h4>€8</h4>
                                    <h4>€8.50</h4>
                                </div>
                                
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
       
         <!-- javascript files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>