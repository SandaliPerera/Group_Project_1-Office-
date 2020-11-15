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
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grade 5 Scholarship Examination Results - 2016</title>
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

        <h1>Grade 5 Scholarship Examination Results - 2016</h1>
        <form class="search" action="addStudentDetails.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>


        <br>
        <br>
        <br>



        <div class="card">

            <br>
            <br>

            <hr>
            <table>
                <tr>
                    <th>Student Index Number</th>
                    <th>A/L Index Number</th>
                    <th>Student Name</th>
                    <th>Results</th>


                </tr>
                <tr>
                    <td>S1234</td>
                    <td>13526246</td>
                    <td>A.B.C. Student</td>
                    <td>180</td>

                </tr>
            </table>
        </div>


    </div>

</body>

</html>