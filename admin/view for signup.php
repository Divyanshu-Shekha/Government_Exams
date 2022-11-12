<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<table class="table table-hover">
<tr>
<th>Sno</th>
<th>Name</th>
<th>Password</th>
<th>E_mail</th>
<th>Contact</th>
<th>Address</th>
<th>Profile_picture</th>
</tr>
<?php
include("db1.php");
$x="select * from signup ";


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


?>
<style>
img{
	border:solid;
    border-radius:100px;	
}
</style>
<td><img src="<?php echo'pictures/'.$c['profile_picture'] ?>" height="150px" width="150px"></td>
	<?php
	echo"</tr>";
}

?>
</table>