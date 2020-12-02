<?php
    include_once '../config/conn.php';

    if ($conn->connect_error){
        die("Connection failed : " . $conn->connect_error);
    }
    echo "Connected Successfully";

    if(isset($_POST['savebtn'])){

        $examID = $_POST['examID'];
        $examYear = $_POST['olExamYear'];
        $examName = $_POST['examName'];

        $sql = "INSERT INTO addolexam (examID, examYear, examName) VALUES ('$examID','$examYear','$examName');";

        if($conn->query($sql)===TRUE){
            echo '<script language = "javascript">';
            echo 'alert("Details Added");';
            echo '</script>';
            echo "dd";
        }else{
            echo "Error : " . $sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
?>
