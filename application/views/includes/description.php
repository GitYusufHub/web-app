  <?php $settings = get_settings(); ?>
<meta name="description" content="<?php
    $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
        if(!empty($header)){
            echo "Sonuç Bulunamadı | ".$settings->company_name;
        }
    
        elseif($controller=="home/index"){
             echo $settings->about_meta;
        }
        
        elseif($controller=="home/news"){
            echo isset($news->meta_description)?$news->meta_description:"";
        }
        
        elseif($controller=="home/pages"){
            echo isset($pages->meta_description)?$pages->meta_description:"";
        }
        
        elseif($controller=="home/news_list"){
          echo  "Blog | ".$settings->company_name;
        }
        elseif($controller=="home/about_us"){
          echo $settings->about_meta;
        }
        
        elseif($controller=="home/category"){
            echo isset($categori->meta_description)?$categori->meta_description:"";
        }
        
        elseif($controller=="home/product_detail"){
          echo isset($product->meta_description)?$product->meta_description:"";
          
        }
       
        elseif($controller=="home/contact"){
          echo  $settings->company_name." iletişim ".strip_tags($settings->address)." da hizmet vermekteyiz. Tel:".$settings->phone_1." Mail:".$settings->email;
        }
        
        else{
          echo  $settings->company_name;
          //echo  $this->router->fetch_class()."/".$this->router->fetch_method();
        }   
    ?>">