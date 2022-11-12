<table border='3px'>
<tr>
<th>Sno</th>
<th>Name</th>
<th>Password</th>
</tr>
<?php
include("db1.php");
$x="select * from admin ";


$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{ 
	echo"<tr>";
	echo "<td>$c[0]</td>";
	echo "<td>$c[1]</td>";
	echo "<td>$c[2]</td>";
	echo "<td><a href=delete.php?x=$c[0]>delete</a></td>";
	echo"</tr>";

}

?>



</table>