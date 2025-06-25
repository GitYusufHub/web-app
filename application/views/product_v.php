<!DOCTYPE html>
<html dir="ltr" lang="tr">
<head>
	<?php $this->load->view("includes/head"); ?>
	

<link rel="stylesheet" href="<?php echo base_url("assets/css/prettyphoto")."/prettyPhoto.css"; ?>" />

</head>
<body class="product-template-default single single-product woocommerce woocommerce-page">
	
	<?php $this->load->view("includes/header"); ?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php $this->load->view("includes/footer"); ?>

	<?php $this->load->view("includes/include_script"); ?>
	<script type="text/javascript" src="<?php echo base_url("assets/");?>js/wc-quantity-increment.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/");?>js/woocommerce/prettyPhoto/jquery.prettyPhoto.init.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/");?>js/woocommerce/prettyPhoto/jquery.prettyPhoto.min.js"></script>
	

</body>
</html>