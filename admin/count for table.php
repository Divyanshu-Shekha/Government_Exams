<?php
include("db1.php");
$x="select count(sno)from admin";
$query=mysqli_query($con,$x);
	while($c=mysqli_fetch_array($query))
	{
		echo $c[0]."<br>";
	}
	
?>