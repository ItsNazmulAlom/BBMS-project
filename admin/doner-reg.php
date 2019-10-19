<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Blood Bank Doner Registration</title>
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
    <h1>Doner Registration</h1>
    
       <h3><a href="admin-home.php">Home</a></h3>
       <h4><a href="logout.php" >Logout</a></h4>
       
   <center><div id="form" >
    <form action="" method="post">
      <table>
        <tr>
          <td width="200px" height="50px">Enter Name :</td>
          <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
          <td width="200px" height="50px">Enter Father's Name :</td>
          <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father Name"></td>
        </tr>
        <tr>
          <td width="200px" height="50px">Address :</td>
          <td width="200px" height="50px"><textarea name="address"></textarea></td>
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
          <td width="200px" height="50px">Age:</td>
          <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter age"></td>
          <td width="200px" height="50px">Select Blood Group:</td>
          <td width="200px" height="50px">
            <select name="bgroup">

               <option>A+</option>
               <option>B+</option>
               <option>O+</option>
               <option>AB+</option>
               <option>AB-</option>
               <option>O-</option>
               <option>AB-</option>
               <option>B-</option>
            </select>
          </td>
        </tr>
        <tr>
          <td width="200px" height="50px">Address E-Mail:</td>
          <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
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
       $fname=$_POST['fname'];
     $address=$_POST['address'];
        $city=$_POST['city'];
         $age=$_POST['age'];
      $bgroup=$_POST['bgroup'];
       $email=$_POST['email'];
         $mno=$_POST['mno'];
     $q=$db->prepare("INSERT INTO doner_registration(name,fname,address,city,age,bgroup,email,mno) VALUES(:name,:fname,:address,:city,:age,:bgroup,:email,:mno)");
     $q->bindValue('name',$name);
     $q->bindValue('fname',$fname);
     $q->bindValue('address',$address);
     $q->bindValue('city',$city);
     $q->bindValue('age',$age);
     $q->bindValue('bgroup',$bgroup);
     $q->bindValue('email',$email);
     $q->bindValue('mno',$mno);
     if ($q->execute()) {
       echo "<script>alert('Doner Registration Success')</script>";
     }
     else{
      echo "<script>alert('Doner Registration not Success')</script>";
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