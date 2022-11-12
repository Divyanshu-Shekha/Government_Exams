<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['name']))
{
	header("location:index.php");
}
else
{
	$name=$_SESSION['name'];
	$sno=$_SESSION['sno'];
	
	?>
<?php
include("headr.php");
?>



  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Govt.jobs</span></h2>
          <p class="animate__animated animate__fadeInUp">Government Jobs in India A government job in India is among the most sought after career option for many young job seekers. Often govt. sector jobs are considered a passport to comfortable and secure life. At one point in time it was believed that government employees are paid pea nuts..</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Defence</h2>
          <p class="animate__animated animate__fadeInUp">Defence Force Recruiting (DFR) is a public sector/private sector collaboration between the Department of Defence and Manpower Services (Australia) to provide an integrated recruitment organisation for the Australian Defence Force (ADF).</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Railway</h2>
          <p class="animate__animated animate__fadeInUp">The jobs in Railway sector ensures a long term, stable and safe work environment for the youth. Railway Recruitment Board (RRB) put out job vacancies often and it is a sector that has the most stable jobs and decent salaries. In India, Railway is a government sector so the job in railways is always given preference.</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>
	  
	  <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Banking</h2>
          <p class="animate__animated animate__fadeInUp">The Bank Job is a 2008 heist thriller film directed by Roger Donaldson, written by Dick Clement and Ian La Frenais, and starring Jason Statham, based on the 1971 Baker Street robbery in central London, from which the money and valuables stolen were never recovered. The producers allege that the story was prevented from being told in 1971 because of a D-Notice, allegedly to protect a prominent member of the British Royal Family. According to the producers, this film is intended to reveal the truth for the first time…</p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->
  <?php
echo"<h1>Welcome!!</h1>".$name;
?>

  <main id="main">

   
    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="assets/img/OIP.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=fv0etPPxRWs" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">jobs</a></h4>
              <p class="description">Every year a number of job opportunities become available in the Government Sector. Lakhs of vacancies are expected to be created this year also, encompassing important sectors like Banking, Railways, Insurance, Civil Services, Medical, Media and many more. Educational qualifications for these jobs vary from Intermediate to Post Graduate.</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Goles</a></h4>
              <p class="description">We have only one gole to find the success in life.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Govt. goles</h2>
          <p>Government Jobs in India A government job in India is among the most sought after career option for many young job seekers. Often govt. sector jobs are considered a passport to comfortable and secure life. At one point in time it was believed that government employees are paid pea nuts.</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/portfolio/BANKING.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>Banking diff...</h3>
            <p class="font-italic">
              The Bank Job is a 2008 heist thriller film directed by Roger Donaldson, written by Dick Clement and Ian La Frenais, and starring Jason Statham, based on the 1971 Baker Street robbery in central London, from which the money and valuables stolen were never recovered. The producers allege that the story was prevented from being told in 1971 because of a D-Notice, allegedly to protect a prominent member of the British Royal Family. According to the producers, this film is intended to reveal the truth for the first time…
            </p>
            <ul>
              <li><i class="icofont-check"></i>Success</li>
              <li><i class="icofont-check"></i>Bright future </li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/portfolio/OIP (1).jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Difence diff..</h3>
            <p class="font-italic">
              Defence Force Recruiting (DFR) is a public sector/private sector collaboration between the Department of Defence and Manpower Services (Australia) to provide an integrated recruitment organisation for the Australian Defence Force (ADF).
            </p>
            <p>
              
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/portfolio/download.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Railway diff..</h3>
            <p>The jobs in Railway sector ensures a long term, stable and safe work environment for the youth. Railway Recruitment Board (RRB) put out job vacancies often and it is a sector that has the most stable jobs and decent salaries. In India, Railway is a government sector so the job in railways is always given preference.</p>
            <ul>
              <li><i class="icofont-check"></i>Success </li>
              <li><i class="icofont-check"></i>Bright future </li>
              <li><i class="icofont-check"></i>international </li>
            </ul>
          </div>
        </div>

       

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <?php
include("footer.php");
?>
<?php

}

?>