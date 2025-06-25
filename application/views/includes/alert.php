<?php $alert = $this->session->userdata("alert"); if($alert){ ?>
    
<style>
.alert{
   margin-top: 150px!important;
   top:150px;
   padding: 20px;
   margin-left: 35%;
   margin-right: 35%;
   border-radius: 5px;
   width: 30%;
   position: absolute;
   z-index: 9;
   opacity:1;
   font-size: 20px;
   box-shadow:5px 5px 5px #111;
   border:2px solid #fed700;
   animation-name: slide;
   animation-duration:8s;
   animation-delay: 0s;
   animation-iteration-count: 1;
   
}
.alert-error {
   background-color: bisque;
   border: 2px solid #f50000;
   color:red;
   
}

@keyframes slide {
   0% { opacity: 0;  transform: scale(0.001); margin-top:0px;}
   5% { opacity: 1; transform: scale(1); }
   95% { opacity: 1; transform: scale(1); margin-top:0px; }
   100% { position:hidden; margin-top:-50px;}
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

   .alert{
   height: auto;
   margin-top: 150px!important;
   display:block;
   align-items:center;
   padding: 20px;
   margin-left: 5%;
   margin-right: 5%;
   border-radius: 5px;
   width: 90%;
   position: absolute;
   z-index: 9;
   opacity:0;
   font-size: 20px;
   box-shadow:5px 5px 5px #111;
   border:2px solid #fed700;    
}
}

</style>
<div class='alert alert-<?php echo $alert["type"];?>' style="text-align:center;"> 
<?php if($alert["type"]=="success") { ?> 
   <i class="fa fa-check"></i>
    <?php }else{?>
        <i class="fa fa-check-circle"></i>
        <?php } ?>
<b><?php echo $alert["title"]; ?> </b><br>
<p> <?php echo $alert["text"]; ?></p></div>
  

<?php } ?>