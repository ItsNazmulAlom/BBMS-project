<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank NGO List</title>
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
    <h1>Ngo List</h1>
    
       <h3><a href="admin-home.php">Home</a></h3>
       <h4><a href="logout.php" >Logout</a></h4>
   
   <center><div id="newform">
       <table>
         <tr>
           <td><center><b>Ngo Name</b></center></td>
           <td><center><b>Address</b></center></td>
           <td><center><b>City</b></center></td> 
           <td><center><b>Email</b></center></td>
           <td><center><b>Mobile No</b></center></td>
           <td><center><b>Action</b></center></td>
         </tr>
         <?php
          $q="SELECT * FROM ngo";
          $result =$db->query($q);
          while ($r1=$result->fetch(PDO::FETCH_OBJ)) {
          ?>
          <tr>
           <td><center><?=$r1->name; ?></center></td>
           <td><center><?=$r1->address; ?></center></td>
           <td><center><?=$r1->city; ?></center></td>
           <td><center><?=$r1->email; ?></center></td>
           <td><center><?=$r1->mno; ?></center></td>
            <td><center>Edit</center></td>
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