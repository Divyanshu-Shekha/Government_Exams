<head><link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<form method="post" class="form-inline" enctype="multipart/form-data">
<label for="user">Name :</label><br>
         <input type="text" name="user" class="form-control"><br>
<label for="pass">Password:</label><br>
         <input type="text" name="pass" class="form-control"><br>
<label for="email">E_mail:</label><br>
         <input type="text" name="email" class="form-control"><br>
<label for="contact">Contact:</label><br>
         <input type="number" name="contact" class="form-control"><br>
<label for="address">Address:</label><br>
         <input type="text" name="address" class="form-control"><br>
<label for="profile_picture">Profile_picture:</label><br>
         <input type="file" name="img"><br><br>
<input type="submit" NAME="sub" class="btn"><br>
</form>


<?php
     $con=mysqli_connect("localhost","root","","project");
     if(isset($_POST['sub']))
{
	$name=$_POST['user'];
	$password=$_POST['pass'];
	$E_mail=$_POST['email'];
	$contact=$_POST['contact'];
	$address=$_POST['address'];
	
	$img_name=$_FILES['img']['name'];
	$type=$_FILES['img']['type'];
	$size=$_FILES['img']['size'];
	$temp=$_FILES['img']['tmp_name'];
	$path='pictures/'.$img_name;
	$m=move_uploaded_file($temp,$path);
	
$sel="select * from signup where E_mail='$E_mail'";
$qu=mysqli_query($con,$sel);
$num=mysqli_num_rows($qu);
if($num>0)
{	
	echo"email already exixt";
}
else
{

    $x="insert into signup(name,password,E_mail,contact,address,profile_picture)values('$name','$password','$E_mail','$contact','$address','$img_name')";
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
}
?>