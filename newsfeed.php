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

      if (!in_array("d5", $dutyID)) {
         header('Location: o_dashboard.php');
        }
	?>

<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News Feed</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/newsfeed.css">
</head>
<?php
require_once '../../config/conn.php';


    $sql = "SELECT * FROM newsfeed ORDER BY newsID DESC";

	$res= mysqli_query($conn,$sql);
	$res1= mysqli_query($conn,$sql);

    if($res){
    //echo "Sucessfull";
    }
    else{
    echo"failed";	
    }
?>

<div id="officeNav"></div>
<div class="content">
    <div class="feed">
        <div class="banner">
        </div>

        <?php
		while($row=mysqli_fetch_assoc($res)){
			?>
        <div class="container">
            <table>
                <tr>
                    <th width="60%">
                        <h2><b><?php echo  $row['title'] ?></b></h2>
                        <hr>
                    </th>
                </tr>
                <tr>
                    <td width="60%">
                        <p> <?php echo $row['news'] ?></p>
                    </td>
                    <?php if($row['image']==TRUE){ ?>
                    <td width="30%">
                        <div class="image">
                            <?php echo "<img src='../../images/".$row['image']."'>"; ?>

                        </div>
                    </td>
                    <?php } ?>
                </tr>
            </table>
        </div>
        <?php
		}
		?>
    </div>
</div>
</body>
</html>

<?php } ?>