<?php require_once("api/db.php"); ?>
<html>
    
    <head>
        <title>Sign Up</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
       
    </style>
    </head>
<body>
    <div class = "container">
        <form class="form-inline form" method="post" action="" enctype="multipart/form-data">
 <div class="form-group">
      <label >Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
    </div><br><br>
    <div class="form-group">
      <label >Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="email" class="form-control" name = "email" placeholder="Enter email" required>
    </div><br><br>
    <div class="form-group">
      <label >Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
    </div><br><br>
	<div class="form-group">
      <label>Confirm Password:</label>
      <input type="password" class="form-control" name="cpass" placeholder="Confirm password" required>
    </div><br><br>
	<div class="form-group">
      <label for="pwd">Profile Photo:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="file" class="form-control" name="profilePhoto" >
    </div><br><br>
    <button type="submit" class="btn btn-success" name="sub" value="Submit">Submit</button>
	<div class = "col-sm-12 sign" >
                        <p id = "msg">Not Registered?</p>
                        <a href = "signup.php" id = "create">Create an account</a>
                    </div>
                    <div class = "col-sm-12 sign">
                        <p id = "msg">Forget Password?</p>
                        <a href = "Dashboard/Functions/forgetpass.php" id = "create">Click here</a>
                    </div>
  </form>
    </div><hr>
    <?php
        if (isset($_POST['sub']))
        {
            $name = mysqli_real_escape_string($conn,$_POST['name']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $Photo=$_FILES['profilePhoto']['name'];
            $target = "userPhoto/";
            $target1 = $target.$name.basename($_FILES['profilePhoto']['name']);
			$userPhoto = $name.$_FILES['profilePhoto']['name'];
            $status = move_uploaded_file($_FILES['profilePhoto']['tmp_name'], $target1);
            $pass = mysqli_real_escape_string($conn,$_POST['pass']);
            $cpass = mysqli_real_escape_string($conn,$_POST['cpass']);
            $key = md5($pass);
            if(strlen($pass)<6)
            {
                echo "<script>alert ('Password must be greater then 6 latters')</script>";
           exit();
            }
            if ($pass==$cpass)
            {
               $query = "select * from registration where Email = '$email' ";
            $res = mysqli_query($conn, $query);
            $check = mysqli_num_rows($res);
            if ($check==1)
            {
                echo "<script>alert ('Already Registered!!')</script>";
           exit();
            }
			else{
            $query = "insert into registration (`name`, `email`, `password`, `ProfilePic`) values ('$name', '$email', '$key', '$userPhoto')";
			echo $query;
            $result = mysqli_query($conn, $query);
            if ($result)
            {

                echo "<script>window.open('index.php', '_self')</script>";
               /*$from = "tnjshrm1997@gmail.com";
               $subject = "Welcome";
               $message = "Welcome to our portal";
               mail($email, $subject, $message, $from);*/
            }
                
        }
			}
        else {
            echo "<script>alert ('Password does not match!!')</script>";
           exit();
        }
			
		
        mysqli_close();
    }
    ?>
</body>