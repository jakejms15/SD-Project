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
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 mb-3">
            <div class="container">            

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="register.php">Register</a>
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

        <div class="container">
            <div class="row centered-form">
                <div class="col-md-12">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">Register</h1>
                        </div>
                            <div class="panel-body">
                            <form action="register.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fName" id="fName" class="form-control" placeholder="First Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="lName" id="lName" class="form-control" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="userId" id="userId" class="form-control" placeholder="ID Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="form-group"><input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <h5 style="margin-left: 15px;">Would you like to subscribe to our email newsletter?</h5>
                                        <input type="radio" name="emailSub" value="1" style="margin-left: 15px;" checked>Yes<br/>
                                        <input type="radio" name="emailSub" value="0" style="margin-left: 15px;">No
                                    </div>
                                </div>
                                
                                <input type="submit" name="Submit" class="btn btn-info btn-block">
                                <?php        
                                    if(isset($_POST['Submit']))
                                    {
                                        $userId = $_POST['userId'];
                                        $fName = $_POST['fName'];
                                        $lName = $_POST['lName'];
                                        $mobile = $_POST['mobile'];
                                        $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        $sub = $_POST['emailSub'];

                                        $conn = mysqli_connect("localhost", "root", "", "booking_db", "3306");
                                        if (mysqli_connect_errno())
                                        {
                                            echo "Error: Could not connect to database. Please try again
                                            later";
                                            exit;
                                        } 
                                       
                                        
                                        $query2 = "SELECT count(*) FROM tbl_client
                                                    where Email = '$email'";

                                        $result2 = mysqli_query($conn, $query2)
                                            or die("Error in query: ". mysqli_error($conn));

                                        $row = mysqli_fetch_row($result2);
                                        $count = $row[0];  
                                        
                                        $query3 = "SELECT count(*) FROM tbl_client
                                                    where UserId = '$userId'";

                                        $result3 = mysqli_query($conn, $query3)
                                            or die("Error in query: ". mysqli_error($conn));

                                        $row2 = mysqli_fetch_row($result3);
                                        $count2 = $row2[0];        
                                    
                                        
                                        if($count > 0) 
                                        {
                                            echo "<script type='text/javascript'>alert('Email already in use!');</script>";
                                        }
                                        else if($count2 > 0)
                                        {
                                            echo "<script type='text/javascript'>alert('User ID already in use!');</script>";
                                        }
                                        else
                                        {
                                             $query = "INSERT INTO tbl_client (UserId, FirstName, LastName, MobileNumber, Email, Password, Subscribed)
                                                    VALUES ('$userId', '$fName', '$lName', '$mobile', '$email', '$password', '$sub')";
                                             $result = mysqli_query($conn, $query)
                                            or die("User ID already used! Please user a different ID.");
                                            $header = "Registration Successful!";
                                            $message = "Welcome to the team $fName";
                                            mail($email, "Registration Successful", $message, $header);
                                            
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