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

      if (!in_array("d1", $dutyID)) {
         header('Location: o_dashboard.php');
        }
	?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<script src="../js/errors.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/messages.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>

<body>
<div id="nav"></div>
    

    <div class="content">
        <div class="container">
            <form action="../../src/o_addTeacherDetails.php" method="POST" onsubmit="return validateRegistrations()">
                <h1>Add Teacher Details</h1>
                <hr>

				<label for="name"><b>ID</b></label>
				<input type="text" placeholder="Enter ID" name="id" value = "<?php if (isset ($_GET['userID'])){echo $_GET['userID'];}?>" required>
				
				<label for="fname"><b>First Name</b></label>
				<input type="text" placeholder="Enter Name" name="fname" required>
				<label for="lname"><b>Last Name</b></label>
				<input type="text" placeholder="Enter Name" name="lname" required>

				<label for="nic"><b>NIC</b></label>
				<input type="text" placeholder="Enter NIC" id="nic" name="nic" onblur="NIC(nic.value)" required>


				<label for="dob"><b>Date of Birth</b></label>
				<input type="date" placeholder="Enter Date of Birth" name="dob" required>


				<label><b>Gender:</b></label>
				<br></br>
			 	<label> <input type="radio" name="gender" value="male"> Male</label>
			 	<label> <input type="radio" name="gender" value="female"> Female</label>
			  	<label><input type="radio" name="gender" value="other"> Other</label>

				
				<br></br>
				<br>
                
				<label for="email"><b>Email</b></label>
				<input type="email" placeholder="Enter Email" name="email" id="email" onblur="validateEmail(email.value)" required>
				
                <label for="stuAddress"><b>Residential Addresss</b></label>
                <input type="text" placeholder="Enter current address" name="address" required>

                <label for="contactNo"><b>Contact Number</b></label>
				<input type="text" placeholder="Enter Contact Number" name="contactNo" id="contactNo"  onblur="contact(contactNo.value)" required>
				
				<label><b>Teacher Type:</b></label>
				<br>
				<br>
				 <br>
				 <label> <input type="checkbox" name="checkbox[1]" id="t1" value="classTcr"> Class Teacher</label>
				 <br>
				 <br>
			 	<label> <input type="checkbox" name="checkbox[2]" id="t2" value="TcrinCharge"> Teacher In charge</label>

                <hr>
			   
				<button type="submit" class="registerbtn" name="regbtn">Save</button>
				<a href="o_teachersList.php" class="cancel-btn">Cancel</a>

            </form>
			<div id="msg"></div>
        </div>

    </div>

		
</body>
</html>


<?php } ?>