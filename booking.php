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
                        <li class="nav-item active">
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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-default ml-3 p-3">
                        <div class="panel-heading">
                            <h1 class="panel-title">Make A Booking</h1>
                        </div>
                            <div class="panel-body">
                            <form action="booking.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="day">
                                                <option value="select">Select Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="month">
                                                <option value="select">Select Month</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="year">
                                                <option value="select">Select Year</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input type="text" class="form-control" name="userId" id="userId" placeholder="User Id" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <h5 style="margin-left: 15px;">What table would you like to choose?</h5>
                                        <input type="radio" name="tableNum" value="1" style="margin-left: 15px;" checked>1
                                        <input type="radio" name="tableNum" value="2" style="margin-left: 15px;">2
                                        <input type="radio" name="tableNum" value="3" style="margin-left: 15px;">3
                                        <input type="radio" name="tableNum" value="4" style="margin-left: 15px;">4
                                        <input type="radio" name="tableNum" value="5" style="margin-left: 15px;">5<br/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="submit" name="Submit" class="btn btn-info btn-block">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php        
        
        if(isset($_POST['Submit']))
        {
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $tableNum = $_POST['tableNum'];
            $userId = $_POST['userId'];
            
            
                $conn = mysqli_connect("localhost", "root", "", "booking_db", "3306");
                if (mysqli_connect_errno())
                {
                    echo "Error: Could not connect to database. Please try again
                    later";
                    exit;
                } 
            
                $query2 = "SELECT count(*) FROM tbl_booking
                                WHERE Day = '$day' AND Month = '$month' AND Year = '$year' AND TableNumber = '$tableNum'";
            
                    
                $result2 = mysqli_query($conn, $query2)
                    or die("Error in query: ". mysqli_error($conn));

                $row = mysqli_fetch_row($result2);
                $count = $row[0];

                if($count > 0) 
                {
                    echo "<script type='text/javascript'>alert('Table already booked. Please choose a different table of a different date!');</script>";

                } 
            else
            {
                if($month != "select" || $day != "select" || $year != "select")
                {
                    $query = "INSERT INTO tbl_booking (Day, Month, Year, TableNumber, UserId)
                                VALUES ('$day', '$month', '$year', '$tableNum', '$userId')";

                    $result = mysqli_query($conn, $query)
                        or die("Error in query: ". mysqli_error($conn));
                    echo "<script type='text/javascript'>alert('Table Booked');</script>";
                }
                else
                {

                    echo "<script type='text/javascript'>alert('Choose a correct date');</script>";
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