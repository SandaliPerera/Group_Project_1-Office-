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

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>

    <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/errors.js"></script>
    <script src="../js/nav.js"></script>
</head>

<body>

    <div id="officeNav"></div>
    <?php

				require_once '../../config/conn.php';

				$sql = "SELECT * FROM user where userID='".$_GET['userID']."'";

                $res= mysqli_query($conn,$sql);
                $row=mysqli_fetch_array($res);
                
                $stuID = $row['userID'];
                $charID = substr($stuID,2);
                $pID = "PR" . $charID;

				if($res){
				//echo "Sucessfull";
				}
				else{
				echo"failed";	
				}
?>
    <div id="msg"></div>
    <div id="pg1">
        <div class="content">
            <div class="regcontainer">
                <form action="../../src/o_addStudentDetails.php" method="POST" enctype="multipart/form-data">
                    <h1>Add Student Details</h1>
                    <hr>

                    <label for="stuID"><b>Admission Number</b></label>
                    <input type="text" placeholder="Enter ID"
                        value="<?php if (isset ($_GET['userID'])){echo $_GET['userID'];}?>" name="stuID" required>

                    <label for="stufName"><b>First Name</b></label>
                    <input type="text" placeholder="Enter First Name" name="stufName" required>

                    <label for="stumName"><b>Middle Name</b></label>
                    <input type="text" placeholder="Enter Middle Name" name="stumName" required>

                    <label for="stulName"><b>Last Name</b></label>
                    <input type="text" placeholder="Enter Last Name" name="stulName" required>

                    <label for="stuDob"><b>Date of Birth</b></label> <br>
                    <input type="date" placeholder="Enter Date of Birth" name="stuDob" required>

                    <br>

                    <label for="stuAdStreet"><b>Residential Addresss - Street</b></label>
                    <input type="text" placeholder="Enter Number and street" name="stuAdStreet"
                        onblur="finish(input.value)" required>

                    <label for="stuAdCity"><b>Residential Addresss - City</b></label>
                    <input type="text" placeholder="Enter City" name="stuAdCity" required>

                    <label for="stuAdDistrict"><b>Residential Addresss - District</b></label>
                    <select name="stuAdDistrict" required>
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Monaragala">Monaragala</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>
                    </select>
                    <br><br>
                    <label for="stuReligion"><b>Religion</b></label>
                    <input type="text" placeholder="Enter Religion" name="stuReligion" required>



                    <label for="stuEnteredGrade"><b>Entered Grade</b></label>
                    <input type="text" placeholder="Enter Grade Entered" name="stuEnteredGrade" required>

                    <label for="email"><b>Email</b></label>
                    <input type="email" placeholder="Enter Email" name="email" id="email"
                        onblur="validateEmail(email.value)" required>

                    <label for="contactNo"><b>Contact Number</b></label>
                    <input type="text" placeholder="Enter Contact Number" name="contactNo" id="contactNo"
                        onblur="contact(contactNo.value)" required>
                    <br>
                    <label><b>Gender:</b></label>
                    <label> <input type="radio" name="stuGender" value="male"> Male</label>
                    <label> <input type="radio" name="stuGender" value="female"> Female</label>
                    <label><input type="radio" name="stuGender" value="other"> Other</label>
                    <br></br>
                    <br>
                    </br>

                    <label for="nic"><b>Add Your NIC Number</b></label>
                    <input type="text" placeholder="Add NIC Number" id="nic" name="nic" onblur="NIC(nic.value)">

                    <label for="stuPhoto"><b>Add Your Photo</b></label>
                    <input type="file" placeholder="Add Your Photo" name="stuPhoto" id="stuPhoto">

                    <?php
                    $target_dir = "Students Photos/";
                    $target_file = $target_dir . basename($_FILES["stuPhoto"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["stuPhoto"]["tmp_name"]);
                    if($check !== false) {
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                    }
                    ?>

                    <br>
                    <hr>
                    <div>
                        <button class="registerbtn" onclick="next()">Next</button>
                        <a href="o_studentsList.php" class="cancel-btn">Cancel</a>
                    </div>
                    <br>
                    <hr>
            </div>
        </div>
    </div>
    <!--page 1 END-->

    <!--Page 2-->

    <div id="pg2">
        <div class="content">
            <div class="regcontainer">
                <form action="../../src/o_addStudentDetails.php" method="POST">
                    <h1>Parent's / Guardian's Details</h1>
                    <hr>
                    <label for="pID"><b>User ID</b></label>
                    <input type="text" placeholder="Enter ID" value="<?php echo $pID; ?>" name="pID" required>

                    <label for="parentName"><b> Name</b></label>
                    <input type="text" placeholder="Enter  Name" name="parentName" required>

                    <label for="pNIC"><b>NIC</b></label>
                    <input type="text" placeholder="Enter NIC" name="pNIC" id="pNIC" onblur="NICp(pNIC.value)" required>

                    <label for="occ"><b>Occupation</b></label>
                    <input type="text" placeholder="Enter Occupation" name="occ" required>

                    <label for="Pcontact"><b>Contact Number</b></label> <br>
                    <input type="text" placeholder="Enter Contact Number" name="Pcontact" id="Pcontact"
                        onblur="contactP(Pcontact.value)" required>

                    <label for="pEmail"><b>Email</b></label> <br>
                    <input type="email" placeholder="Enter Email" name="pEmail" id="pEmail"
                        onblur="validateEmailP(pEmail.value)" required>

                    <hr>

                    <div>
                        <button type="submit" class="registerbtn" name="regbtn">Save</button>
                        <button class="registerback" onclick="back()">Back</button>
                        <a href="o_studentsList.php" class="cancel-btn">Cancel</a>
                    </div>
                    <hr>
                </form>
            </div>
        </div>
    </div>


    <!--Page2 End-->


    <script>
    var page1 = document.getElementById("pg1");
    var page2 = document.getElementById("pg2");
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");



    let url = window.location.href;
    if (url == window.location.href) {
        page1.style.display = "block";
        page2.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";

    }


    function back() {
        page1.style.display = "block";
        page2.style.display = "none";

        button1.style.color = "#008080";
        button2.style.color = "#000";


    }

    function next() {
        page1.style.display = "none";
        page2.style.display = "block";

        button1.style.color = "#000";
        button2.style.color = "#008080";

    }
    </script>
</body>

</html>

<?php } ?>