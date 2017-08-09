<?php
    session_start();
?>
<html>
    <title>Login</title>
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
<form class="form-inline form" method="post" action="" enctype="multipart/form-data">
   <br><br>
    <div class="form-group">
      <label >Staff ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="email" class="form-control" name = "uname" placeholder="Enter Staff ID" required>
    </div><br><br>
    <div class="form-group">
      <label >Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
      <input type="password" class="form-control" name="pass" placeholder="Enter password" required>
    </div><br><br><br><br>
    <button type="submit" class="btn btn-success" name="sub" value="Submit">Submit</button>
  </form>
    </div><hr>
</body>