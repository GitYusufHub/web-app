<!--====== Start Blog Section ======-->

<section id="ori-blog-1" class="ori-blog-section-1 position-relative">
		<div class="container">
			<div class="ori-blog-top-content-1 d-flex justify-content-center align-items-center">
		<div class="ori-service-top-content-1 d-flex justify-content-center align-items-center">
					<center>
						<h2 class="Services" style="font-family: Lato, sans-serif; font-weight: bold; font-size: 38px; color: #b96125; padding-bottom: 40px; text-transform: capitalize;">Blog</h2>
						<span style="font-family: Lato, sans-serif; font-size: 20px; color: white; padding-bottom: 10px; font-style: italic;">"Our Success Stories"</span>
						<p style="width: 80%; font-family: Rubik, sans-serif; margin-top: 40px; ">Meet our projects and our achievements. As Ephnos Creative Agency, we produce special, impressive works for every brand</p>
					</center>
			</div>
				
			</div>
			<div class="ori-blog-content-1">
				<div class="row">
            	<?php foreach($news_list as $news){ ?>			  
					<div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
						<div class="ori-blog-inner-item">
							<div class="blog-inner-img">
								<img src="<?php echo base_url("upload/410x243/$news->img_url"); ?>" alt="<?php echo $news->title; ?>">
							</div>
							<div class="blog-inner-text"style="font-family: Lato, sans-serif;" >
								<h3 style="font-family: Lato, sans-serif;"><a href="<?php echo base_url("$news->url/");?>" style="color:white;"><?php echo $news->title; ?></a></h3>
								<a class="read-more text-uppercase" href="<?php echo base_url("$news->url/");?>" >More <i class="fal fa-chevron-right"></i></a>
							</div>
						</div>
					</div>
               <?php } ?>  
				</div>
			</div>
			<br>
			<br>
			<center>
				<div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
					<a href="<?php echo base_url('blog');?>" style="color:white;">More</a>
				</div>
				</center>
		</div>

	</section>	


   