<?php $settings = get_settings(); ?>

     
<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('');?>assets/img/bg/bread-bg.png">
            <div class="container">
                <div class="ori-breadcrumb-content text-center" style="max-width: 85%;">
                    <h1 style="font-family: Lato, sans-serif; font-weight: bold; color: #b96125; margin-bottom: 20px;">Blog</h1>
                    <p style="font-family: Lato, sans-serif; font-size: 22px;">On the Ephnos Creative Agency blog, we share the latest news, trends and tips from the creative world. <br> From digital marketing to the intricacies of design and brand building, you can learn about many topics and discover new ideas to inspire your projects. With our weekly updated articles, we offer valuable information that will help you stand out in the industry.<p>
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
<!-- End of Breadcrumbs section
	============================================= -->

<!-- Start of Blog Feed section
	============================================= -->
	<section id="ori-blog-feed" class="ori-blog-feed-section position-relative">
		<div class="container">
			<div class="ori-blog-feed-content">
				<div class="row">
			
					<div class="col-lg-8">
						<div class="ori-blog-feed-post-content">
							<div class="ori-blog-feed-post-item-wrap">
							<?php foreach($news_list as $news){ ?>
								<div class="ori-blog-feed-item">
									<div class="ori-blog-img">
										<img src="<?php echo base_url("upload/$settings->news_2/$news->img_url"); ?>" alt="">
									</div>
									<div class="ori-blog-text pera-content">
										<div  class="blog-meta text-uppercase">
											<a class="blog-cate" href="<?php echo base_url("$news->url/");?>"><i class="fas fa-file"></i> iş</a>
											<a class="blog-author" href="<?php echo base_url("$news->url/");?>"><i class="fas fa-user"></i> admin</a>
											<a class="blog-date" href="<?php echo base_url("$news->url/");?>"><i class="fas fa-calendar-alt"></i> <?php
									error_reporting(0);
									setlocale(LC_ALL, 'tr_TR.UTF-8');
									echo strftime('%e %b %Y', strtotime($news->createdAt));
									?></a>
											<a class="blog-comment" href="#"><i class="fas fa-comment"></i> 05</a>
										</div>
										<h3><a href="<?php echo base_url("$news->url/");?>"><?php echo $news->title; ?></a></h3>
										<p><?php echo $news->meta_description; ?></p>
										<a class="blog-more text-uppercase" href="<?php echo base_url("$news->url/");?>">More <i class="fal fa-arrow-right"></i></a>
									</div>
								</div>
						   	<?php } ?>	
						</div>
							<div class="ori-pagination-wrap ul-li">
								<ul>
									<li><a href="#"><i class="fal fa-arrow-left"></i></a></li>
									<li><a href="#">1</a></li>
							
									<li><a href="#"><i class="fal fa-arrow-right"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
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
	</section>

	<?php $banner=banners(5); ?>
    <?php if(!empty($banner)){ ?>
<div class="images" style="display:flex; align-items:center; justify-content: center;">
    <img src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" alt="" style="width: 100%; height: 40%;">
</div>

<section id="" class="" style="padding: 30px; background-color: #292929;">  
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
           <!--   <div class="btna"> 
          <a href="<?php echo $banner->button_url ? base_url("$banner->button_url") : ""; ?>"><?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?></a>
            </div> -->
            <div class="ori-copyright-social" style="font-size:35px;">
									<?php if(!empty($settings->instagram)){ ?>
										<a  target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fab fa-instagram"></i></a>
									<?php } ?>
									<?php if(!empty($settings->linkedin)){ ?>
										<a target="_blank" href="<?php echo $settings->linkedin; ?>" ><i class="fa-brands fa-linkedin"></i></a>
									<?php } ?>
									<?php if(!empty($settings->youtube)){ ?>
										<a target="_blank" href="<?php echo $settings->youtube; ?>" ><i class="fab fa-youtube"></i></a>
									<?php } ?>
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

	