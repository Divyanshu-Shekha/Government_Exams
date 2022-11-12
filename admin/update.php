<?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select * from admin where sno='$sno'";
	$query=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array($query))
	{
		$password=$c['Password'];
		
?>
<form method="post">
Name<input type="text" name="user" value="<?php echo $c['Name']; ?>" readonly><br>
Password<input type="password" name="pass" value="<?php echo$password; ?>"><br>
<input type="submit" name="sub">
</form>
<?php

if(isset($_POST['sub']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
$x="update admin set Name='$user',Password='$pass' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:view update for admin.php");
}
else
{
	echo"not updated";
}}
}
}
?>