<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<form method="post" class="form-inline">
<label for="old">Old password:</label><br>
       <input type="password" name="old" class="form-control" placeholder="Old password"><br>
<label for="new">New password:</label><br>
       <input type="password" name="new" class="form-control" placeholder="New password"><br>
<label for="conf">Confirm password:</label><br>
       <input type="password" name="conf" class="form-control" placeholder="Confirm password"><br><br>
<input type="submit" name="sub" class="btn">
</form>
<?php
include("db1.php");
if(isset($_POST['sub']))
{
	$old=$_POST['old'];
	$new=$_POST['new'];
	$conf=$_POST['conf'];
	$x="select * from admin where Password='$old'";
	$y=mysqli_query($con,$x);
	$n=mysqli_num_rows($y);
if($n>0)
{
$up="update admin set Password='$new'";
$qu=mysqli_query($con,$up);
if($qu)
{
	echo"updated";
}
else
{
	echo"not updated".mysqli_error($con);
}
}
else
{
	echo"value not match";
}
}



?>