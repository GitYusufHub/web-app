<?php    $controller=$this->router->fetch_class()."/".$this->router->fetch_method(); ?>
<?php if($controller=="home/index"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  }
 ]
}
</script>
<?php }elseif($controller=="home/contact"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("iletisim/"); ?>",
     "name": "İletişim"
   }
  }
 ]
}
</script>
<?php }elseif($controller=="home/about_us"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("hakkimizda/"); ?>",
     "name": "Hakkımızda"
   }
  }
 ]
}
</script>

<?php }elseif($controller=="home/news_list"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("blog/"); ?>",
     "name": "Blog"
   }
  }
 ]
}
</script>
<?php }elseif($controller=="home/news"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("$news->url/"); ?>",
     "name": "<?php echo $news->title; ?>"
   }
  }
 ]
}
</script>

<?php }elseif($controller=="home/category"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("$categori->url/"); ?>",
     "name": "<?php echo $categori->title; ?>"
   }
  }
 ]
}
</script>
<?php }elseif($controller=="home/product_detail"){ ?>

<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url().$categori->url; ?>/",
     "name": "<?php echo $categori->title; ?>"
   }
  },
  {
   "@type": "ListItem",
  "position": 3,
  "item":
   {
     "@id": "<?php echo base_url("$product->url/"); ?>",
     "name": "<?php echo $product->title; ?>"
   }
  }
 ]
}
</script>
<?php }elseif($controller=="home/pages"){ ?>
    <script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>",
    "name": "Anasayfa"
    }
  },
  {
   "@type": "ListItem",
  "position": 2,
  "item":
   {
     "@id": "<?php echo base_url("$pages->url/"); ?>",
     "name": "<?php echo $pages->title; ?>"
   }
  }
 ]
}
</script>

<?php }else{ ?>
<script type="application/ld+json">
{
 "@context": "http://schema.org",
 "@type": "BreadcrumbList",
 "itemListElement":
 [
  {
   "@type": "ListItem",
   "position": 1,
   "item":
   {
    "@id": "<?php echo base_url(); ?>/",
    "name": "Anasayfa"
    }
  }
 ]
}
</script>
<?php } ?>