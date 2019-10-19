<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Exchange Blood Registration</title>
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
       
   <center><div id="exchange-blood-form" >
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
             <td width="200px" height="50px">Address E-Mail:</td>
          <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-Mail"></td>
        </tr>
        <tr>
       
          <td width="200px" height="50px">Enter Mobile :</td>
          <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile no"></td>

        </tr>
         <tr>

          <td width="200px" height="50px">Select Blood :</td>
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
                <td width="200px" height="50px">Exchange Blood :</td>
          <td width="200px" height="50px">
            <select name="exbgroup">

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
         $exbgroup=$_POST['exbgroup'];

         //select and insert 
        $qu="SELECT * FROM doner_registration where bgroup='$bgroup'";
         $st=$db->query($qu);
         $num_row=$st->fetch();
         //out stock insert
       $id=$num_row['id'];
       $name=$num_row['name'];
       $b1=$num_row['bgroup'];
       $mno=$num_row['mno'];
       $q1="INSERT INTO out_sock_b(bname,name,mno)value(?,?,?)";
        $st1=$db->prepare($q1);
        $st1->execute([$b1,$name,$mno]);


        //delete code
        $delete_q="DELETE FROM doner_registration where id='$id'";
        $st1=$db->prepare($delete_q);
        $st1->execute();

   $q3=$db->prepare("INSERT INTO doner_registration(name,fname,address,city,age,bgroup,email,mno) VALUES(:name,:fname,:address,:city,:age,:exbgroup,:email,:mno)");
     $q3->bindValue('name',$name);
     $q3->bindValue('fname',$fname);
     $q3->bindValue('address',$address);
     $q3->bindValue('city',$city);
     $q3->bindValue('age',$age);
     $q3->bindValue('bgroup',$exbgroup);
     $q3->bindValue('email',$email);
     $q3->bindValue('mno',$mno);
//q->bindValue('exbgroup',$exbgroup);
     
       //echo "<script>alert('Doner Registration Success')</script>";
     
     
    


   $q=$db->prepare("INSERT INTO exchange_b(name,fname,address,city,age,bgroup,email,mno,exbgroup) VALUES(:name,:fname,:address,:city,:age,:bgroup,:email,:mno,:exbgroup)");
     $q->bindValue('name',$name);
     $q->bindValue('fname',$fname);
     $q->bindValue('address',$address);
     $q->bindValue('city',$city);
     $q->bindValue('age',$age);
     $q->bindValue('bgroup',$bgroup);
     $q->bindValue('email',$email);
     $q->bindValue('mno',$mno);
     $q->bindValue('exbgroup',$exbgroup);
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