<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<table class="table table-hover">
<tr>
<th>Sno</th>
<th>Type</th>
<th>Delete</th>
</tr>
<?php
include("db1.php");
$x="select * from category ";


$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{ 
	echo"<tr>";
	echo "<td>$c[0]</td>";
	echo "<td>$c[1]</td>";
	echo "<td><a href=delete1.php?x=$c[0]><span class='glyphicon glyphicon-trash'></span></a></td>";
	echo"</tr>";

}

?>



</table>