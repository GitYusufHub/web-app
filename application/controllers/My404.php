<?php
 
class My404 extends CI_Controller{
 
   public function __construct() { 
       parent::__construct(); 
   } 
 
   public function index() { 
    $viewData = new stdClass();
    $viewData->viewFolder = "static_v";
    $viewData->subViewFolder = "my404";

      $viewData->header=$this->output->set_status_header('404');
     
      $page_url=ltrim($_SERVER['REQUEST_URI'], "/");

      $this->load->model("redirect_model");
      $url = $this->redirect_model->get(
      array(
          "old_url"     => $page_url,
          "isActive"     =>1
          )
      );
       
          $old_url=($url['old_url'])?$url['old_url']:"";
          $new_url=($url['new_url'])?$url['new_url']:"";
         
          if($old_url==$page_url){
          redirect(base_url($new_url), 'location', 301);
          }else{
         $viewData->url=$page_url;
          $this->load->view("$viewData->viewFolder/$viewData->subViewFolder", $viewData);  
        }

   
   } 
}