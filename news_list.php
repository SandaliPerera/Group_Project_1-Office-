<?php
session_start();

if (!isset($_SESSION['userType']) && !isset($_SESSION['userID'])) {
  $error = "Please Login!";
  header('Location: ../common/loginFile.php?error=' . $error);
}else if ($_SESSION['userType'] != 'officer') {
  header('Location: ../common/error.html');
}
else{
  $userID = $_SESSION['userID'];
  
?>


<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News list</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">
    <link type="text/css" rel="stylesheet" href="../css/button.css">
</head>

<body>

    <?php

				require_once '../../config/conn.php';

				$sql = "SELECT * FROM newsfeed ORDER BY newsID DESC";

				$res= mysqli_query($conn,$sql);

				if($res){
				//echo "Sucessfull";
				}
				else{
				echo"failed";	
				}

?>
    <div id="officeNav"></div>

    <div class="content">
        <br>
        <?php if (isset($_GET['message'])){?>
        <div id="message"><?php echo $_GET['message']; ?></div>
        <?php } ?>

        <?php if (isset($_GET['error'])){?>
        <div id="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>

        <h1> News List</h1>
        <br>
        <form class="search">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>


        <br>


        <br>
        <br>


        <div class="card">
            <form>
                <button type="submit" formaction="edit_newsfeed.php">Add News</button>
            </form>
            <br>
            <br>


            <hr>

            <table>
                <tr>
                    <th>News ID</th>
                    <th>News Title</th>
                    <th>News</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Image</th>

                </tr>
                <?php
		while($row=mysqli_fetch_assoc($res)){
			?>
                <tr>
                    <td><?php echo $row['newsID'] ?></td>
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['news'] ?></td>
                    <td><?php echo $row['newsDate'] ?></td>
                    <td><?php echo $row['newsTime'] ?></td>
                    <td>
                        <?php 
						if($row['image']==TRUE){ ?>
                        <div class="news-image"><?php echo "<img src='../../images/".$row['image']."' >"; ?></div>
                        <?php }else{
							echo "No Image..";
						} ?>
                    </td>
                    <td><button
                            class="viewbtn"><?php echo "<a href = update_newsfeed.php?newsID='".$row['newsID']."' > Update </a> "?></button>
                    </td>
                    <td><button
                            class="dltbtn"><?php echo "<a href = ../../src/delete_news.php?newsID='".$row['newsID']."' > Delete </a> "?></button>
                    </td>

                </tr>
                <?php
			}
		?>
            </table>
        </div>



    </div>


</body>

</html>

<?php } ?>