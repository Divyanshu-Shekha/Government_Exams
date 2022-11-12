<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
else
{
	$sno=$_SESSION['sno'];
	?>
<main id="main">
     <head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
<?php
include("headr.php");
?>
<style>
#i1
{
	background-color:#b3c6ff;
}
td
{
	
	font-weight:bold;
}
</style>
<div id="i1" class="container"> 
</head>
<table  class="table table-hover">
<tr>
<th>Name</th>
<th>File</th>
<th>Download</th>
</tr>
<?php
include("db1.php");
$x="select * from question_papers where category='Banking' ";


$y=mysqli_query($con,$x);
while($c=mysqli_fetch_array($y))
{ 
	echo"<tr>";
	if($c[4]=='pdf')
	{
	echo "<td>$c[1]</td>";
	echo "<td>$c[5]</td>";
	echo"<td><a href='admin/pdf_videos/$c[5]' download><span class='glyphicon glyphicon-download-alt'></span></a></td>";
	}
	echo"</tr>";
}

?>

</table>

</div>
  </main>
<?php
include("footer.php");
?>
<?php
}
?>