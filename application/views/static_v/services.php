<?php $settings = get_settings(); ?>

<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('');?>assets/img/bg/bread-bg.png">
            <div class="container">
                <div class="ori-breadcrumb-content text-center" style="max-width: 85%;">
                    <h1 style="font-family: Lato, sans-serif; font-weight: bold; color: #b96125; margin-bottom: 20px;">Our Services</h1>
                <!--    <h4 style="font-family: Lato, sans-serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;" >“Creative Solutions, 360° Service”</h4> -->
                    <p style="font-family: Lato, sans-serif; font-size: 22px;">As Ephnos Creative Agency, we provide all the creative services your brand may need. From promotional films to digital marketing materials, we produce solutions that will represent you and your brand in the best way at every step. Whether you want to create a new brand or bring your existing brand to a wider audience, our experienced team is ready to strengthen your brand by offering customized solutions for every project.<p>
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
                    max-width: 60%; /* Adjust the value as needed */
                    margin: 0 auto; /* Center the content within the container */
                }

                @media only screen and (max-width: 768px) {
                    .ori-breadcrumb-content {
                        max-width: 90%; /* Adjust the value as needed */
                        margin: 0 auto; /* Center the content within the container */
                    }   
                }
            </style>
        </section>	

	<section id="ori-service-1" class="ori-service-section-1" >
		<div class="ori-service-wrapper-1" style="padding: 0px; padding-bottom: 40px;">
			<div class="container">
				<div class="ori-service-content-1">
					<div class="row">
					<?php if(!empty(get_service())) { foreach(get_service() as $service){ ?>
							<div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
								<a href="<?php echo base_url("home/referanslar?kategori={$service->id}"); ?>">
                                    <div class="ori-service-inner-item position-relative" style="margin-bottom: 20px;">
                                        <div class="ori-service-more position-absolute">
                                        <p style="list-style: none; padding: 20px;"><?php echo $service->description; ?></p>
                                        </div>
                                        <div class="ori-service-img-title position-relative">
                                            <div class="ori-service-img">
                                                <img src="<?php echo base_url("upload/$settings->service_1/$service->img_url"); ?>" alt="">
                                            </div>
                                            <div class="ori-service-title text-center position-absolute">
                                                <h3 style="padding-left: 5px; padding-right: 5px;"><a href="<?php echo base_url("home/referanslar?kategori={$service->id}"); ?>"><?php echo $service->title; ?></a></h3>
                                            </div> 
                                        </div>
                                    </div>
                                </a>

							</div>
 					 <?php }} ?>


					</div>
				</div>
			</div>
		</div>
	</section>
	
		</div>
	</section>

        
	<?php   
    $this->load->view("home_v/testimonial");

	
    //$this->load->view("home_v/about_area");
    ?>

    <style>
            border: 1px solid #fff;
            padding: 10px 20px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .contact-button:hover {
            background-color: #333;
            color: #fff;
            border: 1px solid #999;
        }
    </style>
     
<!-- <div class="contact-div">
    <h1>contact</h1>
	<br>
    <p>Bizimle iletişime geçmek için aşağıdaki butona tıklayın.</p>
    <button class="contact-button"><a  href="<?php echo base_url('iletisim');?>">Buradan iletişime geçebilirsiniz</a></button>
</div> -->


<?php $banner=banners(4); ?>
    <?php if(!empty($banner)){ ?>
<div class="images" style="display:flex; align-items:center; justify-content: center;">
    <img src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" alt="" style="width: 100%; height: 40%;">
</div>

<section id="" class="" style="padding: 30px; background-color: #292929; text-align: center;">  
    <div class="ori-service-wrapper-11"> 
        <div class="container-fluid"> 
            <div class="ori-service-top-content-1 d-flex justify-content-center align-items-center"> 
                <div class="ori-section-title-1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h2 style="font-family: Lato, serif; font-weight: bold;"><?php echo $banner->title ? $banner->title  : "" ; ?></h2> 
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
