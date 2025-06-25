<style>
					.Services{
						font-family: "Lato", sans-serif; font-size: 38px; color: #b96125; padding-bottom: 10px;
					}
					
				</style>
  <!--====== End Categories Section ======-->

 <section id="ori-service-1" class="ori-service-section-1">
		<div class="ori-service-wrapper-1">
			<div class="container">
				<div class="ori-service-top-content-1 d-flex justify-content-center align-items-center">
					<center>
						<h2 class="Services" style="font-family: Lato, sans-serif; font-weight: bold; font-size: 38px; color: #b96125; padding-bottom: 40px; text-transform: capitalize;">Our Services</h2>
						<span style="font-family: Lato, sans-serif; font-size: 20px; color: white; padding-bottom: 10px; font-style: italic;">"Creative Solutions, 360° Service"</span>
						<p style="width: 80%; font-family: Rubik, sans-serif; margin-top: 40px; ">We offer all creative solutions for your brand under one roof. From strategy to production, from digital design to brand management, we are with you at every stage.</p>
					</center>
				</div>
				<div class="ori-service-content-1">
					<div class="row">
					<?php 
					$counter = 0; // Sayaç başlat
					if(!empty(get_service())) { 
						foreach(get_service() as $service) { 
							if ($counter >= 3) break; // Sadece 3 veri göstermek için döngüyü kır
					?>
		<div class="col-lg-4 col-sm-6 filtr-item" >
	
            <div class="ori-project-item-1 position-relative">
                <div class="ori-project-img">
                    <img src="<?php echo base_url("upload/$settings->service_1/$service->img_url"); ?>" alt="">
                </div>
                <div class="ori-project-text position-absolute">
				<h3><a href="<?php echo base_url("home/referanslar?kategori={$service->id}"); ?>" style="color:white;"><?php echo $service->title; ?></a></h3>
                    <span class="text-uppercase project-category"><a href="<?php echo base_url("home/referanslar?kategori={$service->id}"); ?>" style="color:white;"><?php echo $service->description; ?></a></span>
                </div>
                <div class="ori-project-link position-absolute">
                 
                </div>
            </div>
			</a>
        </div>
					<?php 
							$counter++; // Sayaç arttır
						} 
					} 
					?>
					


					</div>
					
				</div>
			
			</div>

			<br>
			<br>
				<center><div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
						<a href="https://www.ephnosfilm.com/hizmetler/" style="color:white;">More</a>
					</div></center>
		</div>
	</section>


