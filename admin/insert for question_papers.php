<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<form method="post" class="form-inline" enctype="multipart/form-data">
<label for="user">Name :</label><br>
           <input type="text" name="user" class="form-control"><br>
<label for="cat">Category:</label><br>
           <input type="text" name="cat" class="form-control"><br>
<label for="scat">Sub_category:</label><br>
           <input type="text" name="scat" class="form-control"><br>
<label for="type">Type:</label><br>
           <input type="text" name="type" class="form-control"><br>
<label for="file">File:</label><br>
           <input type="file" name="file"><br><br>
<input type="submit" NAME="sub" class="btn"><br>

</form>


<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$category=$_POST['cat'];
	$sub_category=$_POST['scat'];
	$type=$_POST['type'];
	
	
	$file_name=$_FILES['file']['name'];
	$type2=$_FILES['file']['type'];
	$size=$_FILES['file']['size'];
	$temp=$_FILES['file']['tmp_name'];
	$path='pdf_videos/'.$file_name;
	$m=move_uploaded_file($temp,$path);

$x="insert into question_papers(Name,Category,sub_category,type,file)values('$name','$category','$sub_category','$type','$file_name')";
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