<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body>
<div id="full" >
	<div id="inner_full">
		
    <div id="header">
    	<div id="welcomeDiv">
    		<h2>Blood Bank Management System</h2>
    	</div>
     
    </div>
	<div id="body">
      
      <?php
      $un = $_SESSION['un'];
      if (!$un) {
        header("location:index.php");
      }
      ?>
    <h1>welcome to admin</h1>
      <h4><a href="logout.php" >Logout</a></h4>
    <ul><br><br><br>
        <li><h2><a href="doner-reg.php">Doner Registration</a></h2></li>
        <li><h2><a href="doner-list.php">Doner List</a></h2></li>
        <li><h2><a href="stoke-blood-list.php">Stock Blood List</a></h2></li>
      </ul>
       <ul>
        <br><br><br><br><br><br>
        <li><h2><a href="out-stoke-blood-list.php">Out Stock Blood List</a></h2></li>
        <li><h2><a href="exchange-blood-Registration.php">Exchange Blood Registration</a></h2></li>
        <li><h2><a href="exchange-blood-list.php">Exchange Blood List</a></h2></li>
      </ul>
      <ul>
        <br><br><br><br><br><br>
        <li><h2><a href="ngo-Registration.php">Ngo Registration</a></h2></li>
        <li><h2><a href="ngo-list.php">Ngo List</a></h2></li>
      </ul>
    
  
    </div>
	</div>
  <div class="clear"></div>
	<div id="footer"><h4 align="center">&copy;Copyright <a href="http://alomdwip.atwebpages.com/">Nazmul.com</a> 2018 ||</h4>

  </div>

	


</div>
</body>
</html>