<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }
    else if($_SESSION['userType'] != 'officer'){
        header('Location: ../common/error.html');
    }
    else{      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (!in_array("d6", $dutyID)) {
         header('Location: o_dashboard.php');
        }
	?>

<!DOCTYPE html>
<html>

<head>

    <?php
include_once '../../config/conn.php';
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Classes</title>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <link type="text/css" rel="stylesheet" href="../css/register2.css">
    <link type="text/css" rel="stylesheet" href="../css/class.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
</head>

<body>
    <div id="officeNav"></div>

    <div class="content">
        <h1>Class 1A</h1>


        <div class="l-part">
            <label for="name"><b>Class Teacher</b></label>
            <input type="text" placeholder="W.H.M.Gunathilaka" name="name" required>
        </div>
        <div class="r-part">
            <label for="medium"><b>Medium</b></label>
            <input type="text" placeholder="Sinhala" name="medium" required>
        </div>
        <button type="submit" formaction="">Update</button>
        <br>
        <br>
        <div class="card">
            <br>
            <br>
            <hr>
            <table>
                <tr>
                    <th>Admission number</th>
                    <th>Student name</th>
                    <th>View Profile</th>
                </tr>
                <tr>
                    <td>AAA</td>
                    <td>BBB</td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="SProfile.php">View</button></form>
                    </td>

                </tr>
                <tr>
                    <td>AAA</td>
                    <td>BBB</td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="SProfile.php">View</button></form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>

<?php } ?>