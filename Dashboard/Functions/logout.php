<?php include ('db.php') ?>
<?php session_start();

unset($_SESSION['Email']);
unset($_SESSION['Name']);
unset($_SESSION['Profile']);
unset($_SESSION['logged_in']);
header('location: ../../index.php');

?>