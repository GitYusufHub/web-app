<?php $this->load->view("includes/markeup/breadcrumb"); ?>
<?php $this->load->view("includes/markeup/organization"); ?>
<?php $this->load->view("includes/markeup/product"); ?>

<?php $settings = get_settings(); ?>

<?php    $controller=$this->router->fetch_class()."/".$this->router->fetch_method(); ?>
<?php if($controller=="home/index"){ ?>

<?php }elseif($controller=="home/contact"){ ?>

<?php }else{ ?>

<?php } ?>
