<!DOCTYPE html>
<html>
<head>
	<title>Add Officer Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="../css/pop.css">
	<script src="../js/jquery-1.9.1.min.js"></script>
	<script src="../js/pop.js"></script>
	<script src="../js/nav.js"></script>
	<link type="text/css" rel="stylesheet" href="../css/main.css">
	<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>
    <div id="nav"></div>
    
    
    <div class="content">
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h1>Add Officer Details</h1>
                <hr>

					<label for="officerid"><b>ID</b></label>
					<input type="text" placeholder="Enter ID" name="officerid" required>
					
					<label for="ofname"><b>Name</b></label>
					<input type="text" placeholder="Enter Name" name="ofname" required>

					<label for="ofnic"><b>NIC</b></label>
					<input type="text" placeholder="Enter NIC" name="ofnic" required>

					<label for="ofemail"><b>Email</b></label>
					<input type="text" placeholder="Enter Email" name="ofemail" required>

					<label for="ofdob"><b>Date of Birth</b></label>
					<input type="text" placeholder="Enter Date of Birth" name="ofdob" required>

					<label for="ofposition"><b>Position</b></label>
					<input type="text" placeholder="Enter Position" name="ofposition" required>

					<label><b>Gender:</b></label>
					<label> <input type="radio" name="gender" value="male"> Male</label>
					<label> <input type="radio" name="gender" value="female"> Female</label>
					<label><input type="radio" name="gender" value="other"> Other</label>

					<br></br>
					<br></br>
					<br>
										
					<label for="ofAddress"><b>Residential Addresss</b></label>
					<input type="text" placeholder="Enter current address" name="ofaddress" required>

					<label for="ofContactNo"><b>Contact Number</b></label>
					<input type="text" placeholder="Enter Contact Number" name="ofContactNo">

					<label for="ofpsw"><b>Change Password</b></label>
					<input type="password" placeholder="Enter Password" name="ofpassword" required>
					
					<label for="ofrepsw"><b>Re-Enter Password</b></label>
					<input type="password" placeholder="Re-Enter Password" name="ofre-enter password" required>
					
					<hr>
				
					<button type="submit" class="registerbtn">Save</button>

            	</form>

        	</div>

    	</div>

		
	</body>
</html>
