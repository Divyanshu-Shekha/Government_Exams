<!DOCTYPE html>
<?php
include("headr.php");
?>

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration</h2>
          <ol>
            <li><a href="main2.php">Home</a></li>
            <li>Registration</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">   
          <style>
		 #i1
		 {
 			 
		  margin-left:300px;
		  
         }		  
		  </style>	
          <div class="col-lg-6" id="i1">
            <form  method="post" role="form" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="user" class="form-control" id="name" placeholder="Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
				<div class="col-md-6 form-group">
                  <input type="password" name="pass" class="form-control" id="name" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
			  </div>
			  
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              
              <div class="form-group">
                <input type="text" class="form-control" name="contact" id="subject" placeholder="Contact" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" name="address" id="subject" placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
			  
                <input type="file" name="profile_picture"  placeholder="profile_picture" />
                
             
              
              <div class="text-center"><button type="submit" name="sub" >Signup</button></div>
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
	$profile_picture=$_POST['profile_picture'];
	
$sel="select * from signup where E_mail='$E_mail'";
$qu=mysqli_query($con,$sel);
$num=mysqli_num_rows($qu);
if($num>0)
{	
	echo"email already exixt";
}
else
{

    $x="insert into signup(name,password,E_mail,contact,address,profile_picture)values('$name','$password','$E_mail','$contact','$address','$profile_picture')";
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
			
          </div>
    </section><!-- End Contact Section -->

  

  </main><!-- End #main -->

  <?php
include("footer.php");
?>