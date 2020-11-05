
<!DOCTYPE html>
<html>
<head><title>Add O/L Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="../css/pop.css">
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/pop.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/register.css">
</head>
<body>

<div id="nav"></div>

    
<div class="content">
        <div class="container">
            <form action="../../src/o_addOl.php" method="POST">
                <h1>Add G.C.E. O/L Examination  Results</h1>
                <hr>

				<label for="examID"><b>Exam ID</b></label>
				<input type="text" placeholder="Enter Exam ID" name="examID" required>
                
				<label for="olExamYear"><b>Enter Exam Year</b></label>
				<input type="text" placeholder="Enter Exam Year" name="olExamYear" required>

				<label for="examName"><b>Exam Name</b></label>
				<input type="text" placeholder="Enter Exam Name" name="examName" required>


				<br>
		
                
                <hr>
			   
				<button type="submit" class="registerbtn" name="savebtn">Save</button>

            </form>

        </div>

    </div>

		
</body>
</html>
