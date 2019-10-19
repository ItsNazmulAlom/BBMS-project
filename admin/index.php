<?php
include('connection.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank</title>
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
      <br><br><br><br><br>
      <form action="" method="post">
      <table align="center">
      	<tr>
      		<td width="200px;" height="50px;"><b>Enter Username</b></td>
      		<td width="200px;" height="50px;"><input type="text" name="un" placeholder="Enter Username" style="width:170px; height:25px;  border-radius:10px;"></td>
      	</tr>
      		<tr>
      		<td width="200px;" height="50px;"><b>Enter Password</b></td>
      		<td width="200px;" height="50px;"><input type="text" name="ps" placeholder="Enter Password" style="width:170px; height:25px;  border-radius:10px;"></td>
      	</tr>
      	<tr>
      		<td><input type="submit" name="sub" value="Login" style="width: 70px; height: 30px; border-radius: 5px;"></td>
      	</tr>
      </table>
      </form>
      <?php
      	if (isset($_POST['sub'])) {
      		$un = $_POST['un'];
      		$ps = $_POST['ps'];

        $query =$db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps'");
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_OBJ);
        print_r($result);
        if ($result) {
          $_SESSION['un']= $un;
          header("location:admin-home.php");
        }
        else{
          echo "<script>alert('Wrong User')</script>";
        }
      	}
        
       ?>
	</div>
	<div id="footer"><h4 align="center">&copy;Copyright <a href="http://alomdwip.atwebpages.com/">Nazmul.com</a> 2018</h4></div>

	</div>
	


</div>
</body>
</html>