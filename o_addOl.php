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

      if (!in_array("d2", $dutyID)) {
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
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    
</head>

<body>

    <div id="officeNav"></div>


    <div class="content">
        <div class="regcontainer">
            <form action="../../src/o_addOl.php" method="POST">
                <h1>Add G.C.E. O/L Examination Results</h1>
                <hr>

                <label for="examID"><b>Exam ID</b></label>
                <input type="text" placeholder="Enter Exam ID" name="examID" required>

                <label for="olExamYear"><b>Enter Exam Year</b></label>
                <input type="text" placeholder="Enter Exam Year" name="olExamYear" required>

                <label for="examName"><b>Exam Name</b></label>
                <input type="text" placeholder="Enter Exam Name" name="examName" required>

                <button type="submit" class="registerbtn" name="savebtn">Save</button>
                <a href="o_viewOl.php" class="cancel-btn">Cancel</a>

            </form>

        </div>

    </div>


</body>

</html>

<?php } ?>