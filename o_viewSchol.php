<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d2", $dutyID)) {
	?>

<!DOCTYPE html>

<head>
    <?php
include_once '../../config/conn.php';
?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade Scholarship Results</title>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
</head>

<body>
    <div id="officeNav"></div>

    <div class="content">

        <h1>Grade 5 Scholarship Examination Results</h1>
        <form class="search" action="register_stu.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>

        <br>
        <br>
        <br>

        <div class="card">
            <form>
                <button class="editbtn left" type="submit" formaction="o_addSchol.php">Add Year</button>
            </form>
            <br>
            <br>

            <hr>
            <table>
                <tr>
                    <th>Exam ID</th>
                    <th>Year</th>
                    <th>Name of the Examination</th>
                    <th>Edit Details</th>
                    <th>View Details</th>


                </tr>
                <tr>
                    <td>G5S2018</td>
                    <td>2018</td>
                    <td>Grade 5 Scholarship Examination - 2018</td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="o_scholCsv.php">Add Results</button>
                        </form>
                    </td>
                    <td>
                        <form><button class="btn viewbtn" type="submit" formaction="o_schol.php">View Results</button>
                        </form>
                    </td>

                </tr>
            </table>
        </div>

    </div>

</body>

</html>