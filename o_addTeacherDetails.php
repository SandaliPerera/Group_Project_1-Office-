<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d1", $dutyID)) {
	?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="../css/pop.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div id="officeNav"></div>


    <div class="content">
        <div class="container">
            <form action="../../src/o_addTeacherDetails.php" method="POST">
                <h1>Add Teacher Details</h1>
                <hr>

                <label for="name"><b>ID</b></label>
                <input type="text" placeholder="Enter ID" name="id"
                    value="<?php if (isset ($_GET['userID'])){echo $_GET['userID'];}?>" required>

                <label for="fname"><b>First Name</b></label>
                <input type="text" placeholder="Enter Name" name="fname" required>
                <label for="lname"><b>Last Name</b></label>
                <input type="text" placeholder="Enter Name" name="lname" required>

                <label for="nic"><b>NIC</b></label>
                <input type="text" placeholder="Enter NIC" name="nic" required>

                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required>

                <label for="dob"><b>Date of Birth</b></label>
                <input type="date" placeholder="Enter Date of Birth" name="dob" required>


                <label><b>Gender:</b></label>
                <label> <input type="radio" name="gender" value="male"> Male</label>
                <label> <input type="radio" name="gender" value="female"> Female</label>
                <label><input type="radio" name="gender" value="other"> Other</label>

                <br></br>
                <br></br>
                <br>

                <label for="stuAddress"><b>Residential Addresss</b></label>
                <input type="text" placeholder="Enter current address" name="address" required>

                <label for="ContactNo"><b>Contact Number</b></label>
                <input type="text" placeholder="Enter Contact Number" name="ContactNo">

                <label><b>Teacher Type:</b></label>
                <label> <input type="checkbox" name="checkbox[1]" value="classsTeacher"> Class Teacher</label>
                <label> <input type="checkbox" name="checkbox[2]" value="TcrinCharge"> Teacher In charge</label>


                <hr>

                <button type="submit" class="registerbtn" name="regbtn">Save</button>

            </form>

        </div>

    </div>


</body>

</html>