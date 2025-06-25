<?php $settings = get_settings(); ?>
<?php
	error_reporting(0);
	if(!empty($images)){
        $adet=substr_count($news->description, '[IMG]');   
	    $resim_adeti=count($images);
		$metin="";
		$say=0;
		$yazi=explode("[IMG]",$news->description);
		$metin.=$yazi[$say];
		if(strstr($news->description, "[IMG]")){
			foreach($images as $image){
                    $url="../upload/images/$image->img_url"; 
                    $bilgiler = getimagesize($url);
                    if($bilgiler[0]>=400){ $stil= 'style="float:none; margin:auto; display:block;"'; 
                    }else{ $stil= 'style="float:;"'; }
                    $img[$say]='<img class="img-fluid" src="'.$url.'" alt="'.$image->title.'" '.$stil.'>';
                    $yazi=explode("[IMG]",$news->description);
                    $metin.=$img[$say]; 
                    $metin.=$yazi[$say+1];
                    $say++;	 
                
			}
		}
	}else{
			$metin=str_replace("[IMG]", "",$news->description);
	}
?>
<?php $yorum=count($comments); ?>
<?php
    $saniyelikKelime=3;
    $kelimeSayisi = count(explode(" ", $news->description));
    $okumaZamani = round($kelimeSayisi / $saniyelikKelime);

    if ($okumaZamani < 60){
        $sure = $okumaZamani. " Saniye";
    }else if ($okumaZamani < 3600){
        $sure = ceil($okumaZamani / 60)." Dakika";
    }else{
        $sure = floor($okumaZamani / 3600). " Saat ";
    }
?>


<section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('')?>assets/img/bg/bread-bg.png">
	<div class="container">
		<div class="ori-breadcrumb-content text-center ul-li">
			<h1><?php echo $news->h1; ?></h1>
			<ul>
				<li><a href="<?php echo base_url('');?>">Anasayfa</a></li>
				<li>Blog </li>
			</ul>
		</div>
	</div>
	<div class="line_animation">
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div> 
	</div>
</section>	

<section id="ori-blog-details" class="ori-blog-details-section position-relative">
	<div class="container">
		<div class="ori-blog-details-content">
			<div class="row">
				<div class="col-lg-8">
					<div class="ori-blog-details-text-wrapper">
						<div class="ori-blog-feed-item">
							<div class="ori-blog-img">
								<img src="<?php  echo base_url("upload/770x400/$news->img_url"); ?>" alt="">
							</div>
							<div class="ori-blog-text pera-content">
								<div class="blog-meta text-uppercase">
									<a class="blog-cate" href="<?php echo base_url('')?>"><i class="fas fa-TİME"></i> Okuma Süresi: <?php echo $sure; ?></a>
									<a class="blog-author" href="<?php echo base_url('')?>"><i class="fas fa-user"></i> Admin</a>
									<a class="blog-date" href="<?php echo base_url('')?>"><i class="fas fa-calendar-alt"></i> <?php
										error_reporting(0);
										setlocale(LC_ALL, 'tr_TR.UTF-8');
										echo strftime('%e %b %Y', strtotime($news->createdAt));
									?></a>
									<a class="blog-comment" href="#"><i class="fas fa-comment"></i> <?php echo $yorum; ?></a>
								</div>
								<h3><?php  echo $news->title; ?></h3>
								<p><?php echo $metin; ?></p>
							</div>
							<br>
							     <?php $this->load->view("news_v/star");?>
								 <br>
							<div class="ori-portfolio-details-tag-share d-flex justify-content-between align-items-center">
								<div class="ori-portfolio-details-tag">
									<a href="blog.html">Tasarım</a>
									<a href="blog.html">teknoloji</a>
									<a href="blog.html">dijital</a>
								</div>
								<div class="ori-portfolio-details-share">
									<a href="#"><i class="fab fa-youtube"></i></a>
									<a href="https://www.facebook.com/sharer.php?u=<?php echo base_url("$news->url/") ?>&t=<?php echo $news->title; ?> yazısı"><i class="fab fa-facebook-f"></i></a>
									<a href="whatsapp://send?text=<?php echo $news->title; ?> adlı yazımızı okumak ister misiniz? <?php echo base_url("$news->url/") ?>"><i class="fab fa-whatsapp"></i></a>
									<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url("$news->url/") ?>&source=<?php echo base_url("$news->url/"); ?>"><i class="fab fa-linkedin"></i></a>
									<a href="http://plus.google.com/share?url=<?php echo base_url("$news->url/") ?>"><i class="fab fa-google"></i></a>
									<a href="https://twitter.com/intent/tweet?text=<?php echo $news->title; ?> yazısı&url=<?php echo base_url("$news->url/") ?>"><i class="fab fa-twitter"></i></a>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="ori-blog-sidebar">
						<div class="ori-blog-widget">
							<div class="search-widget">
								<h3 class="widget-title">Ara</h3>
								<form action="#">
									<input type="text" name="search" placeholder="Ara">
									<button><i class="fal fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="ori-blog-widget">
							<div class="recent-post-widget">
								<h3 class="widget-title">Son Yazılar</h3>							
							<?php $this->load->view("news_v/sidebar");?>     
						
							</div>
							<div class="ori-blog-widget">
								<div class="tag-widget ul-li">
									<h3 class="widget-title">Etiketler</h3>
									<ul>
										<li><a href="blog.html">Tasarım</a></li>
										<li><a href="blog.html">dijital</a></li>
										<li><a href="blog.html">teknoloji</a></li>
										<li><a href="blog.html">Yenilik</a></li>
										<li><a href="blog.html">Seo</a></li>
										<li><a href="blog.html">Startup</a></li>
									</ul>
								</div>
							</div>
							<div class="ori-blog-add-widget">
								<a href="contact.html">
									<img src="<?php echo base_url('')?>assets/img/blog/blg-add.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php $this->load->view("news_v/comment");?>  

		</div>
	</div>
	<div class="line_animation">
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div>
		<div class="line_area"></div> 
	</div>
</section>
