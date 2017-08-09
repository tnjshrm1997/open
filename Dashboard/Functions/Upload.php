  <?php include("db.php"); 
  session_start();?>
 <?php
        if(isset($_POST['sub'])){
		$user = $_SESSION['Email'];
        $name = $_SESSION['Name'];
        $photo = $_SESSION['Profile'];
        $category = $_POST['Category'];
	$Upload= $_FILES['Upload']['name'];
	$content = $_POST['content'];
        $time = time();
        $Date = date("Y-m-d, $time");
		$filetype = pathinfo($Upload,PATHINFO_EXTENSION);
		if ($_POST['Category']=='Videos')
		{
		if ($filetype!= "MP4" && $filetype != "mp4" && $filetype!= "avi" && $filetype!="AVI" && $filetype!="flv" && $filetype!="FLV")
		{
			Echo "<h4 style='color:red;'>Failed </h4>";
		}
		else{
			$target = "../videos/";
			$target1 = $target.$name.basename($_FILES['Upload']['name']);
            $userUpload = $name.$_FILES['Upload']['name'];
			$status = move_uploaded_file($_FILES['Upload']['tmp_name'], $target1);
			$query = " insert into videoupload (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$query1 = " insert into dashfetch (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$result = mysqli_query($conn, $query);
			$result = mysqli_query($conn, $query1);
			if ($result){
				echo "<script>window.open('../index.php', '_self')</script>";
			}
			else{
				Echo "<h4 style='color:red;'>Failed </h4>";
			}
		}
		}
        
        //Audio
        
       else if ($_POST['Category']=='Music')
		{
		if ($filetype!= "MP3" &&$filetype != "mp3")
		{
			Echo "<h4 style='color:red;'>Failed </h4>";
		}
		else{
			$target = "../music/";
			$target1 = $target.$name.basename($_FILES['Upload']['name']);
            $userUpload = $name.$_FILES['Upload']['name'];
			$status = move_uploaded_file($_FILES['Upload']['tmp_name'], $target1);
			$query = " insert into audioupload (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$query1 = " insert into dashfetch (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$result = mysqli_query($conn, $query);
			$result = mysqli_query($conn, $query1);
			if ($result){
				echo "<script>window.open('../index.php', '_self')</script>";
			}
			else{
				Echo "<h4 style='color:red;'>Failed </h4>";
			}
		}
		}

//Photography

else if ($_POST['Category']=='Photo')
		{
		if ($filetype!= "jpg" && $filetype!= "JPG" && $filetype != "png")
		{
			Echo "<h4 style='color:red;'>Failed </h4>";
		}
		else{
			$target = "../photography/";
			$target1 = $target.$name.basename($_FILES['Upload']['name']);
            $userUpload = $name.$_FILES['Upload']['name'];
			$status = move_uploaded_file($_FILES['Upload']['tmp_name'], $target1);
			$query = " insert into photoupload (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$query1 = " insert into dashfetch (`UserName`, `Category`, `UserPhoto`, `Path`, `LikeCount`, `Time`, `Report`, `Email`, `Content`) values ('$name','$category',
                       '$photo', '$userUpload', '0', '$Date', 'No', '$user', '$content' )";
			$result = mysqli_query($conn, $query);
			$result = mysqli_query($conn, $query1);
			if ($result){
				echo "<script>window.open('../index.php', '_self')</script>";
			}
			else{
				Echo "<h4 style='color:red;'>Failed </h4>";
			}
		}
		}






}
        
      
	?>