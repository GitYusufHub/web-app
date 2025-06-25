<?php $settings = get_settings(); ?>
<meta property = "og: type" content = "product" />
<meta property="og:title" content="<?php
    $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
    if(!empty($header)){ echo "Sonuç Bulunamadı | ".$settings->company_name; }
    elseif($controller=="home/index"){echo $settings->company_name . " | " . $settings->slogan;}
    elseif($controller=="home/news"){ echo isset($news->title)?$news->title:""; }
    elseif($controller=="home/news_list"){ echo  "Blog | ".$settings->company_name; }
    elseif($controller=="home/about_us"){ echo  "Hakkımızda | ".$settings->company_name; }
    elseif($controller=="home/category"){  echo isset($categori->title)?$categori->title:"";  }
    elseif($controller=="home/product_detail"){ echo isset($product->title)?$product->title:""; }
    elseif($controller=="home/pages"){ echo isset($pages->title)?$pages->title:""; }
    elseif($controller=="home/contact"){ echo  "İletişim | ".$settings->company_name; }
    else{ echo  $this->router->fetch_class()."/".$this->router->fetch_method(); }
    ?>"/>  
<meta property="og:description" content="<?php
    $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
        if(!empty($header)){ echo "Sonuç Bulunamadı | ".$settings->company_name; }
        elseif($controller=="home/index"){  echo $settings->about_meta;  }
        elseif($controller=="home/news"){  echo isset($news->meta_description)?$news->meta_description:""; }
        elseif($controller=="home/category"){ echo isset($categori->meta_description)?$categori->meta_description:""; }
        elseif($controller=="home/news_list"){ echo  "Blog | ".$settings->company_name;}
        elseif($controller=="home/about_us"){  echo $settings->about_meta; }
        elseif($controller=="home/product_detail"){echo isset($product->meta_description)?$product->meta_description:""; }
        elseif($controller=="home/pages"){ echo isset($pages->meta_description)?$pages->meta_description:"";  }
        elseif($controller=="home/contact"){
          echo  $settings->company_name." iletişim ".strip_tags($settings->address)." da hizmet vermekteyiz. Tel:".$settings->phone_1." Mail:".$settings->email;
        }        
        else{
          echo  $settings->company_name;
          //echo  $this->router->fetch_class()."/".$this->router->fetch_method();
        }   
    ?>"/>
<meta property="og:url" content="<?php echo base_url($_SERVER['REQUEST_URI']); ?>"> 
<meta property="og:image" content="<?php
        $controller=$this->router->fetch_class()."/".$this->router->fetch_method();
        if(!empty($header)){ }
        elseif($controller=="home/product_detail"){
          if(isset($product->id)) { echo base_url()."/".get_product_cover_image($product->id); }
        }   
        elseif($controller=="home/news"){ echo base_url("upload/$settings->news_1/$news->img_url");}      
        else{//echo  $this->router->fetch_class()."/".$this->router->fetch_method();
        }   
    ?>"/>


