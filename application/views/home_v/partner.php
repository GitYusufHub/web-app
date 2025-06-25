<!--====== Start Sponsor Section ======-->
<section id="ori-sponsor-1" class="ori-sponsor-section-1 " style="background-color:#292929; text-aling:center; padding: 0px; padding-top: 40px; padding-bottom: 50px; margin-top: 150px;">
<!--====== Start Sponsor Section ======-->

    <div class="container">
        <div class="ori-sponsor-title text-center">
		    <h2 style="font-family: Lato, sans-serif; font-weight: bold; font-size: 38px; color: #b96125; padding-bottom: 40px; margin-top:50px; text-transform: capitalize;">References</h2>
		    <p style="font-family: Lato, sans-serif; text-transform: capitalize; font-weight: bold; font-style: italic; font-size: 20px;" >"Those Who Traveled With Us" <p>
		    <p style="font-family: Lato, sans-serif; font-size: 22px; margin-top:40px;">Happy customers are our strongest reference. <br> Here is the feedback we get from the brands that work with us.<p>  
        </div>
    </div>



<!--====== End Sponsor Section ======-->


</section>

<section id="ori-testimonial-1" >
   <div class="container">
      <!--  <div class="ori-sponsor-title text-uppercase text-center">
            <h3 style="font-size: 20px"><i></i> <span>Brands</span> <i></i> </h3>
        </div> -->
        <div class="ori-sponsor-content" style="margin-top: 100px;" >
            <div class="ori-sponsor-slider" data-slick='{"slidesToShow": 5, "slidesToScroll": 1, "autoplay": true, "autoplaySpeed": 3000}'>
                <?php if (isset($brands) && !empty($brands)) { ?>
                    <?php foreach ($brands as $brand) { ?>
                        <div class="ori-sponsor-item">
                            <div class="ori-sponsor-img">
                                <a href="<?php echo htmlspecialchars($brand->url); ?>" target="_blank" rel="noopener noreferrer">
                                    <img src="<?php echo base_url("upload/{$settings->brand_1}/{$brand->img_url}"); ?>" alt="<?php echo htmlspecialchars($brand->title); ?>">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="col-md-12">
                        <p style="text-align: canter;">No brands have been added yet.</p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </section>	
