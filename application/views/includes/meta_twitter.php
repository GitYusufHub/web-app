<?php $settings=get_settings(); ?>
<meta name="twitter:card" content="<?php echo $settings->twitter; ?>" />


<meta property="twitter:title" content="<?php
    $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
    
    if(!empty($header)){
       echo "Sonuç Bulunamadı | ".$settings->company_name;
    }
    
    elseif($controller=="home/index"){
        echo $settings->company_name . " | " . $settings->slogan;
    }
    
    elseif($controller=="home/news"){
        echo isset($news->title)?$news->title:"";
    }
    
    elseif($controller=="home/news_list"){
      echo  "Haberler | ".$settings->company_name;
    }
     elseif($controller=="home/category"){
       echo isset($categori->title)?$categori->title:"";
    }
    elseif($controller=="home/about_us"){
      echo  "Hakkımızda | ".$settings->company_name;
    }
    
    elseif($controller=="home/product_detail"){
      echo isset($product->title)?$product->title:"";
    }
    
    elseif($controller=="home/pages"){
       echo isset($pages->title)?$pages->title:"";
    }
   
    elseif($controller=="home/contact"){
      echo  "İletişim | ".$settings->company_name;
    }
    
    else{
      echo  $this->router->fetch_class()."/".$this->router->fetch_method();
    }
    
    ?>"/>  

<meta property="twitter:description" content="<?php
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
        
        elseif($controller=="home/category"){
           echo isset($categori->meta_description)?$categori->meta_description:"";
        }
        
        elseif($controller=="home/news_list"){
          echo  "Blog | ".$settings->company_name;
        }
        elseif($controller=="home/about_us"){
            echo $settings->about_meta;
        }
        

        elseif($controller=="home/product_detail"){
          echo isset($product->meta_description)?$product->meta_description:"";
        }
        
        elseif($controller=="home/pages"){
          echo isset($pages->meta_description)?$pages->meta_description:"";
          
        }
       
        elseif($controller=="home/contact"){
          echo  $settings->company_name." iletişim ".strip_tags($settings->address)." da hizmet vermekteyiz. Tel:".$settings->phone_1." Mail:".$settings->email;
        }
        
        else{
          echo  $this->router->fetch_class()."/".$this->router->fetch_method();
        }   
    ?>"/>

<meta property="twitter:url" content="<?php echo base_url($_SERVER['REQUEST_URI']); ?>; katg=Ürün, Hizmet" >  
<meta name="twitter:image" content="<?php echo base_url("upload/$settings->logo"); ?>"/>
