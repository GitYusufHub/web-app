<style>
.banner_3:hover{
	box-shadow: 2px 2px 20px #0b8cfb;
	opacity:0.9;
}
</style>
<div class="container" style="background-color:#fff; padding-bottom: 20px;">
    
    <?php $banner=banners(1); ?>
    <?php if(!empty($banner)){ ?>
        <div class=" col-sm-4">
			<a href="<?php echo $banner->button_url ? base_url("$banner->button_url") : ""; ?>">
				<img class="banner_3" src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" width="370" height="180" 
				alt="<?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?>" 
			title="<?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?>">
			</a>       
        </div>
    <?php } ?>


    <?php $banner=banners(5); ?>
    <?php if(!empty($banner)){ ?>
        <div class=" col-sm-4">
			<a href="<?php echo $banner->button_url ? base_url("$banner->button_url") : ""; ?>">
				<img class="banner_3" src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" width="370" height="180" 
				alt="<?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?>" 
			title="<?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?>">
			</a>       
        </div>
    <?php } ?>


</div>
