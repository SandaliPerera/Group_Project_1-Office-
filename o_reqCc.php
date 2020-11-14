<?php
    session_start();

    if(!isset($_SESSION['userType']) && !isset($_SESSION['userID'])){
        $error = "Please Login!";
        header('Location: ../common/loginFile.php?error='.$error);
    }elseif($_SESSION['userType'] == 'officer'){
      
      $dutyID = array();
      $dutyID = $_SESSION['dutyID'];

      if (in_array("d3", $dutyID)) {
	?>

<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Character Certificates</title>
    <script src="../js/jquery-1.9.1.min.js"></script>
    <script src="../js/nav.js"></script>
    <link rel="stylesheet" href="../css/register.css " type="text/css">
    <link type="text/css" rel="stylesheet" href="../css/main.css">
    <link type="text/css" rel="stylesheet" href="../css/tabs.css">
    <link type="text/css" rel="stylesheet" href="../css/profile.css">
    <link type="text/css" rel="stylesheet" href="../css/view.css">
    <link type="text/css" rel="stylesheet" href="../css/pop.css">

</head>

<body>
    <div id="officeNav"></div>
    <div class="content">
        <h2>Character Certificates</h2>

        <div class="btn-box">
            <button id="button1" onclick="requests()">Requests</button>
            <button id="button2" onclick="issues()">Issues</button>
            <button id="button3" onclick="accepted()">Accepted</button>
        </div>

        <div id="page1" class="page">
            <div class="container">
                <h2>Requests</h2>
                <br>
                <div class="card">
                    <hr>
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>View Request</th>
                            <th>Generate Character Certificate</th>
                            <th>Reject Request</th>
                            <th>Send to Student</th>
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td>
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td>
                                <button id="character-btn" class="btn editbtn">Open Form</button>
                                <div id="character-form" class="model">
                                    <div class="modal-content">
                                        <span class="close1">&times;</span>
                                        <h2>Character Certificate Request Form</h2>
                                        <form>
                                            <hr>
                                            <label for="userID"><b>Student Admission Number</b></label>
                                            <input type="text" value="ST2000001" name="id">

                                            <label for="reason"><b>Reason for Requesting Character
                                                    Certificate</b></label>
                                            <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                            <br>
                                            <label for="TID"><b>Danna namak?</b></label>
                                            <input type="text" name="TID" required>

                                            <button type="submit" class="registerbtn">Request</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form><button class="btn editbtn" type="submit">Generate Character Certificate</button>
                                </form>
                            </td>
                            <td><button class="btn dltbtn" type="button">Reject</button></td>
                            <td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--Page1 end-->
        <!--Page 2-->
        <div id="page2" class="page">
            <div class="container">
                <h2>Issues</h2>
                <br>
                <div class="card">
                    <hr>
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>View Request</th>
                            <th>Generate Character Certificate</th>
                            <th>Reject Request</th>
                            <th>Send to Student</th>


                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td>
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td>
                                <button id="character-btn" class="btn editbtn">View Issue</button>
                                <div id="character-form" class="model">
                                    <div class="modal-content">
                                        <span class="close1">&times;</span>
                                        <h2>Issues of the Character Certificate</h2>
                                        <form>
                                            <hr>
                                            <label for="userID"><b>Student Admission Number</b></label>
                                            <input type="text" value="ST2000001" name="id">

                                            <label for="reason"><b>Issues</b></label>
                                            <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
                                            <br>
                                            <label for="TID"><b>Name?</b></label>
                                            <input type="text" name="TID" required>

                                            <button type="submit" class="registerbtn">Request</button>
                                            <hr>
                                        </form>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form><button class="btn editbtn" type="submit">Generate New Character
                                        Certificate</button></form>
                            </td>
                            <td><button class="btn dltbtn" type="button">Reject</button></td>
                            <td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--Page2 End-->
        <!--Page3-->
        <div id="page3" class="page">
            <div class="container">
                <h2>Accepted</h2>
                <br>
                <div class="card">
                    <hr>
                    <table>
                        <tr>
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Student NIC</th>
                            <th>Student email</th>
                            <th>Download</th>
                        </tr>
                        <tr>
                            <td>S1234</td>
                            <td>A.B.C. Student</td>
                            <td>123456789V</td>
                            <td>Student@gmail.com</td>
                            <td><button class="btn dltbtn" type="button">Download</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--Page 3 end-->
    </div>

    <script>
    var page1 = document.getElementById("page1");
    var page2 = document.getElementById("page2");
    var page3 = document.getElementById("page3");
    var button1 = document.getElementById("button1");
    var button2 = document.getElementById("button2");
    var button3 = document.getElementById("button3");

    let url = window.location.href;
    if (url == "http://localhost/CL-GEN/public/office/o_reqCc.php") {
        page1.style.display = "block";
        page2.style.display = "none";
        page3.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";
        button3.style.color = "#000";
    }

    function request() {
        page1.style.display = "block";
        page2.style.display = "none";
        page3.style.display = "none";
        button1.style.color = "#008080";
        button2.style.color = "#000";
        button3.style.color = "#000";

    }

    function issues() {
        page1.style.display = "none";
        page2.style.display = "block";
        page3.style.display = "none";
        button1.style.color = "#000";
        button2.style.color = "#008080";
        button3.style.color = "#000";
    }

    function accepted() {
        page1.style.display = "none";
        page2.style.display = "none";
        page3.style.display = "block";
        button1.style.color = "#000";
        button2.style.color = "#000";
        button3.style.color = "#008080";
    }
    </script>

    <script>
    var form1 = document.getElementById("character-form");

    var characterbtn = document.getElementById("character-btn");

    var close1 = document.getElementsByClassName("close1")[0];
    var close2 = document.getElementsByClassName("close2")[0];

    characterbtn.onclick = function() {
        form1.style.display = "block";
    }

    close1.onclick = function() {
        form1.style.display = "none";
    }
    close2.onclick = function() {
        form2.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>
</body>

</html>