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
                            <a class="nav-link" href="homeLogged.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signOut.php">Sign Out</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactLogged.php">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menuLogged.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="booking.php">Make A Booking</a>
                        </li>
                        <li class="nav-item active">
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">View Your Booking</h1>
                        </div>
                            <div class="panel-body">
                            <form action="viewBooking.php" method="post">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="userId" id="userId" class="form-control" placeholder="Enter User Id" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" name="Submit" class="btn btn-info btn-block">
                                    </div>
                                </div>
                                 <?php        
        
                                if(isset($_POST['Submit']))
                                {
                                    $userId = $_POST['userId'];

                                    $conn = mysqli_connect("localhost", "root", "", "booking_db", "3306");
                                    if (mysqli_connect_errno())
                                    {
                                        echo "Error: Could not connect to database. Please try again
                                        later";
                                        exit;
                                    } 
                                    $query = "SELECT * FROM tbl_booking WHERE UserId = $userId";

                                    $result = mysqli_query($conn, $query)
                                        or die("Error in query: ". mysqli_error($conn));

                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "Booking ID: $row[BookingId]<br/>";
                                        echo "Day: $row[Day]<br/>";
                                        echo "Month: $row[Month]<br/>";
                                        echo "Year: $row[Year]<br/>";
                                        echo "Table Number: $row[TableNumber]<br/>";
                                        echo "User ID: $row[UserId]<br/><br/>";
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