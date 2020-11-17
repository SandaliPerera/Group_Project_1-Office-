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

    <?php
include_once '../../config/conn.php';
?>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A/L Results</title>
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

        <h1>G.C.E A/L Examination Results</h1>
        <form class="search" >
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
        </form>

        <br>
        <br>
        <br>

        <div class="card">
            <form>
                <button type="submit" formaction="o_addAl.php">Add Year</button>
            </form>
            <br>
            <br>
            <?php
                    $sql = "SELECT * FROM addAlExam" ;
                    $result = mysqli_query($conn,$sql);
                    ?>
            <hr>
            <table>
                <tr>
                    <th>Exam ID</th>
                    <th>Year</th>
                    <th>Name of the Examination</th>
                    <th>Edit Details</th>
                    <th>View Details</th>


                </tr>
                <?php
                    
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                <tr>
                    <td><?php echo $row['examID']?></td>
                    <td><?php echo $row['examYear']?></td>
                    <td><?php echo $row['examName']?></td>
                    <td>
                        <form><button class="btn editbtn" type="submit" formaction="o_alCsv.php">Add Results</button>
                        </form>
                    </td>
                    <td>
                        <form><button class="btn viewbtn" type="submit" formaction="o_al.php">View Results</button>
                        </form>
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