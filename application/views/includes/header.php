<?php $settings = get_settings(); ?>
<?php $url=ltrim($_SERVER['REQUEST_URI'], "/");?>
			
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
<?php $this->load->view("includes/alert.php"); ?>
<!--====== End Preloader ======-->
    <!--====== Start header Section ======-->
<?php $settings = get_settings(); ?>

<body class="ori-digital-studio">
	
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>

	

	<header id="ori-header" class="ori-header-section header-style-one">
		<style>
			#ori-header{


			}
		</style>
		<div class="ori-header-content-area">
			<div class="ori-header-content d-flex align-items-center justify-content-between">
				<div class="brand-logo">
					<a href="<?=base_url()?>">  <img style="width: 250px;" src="<?php echo base_url("upload/$settings->logo"); ?>" alt="<?php echo $settings->company_name; ?>" style="width:250px;height:46px;"></a>
				</div>
				<div class="ori-main-navigation-area">
					<nav class="ori-main-navigation clearfix ul-li">
					  <ul>
                            <?php 
                            $menu = get_menu();
                            foreach($menu as $menus){
                                $alt_menu = get_alt_menu($menus->id);
                                if(!empty($alt_menu)){ ?>
                                    <li class="dropdown">
                                        <a id="text" href="<?php echo base_url("$menus->url/"); ?>"><?php echo $menus->title; ?></a>
                                  <ul class="dropdown-menu clearfix">
                                            <?php foreach($alt_menu as $alt_menus) { ?>
                                                <li><a id="text" href="<?php echo base_url("$alt_menus->url"); ?>/" target="_blank"><?php echo $alt_menus->title; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php } else { ?>
                                    <li><a id="text" href="<?php echo base_url("$menus->url/"); ?>"><?php echo $menus->title; ?></a></li>
                                <?php } 
                            } ?>
							<!--	<select id="language-select">
									<option value="tr|en">Türkçeden İngilizceye</option>
									<option value="en|tr">İngilizceden Türkçeye</option>
								</select>
								<button id="translate-button">Çevir</button>

								<script>
									document.getElementById('translate-button').addEventListener('click', function() {
										const textToTranslate = document.getElementById('text').innerText;
										const selectedLanguage = document.getElementById('language-select').value;
										const url = `https://api.mymemory.translated.net/get?q=${encodeURIComponent(textToTranslate)}&langpair=${selectedLanguage}`;

										fetch(url)
										.then(response => response.json())
										.then(data => {
											if (data.responseData && data.responseData.translatedText) {
												document.getElementById('text').innerText = data.responseData.translatedText;
											}
										})
										.catch(error => {
											console.error('Çeviri sırasında bir hata oluştu:', error);
										});
									});
								</script> -->
                        </ul>
					</nav>
				</div>
				<div class="ori-header-sidebar-search d-flex align-items-center">
					<div class="social-icons" style="font-size:25px;">
									<?php if(!empty($settings->instagram)){ ?>
										<a  target="_blank" href="<?php echo $settings->instagram; ?>" style="margin:10px;"><i class="fa-brands fa-instagram" style="color:white;"></i></a>
									<?php } ?>


									<?php if(!empty($settings->linkedin)){ ?>
										<a  target="_blank" href="<?php echo $settings->linkedin; ?>" style="margin:5px;"><i class="fa-brands fa-linkedin" style="color:white;"></i></a>
									<?php } ?>

									<?php if(!empty($settings->youtube)){ ?>
										<a target="_blank" href="<?php echo $settings->youtube; ?>" style="margin:10px;"><i class="fa-brands fa-youtube" style="color:white;"></i></a>
									<?php } ?>
					</div>

					<style>
						@media (max-width: 768px) {
							.social-icons {
								display: none;
							}
						}

						@media screen and (max-width: 991px) {
							.ori-header-section.sticky-on {
								padding: 35px 15px;
							}
						}

						@media screen and (max-width: 991px) {
							.ori-header-section {
								padding: 35px 15px;
							}
						}
					</style>
				</div>
			</div>
			<div class="mobile_menu position-relative">
				<div class="mobile_menu_button open_mobile_menu">
					<i class="fal fa-bars" style="margin-top:25px;"></i>
				</div>
				<div class="mobile_menu_wrap">
					<div class="mobile_menu_overlay open_mobile_menu"></div>
					<div class="mobile_menu_content">
						<div class="mobile_menu_close open_mobile_menu">
							<i class="fal fa-times"></i>
						</div>
					<br>
						<div class="m-brand-logo">
							<a  href="!#"><img src="<?php echo base_url("upload/$settings->logo"); ?>" alt="" style="pading-top:30px;"></a>
						</div>
					<nav class="mobile-main-navigation  clearfix ul-li">
			 <ul id="m-main-nav" class="nav navbar-nav clearfix">
                    <?php 
                    $menu = get_menu();
                    foreach($menu as $menus) {
                        $alt_menu = get_alt_menu($menus->id);
                        if(!empty($alt_menu)) { ?>
                            <li class="dropdown">
                                <a href="<?php echo base_url("$menus->url/"); ?>"><?php echo $menus->title; ?></a>
                                <ul class="dropdown-menu clearfix">
                                    <?php foreach($alt_menu as $alt_menus) { ?>
                                        <li><a href="<?php echo base_url("$alt_menus->url"); ?>/" target="_blank"><?php echo $alt_menus->title; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url("$menus->url/"); ?>"><?php echo $menus->title; ?></a></li>
                        <?php } 
                    } ?>
                </ul>

				<div class="social-iconss" style="margin-top:20px;">
									<?php if(!empty($settings->instagram)){ ?>
										<a  target="_blank" href="<?php echo $settings->instagram; ?>" style="margin-right:10px;"><i class="fa-brands fa-instagram"></i></a>
									<?php } ?>

									<?php if(!empty($settings->facebook)){ ?>
										<a target="_blank" href="<?php echo $settings->facebook; ?>" style="margin:5px;"><i class="fa-brands fa-facebook"></i></a>
									<?php } ?>

									<?php if(!empty($settings->twitter)){ ?>
										<a  target="_blank" href="<?php echo $settings->twitter; ?>" style="margin:5px;"><i class="fa-brands fa-x-twitter"></i></a>
									<?php } ?>

									<?php if(!empty($settings->youtube)){ ?>
										<a target="_blank" href="<?php echo $settings->youtube; ?>" style="margin:10px;"><i class="fa-brands fa-youtube"></i></a>
									<?php } ?>
					</div>


					</nav>
					</div>
				</div>
				<!-- /Mobile-Menu -->
			</div>
		</div>
	</header><!-- /header -->

	<!-- Sidebar sidebar Item -->
	<div class="xs-sidebar-group info-group">
		<div class="xs-overlay xs-bg-black">
			<div class="row loader-area">
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
				<div class="col-3 preloader-wrap">
					<div class="loader-bg"></div>
				</div>
			</div>
		</div>
		<div class="xs-sidebar-widget">
			<div class="sidebar-widget-container">
				<div class="widget-heading">
					<a href="#" class="close-side-widget">
						X
					</a>
				</div>
				<div class="sidebar-textwidget">

					<div class="sidebar-info-contents headline pera-content">
						<div class="content-inner">
							<div class="logo">
								<a href="index-1.html"><img src="assets/img/logo/logo1.png" alt=""></a>
							</div>
							<div class="content-box">
								<h5>Adress</h5>
								<p class="text"> <?php echo $settings->address; ?></p>
							</div>
							<div class="gallery-box ul-li">
								<h5>İletişim</h5>
							<p class="text"><a href="mailto:<?php echo $settings->email; ?>"><?php echo $settings->email; ?></a></p>
							<p class="text"><a href="tel:+9<?php echo $settings->phone_1; ?>"><?php echo $settings->phone_1; ?></a></p>
							
		
							</div>
							<div class="content-box">
								<h5>Sosyal medya </h5>
								<ul class="social-box">
								  <?php if(!empty($settings->facebook)){ ?>
								<li>	<a target="_blank" href="<?php echo $settings->facebook; ?>"><i class="fab fa-facebook-f"></i></a></li>
									<?php } ?>
									<?php if(!empty($settings->twitter)){ ?>
								<li>	<a target="_blank" href="<?php echo $settings->twitter; ?>"><i class="fab fa-twitter"></i></a></li>
									<?php } ?>
									<?php if(!empty($settings->instagram)){ ?>
								<li>	<a target="_blank" href="<?php echo $settings->instagram; ?>"><i class="fab fa-instagram"></i></a></li>
									<?php } ?>
									<?php if(!empty($settings->linkedin)){ ?>
								<li>	<a target="_blank" href="<?php echo $settings->linkedin; ?>"><i class="fab fa-linkedin-in"></i></a></li>
									<?php } ?>
									<?php if(!empty($settings->pinterest)){ ?>
								<li>		<a target="_blank" href="<?php echo $settings->pinterest; ?>"><i class="fab fa-pinterest"></i></a></li>
									<?php } ?>
									<?php if(!empty($settings->youtube)){ ?>
								<li>		<a target="_blank" href="<?php echo $settings->youtube; ?>"><i class="fab fa-youtube"></i></a></li>
									<?php } ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

















