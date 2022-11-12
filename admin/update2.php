<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select * from contact where sno='$sno'";
	$query=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array($query))
	{
		$email=$c['E_mail'];
		$contact=$c['Contact'];
		$message=$c['message'];
		
?>
<form method="post">
Name<input type="text" name="user" value="<?php echo $c['Name']; ?>"><br>
E_mail<input type="text" name="email" value="<?php echo$email; ?>"><br>
Contact<input type="text" name="contact" value="<?php echo$contact; ?>"><br>
Message<input type="text" name="message" value="<?php echo$message; ?>"><br>
<input type="submit" name="sub" class="btn">
</form>
<?php

if(isset($_POST['sub']))
{
	$user=$_POST['user'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$message=$_POST['message'];
$x="update contact set Name='$user',E_mail='$email',Contact='$contact',message='$message' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:view update for contact.php");
}
else
{
	echo"not updated";
}}
}
}
?>