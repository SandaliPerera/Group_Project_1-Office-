
<?php
//require_once('cl_gen.php');
require_once '../config/conn.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if (isset($_POST['regbtn2'])) {

    $read= "SELECT * FROM parent where userID='".$_POST['pID']."'";
    $res= mysqli_query($conn,$sql);
    if($res != 0){
        $error = "Duplicate records";
                    header('Location: ../public/office/o_studentsList.php?error='.$error);
    }else{
        
        $admissionNo = $_POST['userID'];
    
        $pID = $_POST['pID'];
        $pName = $_POST['parentName'];
        $pNIC = $_POST['pNIC'];
        $pOcc = $_POST['occ'];
        $pContact = $_POST['Pcontact'];
        $pEmail = $_POST['pEmail'];
    
     $sql1 = "INSERT INTO parent (parentID, name,  nic, occupation, contactNo, admissionNo, email) VALUES
     ('$pID', '$pName', '$pNIC', '$pOcc', '$pContact', '$admissionNo', '$pEmail')";
    
     $update_query2 = "UPDATE user SET isActivated = '1' WHERE userID = '$pID'";
     
    
    if ( $conn->query($sql1) === TRUE && $conn->query($update_query2) ) {
        echo '<script language="javascript">';
        echo 'alert("Details Added");';
        echo '</script>';
        header('Location: ../public/office/o_studentsList.php');
    
    
        }else{
             $error = "Duplicate Record";
                    header('Location: ../public/office/o_studentsList.php?error='.$error);
        }
    }
       /* else{
            $error="Invalid Email or NIC";
            header('Location: ../public/common/loginFile.php?error='.$error);
        }*/
    
    }else{
        $error = "Cannot add record";
               header('Location: ../public/office/o_studentsList.php?error='.$error);
    }

    $conn->close();

?>
