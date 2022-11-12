<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<form method="post" class="form-inline">
         
		 <label for="type">Type:</label><br>
         <input type="text" name="type" placeholder="category" class="form-control"><br>
		 <br>
         <input type="submit" NAME="sub" class="btn btn-default"><br>
		
</form>


<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$type=$_POST['type'];

$x="insert into category(type)values('$type')";
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