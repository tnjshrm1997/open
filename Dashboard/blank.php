<?php include("../api/db.php"); ?>
<?php
    session_start();
?>
<?php
	 if (!isset($_SESSION['Email']))
     {
      echo "<script>alert ('You Need to login first.')</script>";
      echo "<script>window.open('../index.php', '_self')</script>";
      exit();
    }

	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><?php echo $_SESSION['Name']; ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="Functions/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="../userPhoto/<?php echo $_SESSION['Profile']; ?>" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="profile.php"><i class="fa fa-desktop fa-3x"></i> Profile</a>
                    </li>
                    <li>
                        <a  href="music.php"><i class="fa fa-qrcode fa-3x"></i> Music</a>
                    </li>
						  
                      <li  >
                        <a  href="dance.php"><i class="fa fa-table fa-3x"></i> Dance</a>
                    </li>
                    <li  >
                        <a  href="photography.php"><i class="fa fa-edit fa-3x"></i> Photography</a>
                    </li>				
					
					                   
                    <li>
                        
                  <li  >
                        <a class="active-menu" href="blank.php"><i class="fa fa-square-o fa-3x"></i> Upload</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2 style="margin-left:25px;">Upload</h2>
					 <hr>
                         <form class = "form" method = "post" action = "Functions/Upload.php" enctype="multipart/form-data">
					<div class = "col-sm-12">
                    <select name = "Category" class = "form-control"  style = "background-color:#F2F2F2;" required>
						<option value="">Select Category</option>
						<option value = "Videos">Dance</option>
						<option value = "Music">Music</option>
						<option value = "Photo">Photography</option>
					</select>
                </div><br><br><br>
				<div class = "col-sm-12">
                    <textarea class="form-control" rows="3" id="comment" name = "content" style = "background-color:#F2F2F2;" placeholder="What are you thinking?"></textarea>
                </div><br><br><br><br><br>
                <div class = "col-sm-12">
                    <input type = "file" class = "form-control" name = "Upload" style = "background-color:#F2F2F2;" required>
                </div><br><br><br>
                 <div class = "col-sm-12">
                      <button class= "btn btn-success" name = "sub" value = "Submit" align = "middle">Upload</button>
                 </div> <br><br>
                   
        </form>
		
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
