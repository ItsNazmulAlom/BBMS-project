<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank NGO Regiistration</title>
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
    <h1>Ngo Registration</h1>
    
       <h3><a href="admin-home.php">Home</a></h3>
       <h4><a href="logout.php" >Logout</a></h4>
       
   <center><div id="ngo-form" >
    <form action="" method="post">
      <table>
        <tr>
          <td width="200px" height="50px">Enter Name :</td>
          <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
          <td width="200px" height="50px">Address :</td>
          <td width="200px" height="50px"><textarea name="address"></textarea></td>
        </tr>
        <tr>
          <td width="200px" height="50px">Address E-Mail:</td>
          <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
          <td width="200px" height="50px">Enter City :</td>
          <td width="200px" height="50px">
            <select name="city">

               <option>Chittagram</option>
               <option>Dhaka</option>
               <option>Bogura</option>
               <option>Comilla</option>
               
            </select>
          </td>
        </tr>
       
        <tr>

          <td width="200px" height="50px">Enter Mobile :</td>
          <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile no"></td>
        </tr>
        <tr>
          <td><input type="submit" name="sub" value="Add New" style="width: 80px;height: 25px;border-radius: 5px;"></td>
        </tr>
      </table>
      </form>
    </div></center> 
  <?php
  if (isset($_POST['sub'])) {
        $name=$_POST['name'];
     $address=$_POST['address'];
        $city=$_POST['city'];
       $email=$_POST['email'];
         $mno=$_POST['mno'];
     $q=$db->prepare("INSERT INTO ngo(name,address,city,email,mno) VALUES(:name,:address,:city,:email,:mno)");
     $q->bindValue('name',$name);
     $q->bindValue('address',$address);
     $q->bindValue('city',$city);
     $q->bindValue('email',$email);
     $q->bindValue('mno',$mno);
     if ($q->execute()) {
       echo "<script>alert('NGO Registration Success')</script>";
     }
     else{
      echo "<script>alert('NGO Registration not Success')</script>";
     }
     }
  

  ?>
    </div>
	</div>
  <div class="clear"></div>
	<div id="footer"><h4 align="center">&copy;Copyright <a href="http://alomdwip.atwebpages.com/">Nazmul.com</a> 2018 || </h4>

  </div>

	


</div>
</body>
</html>