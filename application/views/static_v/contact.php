<?php $settings = get_settings(); ?>
<?php
/*
$ip = $_SERVER["REMOTE_ADDR"];
$ch = curl_init('http://ip-api.com/json/'.$ip.'?lang=en');                                                                     
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json'                                                                                
));
$result = curl_exec($ch); $data = json_decode($result);//print_r($data);

*/?>

<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('');?>assets/img/bg/bread-bg.png">
            <div class="container">
                <div class="ori-breadcrumb-content text-center" style="max-width: 85%;">
                    <h1 style="font-family: Lato, sans-serif; font-weight: bold; color: #b96125; margin-bottom: 20px;">Contact</h1>
                    <p style="font-family: Lato, sans-serif; font-size: 22px;">If you are looking for a professional partner to take your brand to the next level, Ephnos Creative Agency is waiting for you. Contact us to talk about your projects and discover how we can help. You can easily reach us via our contact information or contact form. Let's create successful projects together!<p>
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

   <div class="ori-google-map">
   <iframe
                           src="<?php $map=text("map"); echo $map->description; ?>"
                           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                           referrerpolicy="no-referrer-when-downgrade">
                           </iframe>
   	</div>

   <section id="ori-contact-form" class="ori-contact-form-section position-relative">
		<div class="container">
			<div class="ori-contact-form-content">
			    
				<div class="row">
					<div class="col-lg-6">
						<div class="ori-contact-form-text-info pera-content">
							<h3>To Contact Us</h3>
							<p>You can contact us by filling out the form.</p>
							<div class="ori-contact-form-item-info">
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center" style="background-color:#b96125;">
										<i class="fas fa-phone-alt"></i>
									</div>
									<div class="info-text pera-content">
										<h4>Phone</h4>
										<a href="tel: +9<?=$settings->phone_1?>">
                              <p>+9<?=$settings->phone_1?></p>
                              <p><a href="tel:<?=$settings->phone_2?>"><?=$settings->phone_2?></a></p>
                              </a>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center">
									<div class="info-icon d-flex align-items-center justify-content-center" style="background-color:#b96125;">
										<i class="fas fa-envelope" ></i>
									</div>
							
									<div class="info-text pera-content">
										<h4>Mail</h4>
										<p><a href="mailto:<?=$settings->email?>">
									<?=$settings->email?></a>
                                 </p>
									</div>
								</div>
								<div class="ori-contact-info d-flex align-items-center" >
									<div class="info-icon d-flex align-items-center justify-content-center" style="background-color:#b96125;">
										<i class="fas fa-map-marker-alt"></i>
                                        
									</div>
                                    <div class="info-text pera-content" style="margin-right:10px;">
										<h4>Address</h4>
                                        <p style="width: 400px;"><?=$settings->address?> </p>
								</div>
								</div>

							</div>
						</div>
					</div>
<div class="col-lg-6">
    <div class="ori-contact-form-wrap">
<form id="form-contact" onsubmit="return false;">
    <label>Name Surname *</label>
    <input type="text" name="adi" placeholder="Name Surname" required>
    
    <label>Email *</label>
    <input type="email" name="mail" placeholder="info@ephnosfilm.com" required>
    
    <label>Phone *</label>
    <input type="tel" name="telefon" placeholder="(0535) 386-6534" required>
    
    <label>Address</label>
    <input type="text" name="adres" placeholder="Address">
    
    <label>Message *</label>
    <textarea name="msg" placeholder="Type your message..." required></textarea>
    
    <button type="submit"  style="background-color:#b96125;">Send</button>
</form>

<style>
    input::placeholder, textarea::placeholder {
        color: #aaa; /* Placeholder rengini daha silik yapmak için */
        opacity: 0.4; /* Placeholder yazının opaklığı (0-1 arasında, daha düşük daha silik) */
    }
</style>
	

        <script>
        $(function(){
            $("#form-contact").submit(function(){
                var serial_data = $(this).serialize();
                
                $.post("<?=base_url()?>gonder",serial_data,function(json){
                    if(json.send_status == 1){
                        $("#form-contact")[0].reset();
                        alert(json.message);
                    }
                    else
                    {
                        alert(json.message);
                    }
                    
                },"json");
            });
        });
        </script>
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
    <?php $banner=banners(6); ?>
    <?php if(!empty($banner)){ ?>
<div class="images" style="display:flex; align-items:center; justify-content: center;">
    <img src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" alt="" style="width: 100%; height: 40%;">
</div>

<section id="" class="" style="padding: 30px; background-color: #292929;">  
    <div class="ori-service-wrapper-11"> 
        <div class="container-fluid"> 
            <div class="ori-service-top-content-1 d-flex justify-content-center align-items-center"> 
                <div class="ori-section-title-1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h2 style="font-family: Lato, serif; font-weight: bold; text-align: center;"><?php echo $banner->title ? $banner->title  : "" ; ?></h2> 
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
