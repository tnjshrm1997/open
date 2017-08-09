<?php include("db.php") ?>
<?php
    session_start();
?>
<?php
   if (isset($_POST['sub']))
{
                $email = $_SESSION['Email'];
                $name = $_SESSION['Name'];
                $Photo=$_FILES['ProfilePhoto']['name'];
                $target = "../../userPhoto/";
                $target1 = $target.$name.basename($_FILES['ProfilePhoto']['name']);
                $userPhoto = $name.$_FILES['ProfilePhoto']['name'];
                $status = move_uploaded_file($_FILES['ProfilePhoto']['tmp_name'], $target1);
                $update = "UPDATE registration SET ProfilePic='$userPhoto' where email = '$email' ";
                $update1 = "UPDATE videoupload SET UserPhoto='$userPhoto' where email = '$email' ";
                $update2 = "UPDATE audioupload SET UserPhoto='$userPhoto' where email = '$email' ";
                $update3 = "UPDATE photoupload SET UserPhoto='$userPhoto' where email = '$email' ";
                $update4 = "UPDATE dashfetch SET UserPhoto='$userPhoto' where email = '$email' ";
                $result = mysqli_query ($conn, $update);
                $result1 = mysqli_query ($conn, $update1);
                $result2 = mysqli_query ($conn, $update2);
                $result3 = mysqli_query ($conn, $update3);
                $result4 = mysqli_query ($conn, $update4);
                if ($result && $result1 && $result2 && $result3 && $result4)
                {
                $query = "select * from registration where email = '$email'";
                $result3 = mysqli_query($conn, $query);
                $check = mysqli_num_rows($result3);
                $row = mysqli_fetch_row($result3);
                $_SESSION['Profile'] = $row['4'];
                $_SESSION['Name'] = $row['1'];
                   echo "<script>window.open('../profile.php', '_self')</script>";
                    exit();
                }
                else
                {
                    echo "<script>alert ('Please try again')</script>";
                    exit();
                }
        }
   
    ?>