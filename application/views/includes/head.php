<?php $settings = get_settings(); ?>

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="publisher" content="<?php echo $settings->company_name;?>">
<meta name="author" content="Yusuf 	Demir">
<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url("upload/$settings->favicon"); ?>">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
<link rel="canonical" href="<?php echo base_url($_SERVER['REQUEST_URI']); ?>" />
<?php $this->load->view("includes/title.php"); ?>
<?php $this->load->view("includes/description.php"); ?>
<?php $this->load->view("includes/noindex.php"); ?>
<?php $this->load->view("includes/meta_og.php"); ?>
<?php $this->load->view("includes/meta_twitter.php"); ?>

<?php $this->load->view("includes/markeup"); ?>
<?php $this->load->view("includes/include_style"); ?>
<?php echo $settings->pixel;?>