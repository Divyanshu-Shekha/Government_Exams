<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select * from category where sno='$sno'";
	$query=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array($query))
	{
		$type=$c['type'];
		
?>
<form method="post">
Type<input type="type" name="type" value="<?php echo$type; ?>"><br>
<input type="submit" name="sub" class="btn">
</form>
<?php

if(isset($_POST['sub']))
{
	$type=$_POST['type'];
$x="update category set type='$type' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:view update for category.php");
}
else
{
	echo"not updated";
}}
}
}
?>