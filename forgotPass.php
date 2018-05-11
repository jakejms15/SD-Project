<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to Cupping's</title>
        <link rel="stylesheet" type="text/css" href="css/style.css?v=3.4.2">
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
        <div class="container">
            <div class="row centered-form">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">Get Password</h1>
                        </div>
                            <div class="panel-body">
                            <form action="forgotPass.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="Submit" value="Send Password" class="btn btn-info btn-block">
                                    </div>
                                </div>
                                 <?php        
        
                                if(isset($_POST['Submit']))
                                {
                                    $email = $_POST['email'];
                                    $conn = mysqli_connect("localhost", "root", "", "booking_db", "3306");
                                    if (mysqli_connect_errno())
                                    {
                                        echo "Error: Could not connect to database. Please try again
                                        later";
                                        exit;
                                    } 
                                    $query = "SELECT Password FROM tbl_client WHERE Email = '$email'";

                                    $result = mysqli_query($conn, $query)
                                        or die("Error in query: ". mysqli_error($conn));

                                    while ($row = mysqli_fetch_assoc($result)){                                       
                                        $message = "Hi! your password is $row[Password]";
                                        mail($email, "Password Recovery", $message);
                                    }


                                }
                            ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
         <!-- javascript files -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </body>
</html>