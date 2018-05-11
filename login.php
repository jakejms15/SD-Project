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
    </head> 
    
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
            <div class="container">            
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                        <li class="nav-item active">
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

        <div class="container">
            <div class="row centered-form">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">Sign In</h1>
                        </div>
                        <div class="panel-body">
                            <form action="login.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>      
                                <div class="row ml-1">
                                    <a href="forgotPass.php">Forgot Password</a>
                                </div><br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="submit" class="btn btn-info btn-block"value="Sign In">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
            if((isset($_POST['submit']))){
                
                if((!isset($_POST['email'])) || (!isset($_POST['password']))){
                    echo "Both values must be set";
                } else {
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    
                    $connection = mysqli_connect("localhost", "root", "", "booking_db", "3306");
                    if(mysqli_connect_errno()){
                        echo "Error: Could not connect to database. Please try again later";
                        exit;
                    }
                    
                    $query = "SELECT count(*) FROM tbl_client
                              where Email = '$email' AND Password = '$password' ";
                    
                    $query2 = "SELECT UserId FROM tbl_client 
                                WHERE Email = '$email' AND Password = '$password'";
                    
                    $result = mysqli_query($connection, $query)
                        or die("Error in query: ". mysqli_error($connection));
                    
                    $result2 = mysqli_query($connection, $query2)
                        or die("Error in query: ". mysqli_error($connection));

                    $row = mysqli_fetch_row($result);
                    $count = $row[0];
                    $message = "Incorrect Email or Password";
                    
                    if($count > 0) 
                    {
                        session_start();
                        $row2 = mysqli_fetch_row($result2);
                        $_SESSION["UserId"] = $row2[0];
                        header('Location: homeLogged.php');
                        
                    } 
                    else 
                    {
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
            }
        ?>
         <!-- javascript files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>