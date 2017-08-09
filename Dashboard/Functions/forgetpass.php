<?php include("db.php") ?>
<?php
    session_start();
?>
<html>
    <title>Forget Password</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            background: #76b852;
        }
        @media screen and (max-width: 520px) {
  
          .form
        {  
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 480px;
           
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            margin-top: 50px;

   }
                .btn.btn-success {
            width:200px;
            border-radius: 0px;
        }
}
      
        @media screen and (min-width: 941px)
       {        .form
        {  
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 480px;
             height: 400px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            margin-top: 150px;
        }
        .btn.btn-success {
            width:390px;
            border-radius: 0px;
        }
       }
       .form-control
       {
        border-radius: 0px;
       }
       .row {
            margin-top: 50px;
       }
       #msg {
        font-size :12px;
        color: #b3b3b3;
        margin: 15px 0 0;
       }
       #create {
         color: #4CAF50;
         text-decoration: none;
       }
    </style>
</html>
<body>
    <div class = "container">
        <form class = "form" method = "post" action = "">
            <div class = "row">
                <div class = "col-sm-12">
                    <input type = "text" class = "form-control" placeholder= "Email Id" name = "uname" style = "background-color:#F2F2F2;"required>
                </div><br><br><br>
                 <div class = "col-sm-12">
                    <button class= "btn btn-success" name = "sub" value = "Submit" align = "middle">Submit</button>
                    <br><br>
                    <div class = "col-sm-12">
                        <p id = "msg">Know password?</p>
                        <a href = "../../index.php" id = "create">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div><hr>
    <?php
   //if (isset($_POST['sub']))
/*{
        $email = mysqli_real_escape_string($conn,$_POST['uname']);
        $query = "select * from login where email = '$email'";
        $result = mysqli_query($conn, $query);
        $check = mysqli_num_rows($result);
        if ($check==0)
        {
          echo "<script>alert ('Email id does not exist!!')</script>";
           exit();
        }
        else
        {
                $random = rand (256000, 999999);
                $new_password = $random;
                $email_password = $new_password;
                $key = md5($new_password);
                //$update = "UPDATE registration SET password='$key' where email = '".$email."' ";
                $result = mysqli_query ($conn, $update);
                if ($result)
                {
                    $subject = "Password Changed";
                    $message = "Your login password has been changed to : " .$email_password;
                    $from = "From: tnjshrm1997@gmail.com";
                    mail ($email, $subject, $message, $from);
                    echo "<script>alert ('New password has been sent to your Email')</script>";
                    echo "<script>window.open('login.php', '_self')</script>";
                    exit();
                }
                else
                {
                    echo "<script>alert ('Please try again')</script>";
                    exit();
                }
        }
   }*/
    ?>
</body>