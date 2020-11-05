
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>
<body>

<div id="nav"></div>

    <div class="content">
        <div class="container">
            <form action="../../src/o_addAl.php" method="POST">
                <h1>Add G.C.E. A/L Examination  Results</h1>
                <hr>

				<label for="alExamID"><b>Exam ID</b></label>
				<input type="text" placeholder="Enter Exam ID" name="alExamID" required>
                
				<label for="alExamYear"><b>Enter Exam Year</b></label>
				<input type="text" placeholder="Enter Exam Year" name="alExamYear" required>

				<label for="alExamName"><b>Exam Name</b></label>
				<input type="text" placeholder="Enter Exam Name" name="alExamName" required>


				<br>
				
                <hr>
			   
				<button type="submit" class="registerbtn" name="savebtn">Save</button>

            </form>

        </div>

    </div>

		
</body>
</html>
