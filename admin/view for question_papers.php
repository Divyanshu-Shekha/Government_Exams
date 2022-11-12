<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<table class="table table-hover">
<tr>
<th>Sno</th>
<th>Name</th>
<th>Category</th>
<th>Sub_category</th>
<th>Type</th>
<th>File</th>
<th>Download</th>
</tr>
<?php
include("db1.php");
$x="select * from question_papers ";


$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{ 
	echo"<tr>";
	echo "<td>$c[0]</td>";
	echo "<td>$c[1]</td>";
	echo "<td>$c[2]</td>";
	echo "<td>$c[3]</td>";
	echo "<td>$c[4]</td>";
	echo "<td>$c[5]</td>";
	
	




	echo"<td><a href='pdf/$c[5]' download><span class='glyphicon glyphicon-download-alt'></span></a></td>";


	echo"</tr>";
}

?>

</table>