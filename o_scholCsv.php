<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Scholarship Results</title>
<link rel="stylesheet" href="../css/register.css " type="text/css">
<link type="text/css" rel="stylesheet" href="../css/main.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
</head>
<body>
    <div id="nav"></div>

    <div class="content">
        <div class="container">
            <form action="../php/register.php" method="POST">
                <h1>Add Grade 5 Scholarship Exam Results</h1>
                <hr>

				<label for="examID"><b>Exam ID</b></label>
				<input type="text" value="G5S123" name="examID" readonly>
                
				<label for="scholExamYear"><b>Enter Exam Year</b></label>
				<input type="text" value="2016" name="scholExamYear" readonly>

				<label for="examName"><b>Exam Name</b></label>
				<input type="text" value="Grade 5 Scholarship Exam - 2016" name="examName" readonly>


				<br>
                
                <p>Click on the "Choose File" button to upload a  CSV file :</p>
			
                <form>
                    
                    <input type="file" id="myFile" name="filename" class="nextpgbtn" required ></br>
                
                <hr>
			   
				<button type="submit" class="registerbtn">Save</button>

            </form>

        </div>

    </div>

		
</body>
</html>
