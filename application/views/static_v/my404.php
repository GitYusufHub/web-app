<?php $settings = get_settings(); ?>
<?php ob_start("kaynak_presle") ?>
<!doctype html>
<html class="no-js" lang="tr">

<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body>
	<?php $this->load->view("includes/header"); ?>

	
    
 <!--   <section class="breadcrumb-section pt-180 pb-180 bg_img" data-background="<?php echo base_url();?>assets/images/bg/breadcrumb-bg-1.jpeg" data-overlay="dark" data-opacity="3">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 d-flex">
                    <div class="breadcrumb-text">
                        <h2 class="breadcrumb-text__title">
                            404!
                        </h2>
                        <ul class="breadcrumb-text__nav">
                            <li><a href="<?php echo base_url(); ?>">Anasayfa</a></li>
                            <li>-</li>
                            <li> Sayfa Bulunamadı!</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- breadcrumb section start
    <div class="error-area pt-100 pb-100">
        <div class="container">
            <div class="error-content text-center">
                <img src="assets/images/404.svg" alt="image">
                <h3>Ooops! Page Not Found</h3>
                <p>
                    The page you are looking for might have been removed <br> had its name changed or is temporarily
                    unavailable.
                </p>
                <div>
                    <a href="index.html" class="main-btn">Back to Home</a>
                </div>
            </div>
        </div>
    </div>-->
        <!-- cta section start -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
              
                <div class="col-xl-12 text-center">
                    
                    <h1 class="mb-4">Sayfa Bulunamadı!</h1>
                    <p class="mb-4"> <?php echo isset($url)? "<span style='color:white;'><b>".base_url($url)."</b></span><br><br>" :""; ?>Lütfen URL adresinizi kontrol ederek tekrar giriniz.</p>
                        <a href="<?php echo base_url(); ?>" class="site-btn site-btn__s3">
                            <span class="icon"><i class="far fa-arrow-right"></i></span>
                            Anasayafaya Git
                        </a>
                    
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    <!-- cta section end -->

  
        

<?php $this->load->view("includes/footer"); ?>

<?php $this->load->view("includes/include_script"); ?>

</body>
</html>