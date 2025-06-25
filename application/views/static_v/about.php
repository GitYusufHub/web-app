<?php $settings = get_settings(); ?>

		<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('');?>assets/img/bg/bread-bg.png">
            <div class="container">
                <div class="ori-breadcrumb-content text-center" style="max-width: 85%;">
                    <h1 style="font-family: Lato, sans-serif; font-weight: bold; color: #b96125; margin-bottom: 20px;">About Us</h1>
                <!--    <h4 style="font-family: Lato, sans-serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;" >"The Creative Team That Makes a Difference"</h4> -->
                    <p style="font-family: Lato, sans-serif; font-size: 22px;">Capturing the Heartbeat of Every Story <br><br>

At Ephnos Creative Agency, we tell stories that matter, pushing creative boundaries and always putting people at the heart of every project. <br><br>

We believe the best stories are those that connect on a human level. Whether showcasing cutting-edge technology or powerful industrial feats, it's the people behind the work that make it unforgettable. When you center the story around people, you build more than a brand—you build lasting connections. <br><br>

Inspired by Istanbul, where East meets West, we craft stories that are both timeless and universal. Our global experience shows us that the most powerful stories transcend borders and speak directly to the heart. <br><br>

At Ephnos, we don’t just create content—we create connections. Let’s bring your story to life.<p>
                </div>
            </div>
            <div class="line_animation">
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
            </div>
            <style>
                .ori-breadcrumb-content {
                    max-width: 40%; /* Adjust the value as needed */
                    margin: 0 auto; /* Center the content within the container */
                }
                 
                @media only screen and (max-width: 768px) {
                    .ori-breadcrumb-content {
                        max-width: 95%; /* Adjust the value as needed */
                        margin: 0 auto; /* Center the content within the container */
                    }   
                }
            </style>
        </section>



	<section id="ori-about-play" class="ori-about-play-section position-relative">
		<div class="container">
			<div class="ori-about-play-area position-relative">
				<div class="ori-about-play-img">
				<iframe width="100%" height="600px" src="<?php echo $settings->fax_2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
				</div>

				<style>
				@media (max-width: 768px) {

					.ori-about-play-img iframe{
						width: 100%;
						height: 250px;
					}
				}

				.ori-breadcrumb-content {
    max-width: 70%; /* Adjust the value as needed */
    margin: 0 auto; /* Center the content within the container */
}

				</style>
				
			</div>
			<br>
			<div class="ori-about-play-top-text">
					<?php echo $settings->about_us; ?>
				</div>
		</div>

	</section>		




<?php $this->load->view('home_v/testimonial');?>  
<?php //$this->load->view('home_v/team');?>  


<?php $banner=banners(2); ?>
    <?php if(!empty($banner)){ ?>
<div class="images" style="display:flex; align-items:center; justify-content: center;">
    <img src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" alt="" style="width: 100%; height: 40%;">
</div>

<section id="" class="" style="padding: 30px; background-color: #292929;">  
    <div class="ori-service-wrapper-11"> 
        <div class="container-fluid"> 
            <div class="ori-service-top-content-1 d-flex justify-content-center align-items-center"> 
                <div class="ori-section-title-1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h2 style="font-family: Lato, serif; font-weight: bold; text-transform: capitalize; text-align: center;"><?php echo $banner->title ? $banner->title  : "" ; ?></h2> 
                </div> 
            </div> 
        </div> 
        <br>
        <div class="ori-testimonial-text text-center pera-content"> 
            <p style="font-size: 20px; font-family: Lato, serif; color: #b96125; font-weight: bold;">
      <?php echo $banner->description ? $banner->description  : "" ; ?>
            </p> 
        </div>
        <br>
        <center>
            <div class="btna"> 
                <a href="<?php echo $banner->button_url ? base_url("$banner->button_url") : ""; ?>"><?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?></a> 
            </div>
        </center> 
    </div> 
</section>
    <?php } ?>
<style>
    /* Dışarıdaki kapsayıcıya tam genişlik için düzenleme */
.ori-service-wrapper-11 {
    background-color: #292929;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left: 0;
    padding-right: 0;
}

/* Container-fluid ile tam genişlik kullanımı */
.container-fluid {
    padding-left: 0;
    padding-right: 0;
}

/* Buton düzenlemesi */
.btna {
    width: 200px;
    height: 50px;
    background-color: transparent;
    border: 2px #b96125 solid;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    text-align: center;
}

.btna a {
    color: #ffffff;
    text-decoration: none;
    font-family: Lato, serif;
    font-weight: bold;
}

</style>

<div style="width:100%; height:0px; border-top: 1px solid #292929; " class="cizgi"></div>

