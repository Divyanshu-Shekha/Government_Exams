<!DOCTYPE html>
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
<?php
include("headr.php");
?>
  <main id="main">

    <!-- ======= Our Portfolio Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="main2.php">Home</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
      <div class="container">

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/1078.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/1078.jpg" data-gall="portfolioGallery" class="venobox" title="App 1">App 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/1078.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/1200px-Buk-M1-2_air_defence_system_in_2010.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/1200px-Buk-M1-2_air_defence_system_in_2010.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3">Web 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/1200px-Buk-M1-2_air_defence_system_in_2010.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/1200px-OH_10-0194-004_-_Flickr_-_NZ_Defence_Force.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/1200px-OH_10-0194-004_-_Flickr_-_NZ_Defence_Force.jpg" data-gall="portfolioGallery" class="venobox" title="App 2">App 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/1200px-OH_10-0194-004_-_Flickr_-_NZ_Defence_Force.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/japan-pac-3-upgrade.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/japan-pac-3-upgrade.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2">Card 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/japan-pac-3-upgrade.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-web">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/OIP (1).jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/OIP (1).jpg" data-gall="portfolioGallery" class="venobox" title="Web 2">Web 2</a></h3>
                <div>
                  <a href="assets/img/portfolio/OIP (1).jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-app">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/OIP (2).jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/OIP (2).jpg" data-gall="portfolioGallery" class="venobox" title="App 3">App 3</a></h3>
                <div>
                  <a href="assets/img/portfolio/OIP (2).jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/OIP.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/OIP.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/OIP.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/BANKING.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/BANKING.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/BANKING.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/bank_Staktuptakly.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/bank_Staktuptakly.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/bank_Staktuptakly.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/1920px-Wirksworth_Station_Overview.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/1920px-Wirksworth_Station_Overview.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/1920px-Wirksworth_Station_Overview.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/download.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/OIP.jpgdownload.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/download.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/Indian-Bank-Fixed-Deposit-Interest-Rate.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/Indian-Bank-Fixed-Deposit-Interest-Rate.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/Indian-Bank-Fixed-Deposit-Interest-Rate.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
		  
		   <div class="col-lg-4 col-md-6 filter-card">
            <div class="portfolio-item">
              <img src="assets/img/portfolio/World-Bank-grants-India-750-mn.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h3><a href="assets/img/portfolio/World-Bank-grants-India-750-mn.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1">Card 1</a></h3>
                <div>
                  <a href="assets/img/portfolio/World-Bank-grants-India-750-mn.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="Portfolio Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?php
include("footer.php");
?>
<?php
}
?>