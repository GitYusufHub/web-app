<?php ob_start("kaynak_presle") ?>
<!doctype html>
<html lang="tr">

<head>
	<?php $this->load->view("includes/head"); ?>
</head>
<body>

	<?php $this->load->view("includes/header"); ?>
	<main class="main">
		<?php $this->load->view("{$viewFolder}/content"); ?>
</main>
	<?php $this->load->view("includes/footer"); ?>
	<?php $this->load->view("includes/include_script"); ?>

</body>
</html>