<?php $settings = get_settings(); ?>
 <section class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--wd pull-left">
			<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
			<li class="active">Yorumlar</li>
		</ol>
	</div>
</section>                     
                        
	<?php
    
    //$this->load->view("home_v/services");
    //$this->load->view("home_v/booking");
    $this->load->view("home_v/testimonial");
    $this->load->view("home_v/help");
    ?>
