<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<?php
include("headr.php");
?>
  <main id="main">

    






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

<img src="<?php echo'pictures/'.$c['profile_picture'] ?>" height="150px" width="150px">
	<?php
	echo"</tr>";
}
	?>
	</main>


<?php
include("footer.php");
?>







