	<section id="ori-about-play" class="ori-about-play-section position-relative">
		<div class="container">
		<div class="ori-service-top-content-1 d-flex justify-content-center align-items-center">
					<center>
						<h2 class="Services" style="font-family: Lato, sans-serif; font-weight: bold; font-size: 38px; color: #b96125; padding-bottom: 40px; text-transform: capitalize;">About Us</h2>
						<span style="font-family: Lato, sans-serif; font-size: 20px; color: white; padding-bottom: 10px; font-style: italic;">"The Creative Team That Makes a Difference"</span>
						<p style="width: 80%; font-family: Rubik, sans-serif; margin-top: 40px; margin-bottom: 150px; font-size:22px; "><?php echo $settings->about_meta; ?></p>
					</center>
				</div>

			<div class="ori-about-play-area position-relative">
				<div class="ori-about-play-img" id="video-container">
<?php /*				<iframe width="100%" height="600px" src="<?php echo $settings->fax_2; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> */?>
				</div>

				<style>
				@media (max-width: 768px) {

					.ori-about-play-img iframe{
						width: 100%;
						height: 250px;
					}


				}
				
				</style>
				
			</div>
				<div class="ori-about-play-top-text">
					<?php echo $settings->about_us; ?>
				</div>
				<center>
				<div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInRight;">
					<a href="#"style="color:white;">More</a>
				</div>
			</center>
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

	<script>
    window.addEventListener('load', function () {
        const iframe = document.createElement('iframe');

        iframe.width = "100%";
        iframe.height = "600px";
        iframe.src = "<?php echo $settings->fax_2; ?>";
        iframe.title = "YouTube video player";
        iframe.frameBorder = "0";
        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
        iframe.referrerPolicy = "strict-origin-when-cross-origin";
        iframe.allowFullscreen = true;

        document.getElementById('video-container').appendChild(iframe);
    });
</script>