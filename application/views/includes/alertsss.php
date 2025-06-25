<?php
$alert = $this->session->userdata("alert");
if($alert){ ?>
       



<div class='alert alert-<?php echo $alert["type"];?>' style="text-align:center;"> <b><?php echo $alert["title"]; ?> </b> <?php echo $alert["text"]; ?></div>
  
<?php } ?>
<style>

 .alert{
    margin-top:-50px;
    position:hidden;
     opacity:0;
     margin-bottom:0px;
     animation-name: slide;
     animation-duration:10s;
     animation-delay: 0s;
     animation-iteration-count: 1;
 }

@keyframes slide {
    0% { opacity: 0;  transform: scale(0.001); margin-top:0px;}
    10% { opacity: 1; transform: scale(1); }
    95% { opacity: 1; transform: scale(1); margin-top:0px; }
    100% { position:hidden; margin-top:-50px;}
}
 
</style>


