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
    <h1>Out Stock Blood List</h1>
    
       <h3><a href="admin-home.php">Home</a></h3>
       <h4><a href="logout.php" >Logout</a></h4>
   
   <center><div id="newform">
       <table>
         <tr>
           <td><center><b>Blood Name</b></center></td>
           <td><center><b>Name</b></center></td>
           <td><center><b>Mobile No</b></center></td>
         </tr>
         <?php
          $q="SELECT * FROM out_sock_b";
          $result =$db->query($q);
          while ($r1=$result->fetch(PDO::FETCH_OBJ)) {
          ?>
          <tr>
           <td><center><?=$r1->bname; ?></center></td>
           <td><center><?=$r1->name; ?></center></td>
           <td><center><?=$r1->mno; ?></center></td>
          </tr>
             <?php
          }
         ?>
      
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