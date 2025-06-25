<?php $settings = get_settings(); ?>
<title><?php
    $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
    
    if(!empty($header)){
        echo "Sonuç Bulunamadı | ".$settings->company_name;
    }
    
    elseif($controller=="home/index"){
        echo $settings->company_name . " | " . $settings->slogan;
    }

    elseif($controller=="home/category"){
        
        if(!empty($categori->site_title)){
         echo $categori->site_title;
        }elseif(empty($categori->site_title)){
            echo $categori->title . " | " . $settings->slogan;
        }else{
         echo  isset($categori->title)?$categori->title: "Sonuç Bulunamadı | ".$settings->company_name;
        }
    }
    elseif($controller=="home/product_detail"){
      echo  isset($product->title)?$product->title: "Sonuç Bulunamadı | ".$settings->company_name;
    } 
    elseif($controller=="home/contact"){
      echo  "İletişim | ".$settings->company_name;
    }
    
    elseif($controller=="home/sorgula"){
      echo $this->input->get("s")." Arama Sonuçları | ". $settings->company_name;
    }
    elseif($controller=="home/contact"){
      echo  "İletişim | ".$settings->company_name;
    }
 	elseif($controller=="home/service_list"){
      echo  "Hizmetler | ".$settings->company_name;
    }
    elseif($controller=="home/referanslar"){
      echo  "Referanslar | ".$settings->company_name;
    }
    elseif($controller=="home/urunler"){
      echo  "Ürünler | ".$settings->company_name;
    }
    elseif($controller=="home/firmamiz"){
      echo  "Firmamız | ".$settings->company_name;
    }
    
       
    elseif($controller=="home/news"){
      //echo isset($news->title)?$news->title:"";
      if(strlen($news->title)<=47){
      echo $news->title." | ".$settings->phone_1;
      }else{
      echo isset($news->title)?$news->title:"";
      }
    }
  
    
    elseif($controller=="home/news_list"){
      echo  "Blog | ".$settings->company_name;
    }

    elseif($controller=="home/about_us"){
      echo  "Hakkımızda | ".$settings->company_name;
    }

    elseif($controller=="my404"){
      echo  "Sonuç Bulunamadı !";
    }

    else{
      echo  $this->router->fetch_class()."/".$this->router->fetch_method();
    }
    
    ?></title>