<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['name']))
{
	header("location:main2.php");
}
else
{
	
	?>
<?php
include("headr.php");
?>


  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>login</h2>
          <ol>
            <li><a href="main2.php">Home</a></li>
            <li>login</li>
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
            <form  method="post" role="form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="user" class="form-control" id="name" placeholder="Id" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" name="pass" id="email" placeholder="password" data-rule="minlen:4" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
             
             
              <div class="text-center"><button type="submit"  name="sub" class="btn btn-primary">Login</button></div><br>
			   <div class="text-center"><button type="submit" class="btn btn-primary"><a href="ragistration.php">Sighnup</a></button></div>
            </form>
			<?php
include("db1.php");
if(isset($_POST['sub']))
{
	$user=$_POST['user'];
	$pass=$_POST['pass'];
$x="select * from signup where E_mail='$user' and password='$pass'";
$y=mysqli_query($con,$x);
$c=mysqli_fetch_array($y);
$n=mysqli_num_rows($y);
if($n>0)
{
	session_start();
	$_SESSION['sno']=$c['sno'];
	$_SESSION['name']=$c['E_mail'];
	$_SESSION['pass']=$c['password'];
	?>
	<script>
	window.location='main2.php';
	
	</script>
	
	<?php
}
else
{
	echo"not login";
}
}
?>
          </div>

        

      
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <?php
include("footer.php");
?>
<?php
}
?>