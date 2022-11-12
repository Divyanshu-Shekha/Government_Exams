<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
include("db1.php");
if(isset($_GET['x']))
{
	$sno=$_GET['x'];
	$sel="select * from question_papers where sno='$sno'";
	$query=mysqli_query($con,$sel);
	while($c=mysqli_fetch_array($query))
	{
		$category=$c['Category'];
		$sub_category=$c['sub_category'];
		$type=$c['type'];
		$file=$c['file'];
		
?>
<form method="post">
Name<input type="text" name="user" value="<?php echo $c['Name']; ?>"><br>
Category<input type="text" name="category" value="<?php echo$category; ?>"><br>
Sub_category<input type="text" name="sub_category" value="<?php echo$sub_category; ?>"><br>
Type<input type="text" name="type" value="<?php echo$type; ?>"><br>
File<input type="file" name="file" value="<?php echo$file; ?>"><br>
<input type="submit" name="sub" class="btn">
</form>
<?php

if(isset($_POST['sub']))
{
	$user=$_POST['user'];
	$category=$_POST['category'];
	$sub_category=$_POST['sub_category'];
	$type=$_POST['type'];
	$file=$_POST['file'];
$x="update question_papers set Name='$user',Category='$category',sub_category='$sub_category',type='$type',file='$file' where sno='$sno'";
$y=mysqli_query($con,$x);
if($y)
{
	header("location:view update for question_papers.php");
}
else
{
	echo"not updated";
}}
}
}
?>