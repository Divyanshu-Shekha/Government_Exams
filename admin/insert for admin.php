<form method="post">
Name<input type="text" name="user"><br>
Password<input type="password" name="password"><br>

<input type="submit" NAME="sub"><br>

</form>


<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$password=$_POST['password'];

$x="insert into admin(name,password)values('$name','$password')";
$y=mysqli_query($con,$x);
if($y)
{
	echo"inserted";
}
else
{
	echo"not inserted".mysqli_error($con);
}
}
?>