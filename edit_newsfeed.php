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
    <link type="text/css" rel="stylesheet" href="../css/pop.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/register.css">
    <link type="text/css" rel="stylesheet" href="../css/messages.css">
</head>

<body>
    <div id="officeNav"></div>

    <div class="content">
        <?php if (isset($_GET['message'])){?>
        <div id="message"><?php echo $_GET['message']; ?></div>
        <?php } ?>

        <?php if (isset($_GET['error'])){?>
        <div id="error"><?php echo $_GET['error']; ?></div>
        <?php } ?>
        <h1>Add News</h1>


        <div class="container">



            <form action="../../src/newsfeed_edit.php" method="POST" enctype="multipart/form-data">
                <hr>

                <label for="title"><b>Title</b></label>
                <input type="text" name="title" placeholder="Title" required>

                <label for="news"><b>News</b></label>
                <textarea id="news" name="news" rows="4" placeholder="News" cols="50"></textarea>

                <label for="image"><b>Upload Images</b></label>
                <input type="hidden" name="size" value="1000000" required>

                <div>
                    <input type="file" name="image" id="image" />
                </div>
                <br>

                <button type="submit" class="registerbtn" id="add_news" name="add_news">Submit</button>
                <hr>
            </form>


        </div>
        <div class="cancel">
            <h2><a href="users.php">Cancel</a></h2>
        </div>

    </div>


</body>

</html>

<?php } ?>