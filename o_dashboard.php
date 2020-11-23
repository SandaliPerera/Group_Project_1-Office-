<?php
session_start();

if (!isset($_SESSION['userType']) && !isset($_SESSION['userID'])) {
  $error = "Please Login!";
  header('Location: ../common/loginFile.php?error=' . $error);
}
else if ($_SESSION['userType'] != 'officer') {
  header('Location: ../common/error.html');
}
else{
  $userID = $_SESSION['userID'];
  
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/dashboard.css">
    <title>Admin Dashboard</title>
</head>

<body>

    <div id="officeNav"></div>
    <div class="content">
        <div class="welcome">
            <div class="dash-content">
                <h2>Welcome to Dashboard</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>

        <table class="statis one">
            <tr>
                <td>
                    <div class="box">
                        <i class="fa fa-users "></i>
                        <div class="info">
                            <h3>4,245</h3> <span>Students</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="box">
                        <i class="fa fa-users"></i>
                        <div class="info">
                            <h3>64</h3> <span>Teachers</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="box">
                        <i class="fa fa-users "></i>
                        <div class="info">
                            <h3>25</h3> <span>Office Staff</span>
                            <p>Lorem ipsum dolor sit amet</p>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
        <div class="charts">
            <div class="chart-container">
                <h3>Chart</h3>
                <hr>
                <img src="../../images/chart1.png">
            </div>
            <div class="chart-container">
                <h3>Chart2</h3>
                <hr>
                <img src="../../images/chart2.png">
            </div>
        </div>


        <table class="statis two">
            <tr>
                <td>
                    <div class="box ">
                        <i class="fa fa-futbol-o"></i>
                        <h3>20 Sports</h3>
                        <p class="lead">Page views</p>
                    </div>
                </td>
                <td>
                    <div class="box ">
                        <i class="fa fa-music"></i>
                        <h3>20</h3>
                        <p class="lead">Societies</p>
                    </div>
                </td>
                <td>
                    <div class="box ">
                        <i class="fa fa-shopping-cart"></i>
                        <h3>5,154</h3>
                        <p class="lead">Product sales</p>
                    </div>
                </td>
                <td>
                    <div class="box ">
                        <i class="fa fa-handshake-o"></i>
                        <h3>5,154</h3>
                        <p class="lead">Transactions</p>
                    </div>
                </td>
            </tr>
        </table>


</body>

</html>

<?php } ?>