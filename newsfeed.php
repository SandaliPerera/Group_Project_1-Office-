<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>News Feed</title>
<script src="../js/jquery-1.9.1.min.js"></script>
<script src="../js/nav.js"></script>
<link type="text/css" rel="stylesheet" href="../css/main.css">
<link type="text/css" rel="stylesheet" href="../css/tabs.css">
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

<div id="nav"></div>


		<div class="content">
		
		<!-- <div class="front">
		<h1>WELCOME!</h1>
	
		</div> -->
		

	<div class="feed">
		
		<div class="btn-box">

		<button id="button2" onclick="NEWS()">News feed</button>
		<button id="button1" onclick="ABOUT()">About School</button>
		</div>
		<div id="page2" class="page">

		<div class="card">

		<?php
		while($row=mysqli_fetch_assoc($res)){
			?>
			<div class="container">
			<h2><b><?php echo $row['title'] ?></b></h2>
			<hr>
			<p> <?php echo $row['news'] ?></p>
			</div>	
		<?php
		}
		?>

		
		 </div>
		</div>
		<div id="page1" class="page">
		<div class="card">
		 <div class="container">
			<h1>ABC School</h1>
				<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
				<img src = "../../images/school.jpg" width="50%" height="100%">
		</div>	
		</div>
	</div>
</div>
		 
	
	</div>	
	<script>
		var page1 = document.getElementById("page1");
		var page2 = document.getElementById("page2");
		var button1 = document.getElementById("button1");
		var button2 = document.getElementById("button2");
		
		let url = window.location.href;
		if(url == "http://localhost/CL-GEN/public/office/newsfeed.php"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
			
		}else if(url == "http://localhost/CL-GEN/public/admin/newsfeed.php?loggedin"){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
		}

		function ABOUT(){
			page1.style.display = "block";
			page2.style.display = "none";
			button1.style.color= "#008080";
			button2.style.color= "#000";
			
		}

		function NEWS(){
			page1.style.display = "none";
			page2.style.display = "block";
			button1.style.color= "#000";
			button2.style.color= "#008080";
		}
	</script>	
			

			

		
</body>
</html>
