<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<form method="post" class="form-inline">
<label for="user">Name :</label><br>
  <input type="text" name="user" class="form-control"><br>
<label for="email">E_mail:</label><br>
 <input type="text" name="email" class="form-control"><br>
<label for="cont">Contact:</label><br>
<input type="number" name="cont" class="form-control"><br>
<label for="msg">Message:</label><br>
<input type="text" name="msg" class="form-control"><br><br>
<input type="submit" NAME="sub" class="btn btn-default"><br>
</form>


<?php
include("db1.php");
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$E_mail=$_POST['email'];
	$contact=$_POST['cont'];
	$message=$_POST['msg'];

$x="insert into contact(Name,E_mail,Contact,message)values('$name','$E_mail','$contact','$message')";
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