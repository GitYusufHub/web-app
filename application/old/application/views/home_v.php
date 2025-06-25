<?php //ob_start("kaynak_presle") ?>
<!doctype html>
<html lang="tr">

<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body class="body-wrapper">

	<?php $this->load->view("includes/header"); ?>
		<?php $this->load->view("{$viewFolder}/content"); ?>
	<?php $this->load->view("includes/footer"); ?>
	<?php $this->load->view("includes/include_script"); ?>

</body>
</html>