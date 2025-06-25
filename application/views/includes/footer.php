<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5QRXTD7VXW"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5QRXTD7VXW');
</script>

<?php $settings = get_settings(); ?>
<?php 
$ip = $_SERVER["REMOTE_ADDR"];
$ch = curl_init('http://ip-api.com/json/'.$ip.'?lang=en');                                                                     
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'                                                                                
));
$result = curl_exec($ch);
$data = json_decode($result);
?>

<!--====== Start Footer ======-->
 	<footer id="" class=" "style="background-color: #000;">
	  <!--	<div class="container"> -->


				<div class="containerss">
					<div class="logo">
						<img src="<?php echo base_url("upload/$settings->logo");?>" alt="Logo">
						<h3><i class="fa-solid fa-location-dot"> </i> <?php echo $settings->address; ?></h3>
						<a href="tel:<?php echo $settings->phone_1; ?>">
						<h3><i class="fa-solid fa-phone"> </i> +9<?php echo $settings->phone_1; ?></h3>
						</a>
						<a href="mailto:<?php echo $settings->email; ?>"><h3><i class="fa-solid fa-envelope"> </i> <?php echo $settings->email; ?></h3></a>
						<br>
					<!--	<p>©2020 by Ephnos Creative</p> -->
						
					</div>
					<div class="info">
						<div class="ori-copyright-social">
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

					</div>
				</div>
		</div>
	<!--	</div> -->

	</footer>



<style>
	.containerss {
		display: flex;
		justify-content: space-between;
		align-items: flex-end;
		padding: 20px;
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #000;
		color: #7d7d7d;
		font-family: "Lato", serif;
		align-items: flex-start;
		padding-left:40px;
		padding-right: 40px;
	}

.logo {
  align-items: center;
}

.logo img {
  height: 40px;
  margin-right: 10px;
  margin-bottom: 20px;
}

.info {
  display: flex;
  flex-direction: column;
  align-items: flex-end;
}

.info a {
  color: white;
  text-decoration: none;
  margin-bottom: 5px;
}

.info a:hover {
  text-decoration: underline;
}

.social {
  display: flex;
  align-items: center;
}

.social img {
  height: 20px;
  margin-left: 5px;
}

.logo h3{
	font-size: 15px;
	margin-top: 15px;
	width: 40%;
}

.ori-copyright-social i{
	font-size: 25px;
	margin-right: 10px;
}

	/* Mobil uyumluluk için @media sorgusu */
	@media (max-width: 768px) {
		.containerss {
			flex-direction: column;
			align-items: center;
			padding: 20px;
		}

		.logo, .info {
			align-items: center;
			text-align: center;
		}

		.logo h3 {
			width: 100%;
			font-size: 14px;
		}

		.ori-copyright-social {
			margin-top: 15px;
		}
	}

</style>




 
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css1/wp.css?versiyon=<?php echo date("Y-m-d");?>" />

<a style="left:40px;" href="https://wa.me/9<?php echo str_replace(' ', '', $settings->phone_1); ?>?text=Merhaba!" target="_blank" class="form-call-wrapper whatsApp">
	<div class="form-call-btn">
		<i class="fab fa-whatsapp" style="margin:10px"></i>
	</div>
</a>
