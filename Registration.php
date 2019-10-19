<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blood Bank Doner Registration</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">BLOOD BANK</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a id="active" href="Registration.php">Doner Registration</a>
                    </li>
                    <li>
                        <a href="admin/index.php">Admin Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <div class="container">
            <form class="form-horizontal" role="form" action="#" method="post">
                <h2>Doner Registration</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label" ><a style="color:black">Name</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="name" placeholder="Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label"><a style="color:black">Father Name</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="lastName" name="fname" placeholder="Father Name" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label"><a style="color:black">Address</a></label>
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="Address" class="form-control" name= "address">
                    </div>
                </div>
              
                <div class="form-group">
                    <label for="phoneNumber" class="col-sm-3 control-label"><a style="color:black">City</a></label>
                    <div class="col-sm-9">
                        <select class="form-control" id="exampleFormControlSelect1" name="city">
                              <option>Dhaka</option>
                              <option>Chottogram</option>
                              <option>Comilla</option>
                              <option>Bogra</option>
                              <option>Sylet</option>
                        </select>
                       
                    </div>
                </div>
                <div class="form-group">
                        <label for="Height" class="col-sm-3 control-label"><a style="color:black">Age</a></label>
                    <div class="col-sm-9">
                        <input type="text" name="age" id="height" placeholder="Age" class="form-control">
                    </div>
                </div>
                 <div class="form-group">
                     <label for="weight" class="col-sm-3 control-label"><a style="color:black">Blood Group</a> </label>
                    <div class="col-sm-9">
                         <select class="form-control" id="exampleFormControlSelect1" name="bgroup">
                              <option>A+</option>
                              <option>A-</option>
                              <option>B+</option>
                              <option>B-</option>
                              <option>O+</option>
                              <option>O-</option>
                              <option>AB+</option>
                              <option>AB-</option>
                        </select>
                    </div>
                </div>
       
                <div class="form-group">
                    <label for="Height" class="col-sm-3 control-label"><a style="color:black">Email</a></label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="height" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Height" class="col-sm-3 control-label"><a style="color:black">Mobile No</a></label>
                    <div class="col-sm-9">
                        <input type="text" name="mno" id="height" placeholder="Mobile No" class="form-control">
                    </div>
                </div><!-- /.form-group -->
  
                <button type="submit" name="sub"class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->


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


        </div> <!-- ./container -->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	
    
   

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; Your Company 2014. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
