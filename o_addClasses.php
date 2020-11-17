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
    <title>Add O/L Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/pop.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
</head>

<body>

    <div id="officeNav"></div>


    <div class="content">
        <div class="container">
            <form action="../../src/o_addOl.php" method="POST">
                <h1>Add Classes</h1>
                <hr>

                <label for="noOfClasses"><b>Number Of Classes</b></label>
                <input type="text" placeholder="Enter Class Number" name="noOfClasses" required>

                <label for="noOfStu"><b>Maximum Number of students</b></label>
                <input type="text" placeholder="Enter Maximum Number" name="noOfStu" required>

                <br>


                <hr>

                <button type="submit" class="registerbtn" name="savebtn">Save</button>

            </form>

        </div>

    </div>


</body>

</html>

<?php } ?>