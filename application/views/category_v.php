<?php ob_start("kaynak_presle"); ?>
<!DOCTYPE html>
<html dir="ltr" lang="tr">
<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body class="archive post-type-archive woocommerce post-type-archive-product has-left-sidebar has-left-product-sidebar">
	<?php $this->load->view("includes/header"); ?>

	<?php $this->load->view("{$viewFolder}/content"); ?>

	<?php $this->load->view("includes/footer"); ?>

	<?php $this->load->view("includes/include_script"); ?>

</body>
</html>