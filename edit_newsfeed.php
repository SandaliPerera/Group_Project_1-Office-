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
</head>
<body>
  <div id="nav"></div>
		
  <div class="content">
    <div class="card">
      <h1>Add News</h1>


      <div class="container">
    <br>


    <form action= "../../src/newsfeed_edit.php" method="POST">
          <hr>
                        
                        <label for="title"><b>Title</b></label>
                        <input type="text"  name="title" placeholder="Title" required>
			
						<label for="news"><b>News</b></label>
						<textarea id="news" name="news" rows="4" placeholder="News" cols="50"></textarea>
                        <br>
						
            
            <button type="submit" class="registerbtn" id="add_news" name="add_news">Request</button>
						<hr>
        </form>
      </div>
    
    </div>
    
     
</div>


</body>
</html>
