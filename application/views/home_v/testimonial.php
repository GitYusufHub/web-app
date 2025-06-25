





<section id="ori-testimonial-1" >



		<div class="ori-vector-bg position-absolute wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">

		<!--	<img src="<?php echo base_url('');?>assets/img/vector/tst-vector1.png" alt=""> -->

		</div>

		<div class="container">

		

			<div class="ori-testimonial-content-1 position-relative" style="margin-top: 150px; margin-bottom: 150px;">

				<div class="ori-testimonial-title text-center text-uppercase">

					

				</div>

				<div class="ori-testimonial-slider-1">

				<?php foreach(get_testimonials() as $item):?>

					<div class="ori-testimonial-item-area"

   class="slide" id="dynamic-slide">

 

						<div class="ori-testimonial-item-1" style="max-width: 85%;">

							<div class="ori-testimonial-text text-center pera-content">

						<center>	

							<div style="aling-item:center;">

                                <img style="width: 150px; height: 150px; border-radius: 100%; margin-bottom: 20px;" src="<?php echo base_url("$settings->testimonial_1/$item->img_url");?>" alt="">

                            </div>

						</center>



								<p style="font-size: 20px; font-family: Lato, sans-serif;">“<?php echo $item->description; ?>”</p>

								<div class="ori-testimonial-author text-center text-uppercase">

									<h4><?php echo $item->full_name; ?></h4>

									<span><?php echo $item->company; ?></span>

								</div>

							</div>

						</div>

					</div>

                    <?php endforeach; ?>

				</div>

			<div class="carousel_nav">
				<button type="button" class="testi-left_arrow slick-arrow" style=""><img decoding="async" src="https://themexriver.com/wp/orixy/wp-content/plugins/orixy-addon/includes/widgets/testimonial-1/prev.png" alt=""></button>
				<button type="button" class="testi-right_arrow slick-arrow" style=""><img decoding="async" src="https://themexriver.com/wp/orixy/wp-content/plugins/orixy-addon/includes/widgets/testimonial-1/next.png" alt=""></button>
			</div>

			</div>

		</div>

		<br>

		<br>

	</section>	



 <style>





        .contact-div {

            background-color: #000;

            color: #fff;

			    font-family: "montserat", Sans-serif;

            padding: 20px;

            border-radius: 10px;

            text-align: center;

            width: auto;

            box-shadow: 0 0 10px rgba(255, 255, 255, 0.2);

        }



        .contact-button {

            background-color: #000;

            color: #fff;

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

