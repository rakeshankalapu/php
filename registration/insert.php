<?php
include('registration.php');
if(isset($_POST["submit"])){
	$name = mysqli_real_escape_string($con,$_POST['username']);
	$pwd = mysqli_real_escape_string($con,$_POST['password']);
	$no = mysqli_real_escape_string($con,$_POST['number']);
	$text = mysqli_real_escape_string($con,$_POST['text']);
	$date = mysqli_real_escape_string($con,$_POST['date']);
	$res = mysqli_query($con,"INSERT INTO rakesh(username,password,mobilenumber,emailid,daterecord)VALUES('$name','$pwd','$no','$text','$date')");
if($res){
	echo("Error description:".mysqli_error($con));
	header("location:sucess.php");

}
}
mysqli_close($con);
?>