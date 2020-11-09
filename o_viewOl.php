<!DOCTYPE html>
<head>
    <head>

        <?php
        include_once '../../config/conn.php';
        ?>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>O/L Results</title>
        <link rel="stylesheet" href="../css/view.css " type="text/css">
        <link type="text/css" rel="stylesheet" href="../css/main.css">
        <link type="text/css" rel="stylesheet" href="../css/users.css">
        <script src="../js/jquery-1.9.1.min.js"></script>
        <script src="../js/pop.js"></script>
        <script src="../js/nav.js"></script>
    </head>
    <body>
        <div id="nav"></div>	
            <div class="content">
            
            <h1>O/L Examination Results</h1>
            <form class="search" action="register_stu.html">
            <input type="text" placeholder="Search.." name="search">
            <button type="submit">Search</button>
            </form>
            
            
            <br>
            <br>
            <br>
            

			
			  <div class="card">
                <form>
					<button type="submit" formaction="o_addOl.php">Add Year</button>
				</form>
				<br>
				<br>
				
				<hr>
				<table>
					<tr>
                        <th>Exam ID</th>
						<th>Year</th>
                        <th>Name of the Examination</th>
                        <th>Edit Details</th>
                        <th>View Details</th>
						
						
					</tr>
					<tr>
                        <td>OL2018</td>
						<td>2018</td>
                        <td>G.C.E O/L Examination - 2018</td>
                        <td><form><button class="btn editbtn" type="submit" formaction="o_olCsv.php">Add Results</button></form></td>
                        <td><form><button class="btn viewbtn" type="submit" formaction="o_ol.php">View Results</button></form></td>
						
					</tr>
                </table>
				</div>
				
		</div>
		
    </body>
</html>
