<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
  <style type="text/css">
    td{
      width: 150px;
      height: 20px;
    }
    tr, td {
    border: .5px solid black;
}
  </style>
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
    <h1>Stoke Blood List</h1>
    
       <h3><a href="admin-home.php">Home</a></h3>
       <h4><a href="logout.php" >Logout</a></h4>
   
   <center><div id="stokebloodlistform">
       <table>
         <tr>
           <td><center><b>Name</b></center></td>
           <td><center><b>Qty</b></center></td>
         </tr>

          <tr>
           <td><center>A+</center></td>
           <td><center>
             <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='A+'");
             echo $row=$q->rowcount();
             ?>
           </center></td>
          </tr>
          <tr>
           <td><center>B+</center></td>
           <td><center>
            <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='B+'");
             echo $row=$q->rowcount();
             ?>
               
             </center></td>
          </tr>
          <tr>
           <td><center>O+</center></td>
           <td><center>
              <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='O+'");
             echo $row=$q->rowcount();
             ?>
           </center></td>
          </tr>
          <tr>
           <td><center>AB+</center></td>
           <td><center>
              <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='AB+'");
             echo $row=$q->rowcount();
             ?>
           </center></td>
          </tr>
          <tr>
           <td><center>O-</center></td>
           <td><center>
              <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='O-'");
             echo $row=$q->rowcount();
             ?>
           </center></td>
          </tr>
          <tr>
           <td><center>AB-</center></td>
           <td><center>
            <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='AB-'");
             echo $row=$q->rowcount();
             ?></center></td>
          </tr>
          <tr>
           <td><center>B-</center></td>
           <td><center>
            <?php
              $q=$db->query("SELECT * FROM doner_registration WHERE bgroup='B-'");
             echo $row=$q->rowcount();
             ?></center></td>
          </tr>

      
       </table>
    </div></center> 
  
    </div>
	</div>
  <div class="clear"></div>
	<div id="footer"><h4 align="center">&copy;Copyright <a href="http://alomdwip.atwebpages.com/">Nazmul.com</a> 2018 || </h4>

  </div>

	


</div>
</body>
</html>