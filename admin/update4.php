<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select * from signup where sno='$sno'";
	$query=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array($query))
	{
		$password=$c['password'];
			$E_mail=$c['E_mail'];
				$Contact=$c['Contact'];
			$address=$c['address'];
		$profile_picture=$c['profile_picture'];
		
?>
<form method="post">
Name<input type="text" name="user" value="<?php echo $c['Name']; ?>"><br>
Password<input type="password" name="pass" value="<?php echo$password; ?>"><br>
E_mail<input type="text" name="E_mail" value="<?php echo $E_mail; ?>"><br>
Contact<input type="text" name="contact" value="<?php echo $Contact; ?>"><br>
Address<input type="text" name="address" value="<?php echo $address; ?>"><br>
Profile_picture<input type="file" name="profile_picture" value="<?php echo $profile_picture; ?>"><br>
<input type="submit" name="sub" class="btn">
</form>
<?php

if(isset($_POST['sub']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$E_mail=$_POST['E_mail'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	$profile_picture=$_POST['profile_picture'];
$x="update signup set Name='$user',Password='$pass',E_mail='$E_mail',Contact='$contact' ,address='$address',profile_picture='$profile_picture'    where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:view update for signup.php");
}
else
{
	echo"not updated";
}}
}
}
?>