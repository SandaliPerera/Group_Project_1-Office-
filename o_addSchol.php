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
        <div class="regcontainer">
            <form action="../../src/o_addschol.php" method="POST">
                <h1>Add Grade 5 Scholarship Exam Results</h1>
                <hr>

                <label for="examID"><b>Exam ID</b></label>
                <input type="text" placeholder="Enter Exam ID" name="examID" required>

                <label for="scholExamYear"><b>Enter Exam Year</b></label>
                <input type="text" placeholder="Enter Exam Year" name="scholExamYear" required>

                <label for="examName"><b>Exam Name</b></label>
                <input type="text" placeholder="Enter Exam Name" name="examName" required>

                <br>

                <hr>

                <button type="submit" class="registerbtn">Save</button>
                <a href="o_teachersList.php" class="cancel-btn">Cancel</a>
                <hr>
            </form>

        </div>

    </div>


</body>

</html>

<?php } ?>