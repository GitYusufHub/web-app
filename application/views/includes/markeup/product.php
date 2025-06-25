<?php $settings = get_settings(); ?>
<?php    $controller=$this->router->fetch_class()."/".$this->router->fetch_method(); ?>
<?php if($controller=="home/index"){ ?>
   
<?php } 

elseif($controller=="home/news"){
    echo isset($news->faq)?$news->faq:""; ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "<?php echo $news->title ?>",
      "image": "<?php echo base_url("upload/800x490/$news->img_url")?>" ,
      "description": "<?php echo str_replace('"', "'", $news->description); ?>",
      "sku": "0446310786",
      "mpn": "925872",
      "brand": {
        "@type": "Thing",
        "name": "<?php echo $settings->company_name;  ?>"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?php echo $settings->company_name;  ?>"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        
        <?php
$oysayisi=count($star);
$puan=0;
foreach($star as $stars){
 $puan=$puan+$stars->star;    
}
$ortalama=$puan/$oysayisi;

?>
        
        
        "ratingValue": "<?php echo $ortalama;?>",
        "reviewCount": "<?php echo $oysayisi;?>"
      },
      "offers": {
        "@type": "Offer",
        "url": "<?php echo base_url("$news->url/"); ?>",
        "priceCurrency": "USD",
        "price": "0",
        "priceValidUntil": "2023-11-05",
        "itemCondition": "https://schema.org/UsedCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "<?php echo $settings->company_name;  ?>"
        }
      }
    }
</script>
    
<?php } 

elseif($controller=="home/product_detail"){
    //echo $product->faq; ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "<?php echo $product->title ?>",
      <?php $img=get_product_cover_image($product->id); ?>
      "image": "<?php echo base_url("$img")?>" ,
      "description": "<?php echo str_replace('"', "'", $product->description); ?>",
      "sku": "0446310786",
      "mpn": "925872",
      "brand": {
        "@type": "Thing",
        "name": "<?php echo $settings->company_name;  ?>"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "5",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "<?php echo $settings->company_name;  ?>"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        
        <?php
$oysayisi=count($star);
$puan=0;
foreach($star as $stars){
 $puan=$puan+$stars->star;    
}
$ortalama=$puan/$oysayisi;

?>
        
        
        "ratingValue": "<?php echo $ortalama;?>",
        "reviewCount": "<?php echo $oysayisi;?>"
      },
      "offers": {
        "@type": "Offer",
        "url": "<?php echo base_url("$product->url/"); ?>",
        "priceCurrency": "USD",
        "price": "0",
        "priceValidUntil": "2023-11-05",
        "itemCondition": "https://schema.org/UsedCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
          "@type": "Organization",
          "name": "<?php echo $settings->company_name;  ?>"
        }
      }
    }
</script>
    
<?php } ?>