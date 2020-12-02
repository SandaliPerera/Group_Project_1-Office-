<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d6", $dutyID)) {
	?>

<!DOCTYPE html>
<html>

<head>

    <?php
include_once '../../config/conn.php';
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assign Classes</title>
    <link rel="stylesheet" href="../css/view.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/users.css">
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/pop.js"></script>
    <script src="../js/nav.js"></script>
</head>

<body>
    <div id="officeNav"></div>

    <div class="content">
        <br>
        <h1 style="color:#6a7480;">Classes</h1>
        <form class="search" action="register_stu.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>

        <br>
        <br>
        <br>

        <div class="card">


            <hr>
            <table>
                <tr>
                    <th>Grade ID </th>
                    <th>Grade</th>
                    <th>Add classes</th>
                    <th>View classes</th>

                </tr>

                <tr>
                    <td>20G1</td>
                    <td>Grade 1</td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="o_addClasses.php">Add
                                Classes</button></form>
                    </td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="o_classes.php">View Classes</button>
                        </form>
                    </td>

                </tr>

            </table>
        </div>

    </div>

</body>

</html>

<?php }} ?>