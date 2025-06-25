	<?php $settings=get_settings();?>
	<!--====== Start Hero Section ======-->
	<section class="hero-area">
        <div class="breadcrumbs-area bg_cover" style="background-image: url(<?php echo base_url(); ?>assets/images/bg/breadcrumbs-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-title text-center">
                            <h1 class="page-title"><?php echo !empty($categori->h1)?$categori->h1:$categori->title; ?></h1>
                            <ul class="breadcrumbs-link d-flex justify-content-center" data-aos="fade-up">
							<li>
								<a href="<?php echo base_url(); ?>">Anasayfa</a>
								<span class="go-page"></span>
							</li>
							<?php if($categori->top_cat_id==0){ ?>
							<li class="active">
								<span><?php echo $categori->title; ?></span>
							</li>
							<?php } else { ?> 
							<li class="active">
							    <?php $catim=cat_title_url($categori->top_cat_id)?>
								<a href="<?php echo base_url("$catim->url/"); ?>"><span><?php echo $catim->title; ?></span></a>
								
							</li>
							<li class="active">
								<span><?php echo $categori->title; ?></span>
							</li>
							<?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->

   
    <section class="products-area pt-130 pb-80">
        <div class="container">
            <div class="row">
				<?php $this->load->view("category_v/sidebar"); ?>
                <div class="col-lg-9">
                    <div class="product-item-area">
                        <div class="row">
						<?php if(!empty($products)) { foreach($products as $product) { ?>
								<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
									<div class="product-item product-item-two mb-40">
										<div class="product-img">
											<img style="margin:auto; display:flex;align-items: center;"src="<?php echo base_url()."small/".get_product_cover_image($product->id);?>" alt="<?php echo $product->title; ?>">
											<div class="product-overlay">
												<div class="product-meta">
													<a href="<?php echo base_url()."".get_product_cover_image($product->id);?>" target="_self" title="<?php echo $product->title; ?>"
														class="icon img-popup"><i class="fas fa-eye"></i></a>
													<!--<a href="cart.html" target="_self" title="Add to cart"
														class="icon cart-btn"><i class="fas fa-shopping-cart"></i></a>
													<a href="login.html" target="_self" title="Add to wishlist"
														class="icon wishlist-btn"><i class="fas fa-heart"></i></a>-->
												</div>
											</div>
										</div>
										<div class="product-info text-center">
											<a href="#yorumlar"><ul class="rating">
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
												<li><i class="fas fa-star"></i></li>
											</ul></a>
											<span><b><a href="#yorumlar">Yorum Sayısı:<?php echo product_puan($product->id);?>  Puan:<?php echo product_puan_rate($product->id);?></b></span></a>
											<h3 class="title"><a href="tel:<?php echo $settings->phone_1; ?>"><?php echo $product->title; ?></a></h3>
											<!--<span class="price">$35 <span class="pre-price">$45.55</span></span>-->
											<a href="tel:<?php echo $settings->phone_1; ?>"class="main-btn" target="_self" title="<?php echo $product->title; ?>">Satın Al Veya Kirala</a>

											
										</div>
									</div>
								</div>
 
							<?php }}else{ echo "<p>Henüz bu kategoride bir ürün bulunmuyor.</p>";} ?>
                            
                           
                        </div>
                        <nav class="pagination-nav mb-40" data-aos="fade-up">
                            <ul class="pagination justify-content-center">
                                <!--<li class="page-item">
                                    <a class="page-link" href="blogs.html" target="_self" aria-label="Previous">
                                        <i class="far fa-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="blogs.html" target="_self">1</a></li>
                                <li class="page-item"><a class="page-link" href="blogs.html" target="_self">2</a></li>
                                <li class="page-item"><a class="page-link" href="blogs.html" target="_self">3</a></li>
                                <li class="page-item"><a class="page-link" href="blogs.html" target="_self">4</a></li>
                                <li class="page-item"><a class="page-link" href="blogs.html" target="_self">30</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="blogs.html" target="_self" aria-label="Next">
                                        <i class="far fa-angle-right"></i>
                                    </a>
                                </li>-->
								<style>

										.page-numbers a {
											font-family: 'PoppinsSemiBold';
											font-size: 16px;
											color: #fff;
											padding: 5px 10px;
											background: #ffc037;
											border-radius: 10px;
											font-weight: bold;
											margin: 5px;
										}
										.page-numbers a:hover {
											
											color: #000;
											
										}
										
									    .page-numbers strong{
									        font-family: PoppinsSemiBold;
											font-size: 16px;
											padding: 5px 15px;
											margin: 5px;
											color: #fff;
											border-radius: 10px;
											background: #73d20c;									        
									    }
									</style>
									<?php echo $links; ?>
									
                            </ul>
                        </nav>
						<nav class="woocommerce-pagination pull-right">
							<ul class="page-numbers">
								<?php echo $links; ?>
							</ul>
						</nav>
						
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Product Section ======-->

	<section class="products-details-section pb-50">
        <div class="container">                  
            <div class="row">
                <div class="col-lg-12">
                    <div class="description-wrapper" data-aos="fade-up">
                        <div class="description-tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reviews" title="Reviews">Yorumlar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-30">
                            <div id="yorumlar" class="tab-pane fade show active">
                                <div class="shop-review-area">
                                    <h4 class="title">Sizden Gelen Yorumlar</h4>
									<?php foreach($comments as $comment){ ?>
                                    <div class="shop-review-user d-flex">
                                        
                                        <div class="content">
                                            <ul class="rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
												<span style="font-weight:500"><?php echo ucfirst($comment->message); ?></span><br>
												<span class="date"><span><?php echo $comment->name; ?></span> | <?php tarih($comment->createdAt);?> <b> | <i class="fa fa-check-circle"></i> <?php $dizi=array("Satın Aldı","Kiraladı");$sayi=rand(0,1); echo $dizi[$sayi]; ?></b></span>
                                            	
                                            </ul>
                                            
                                        </div>
                                    </div>
									<?php } ?>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
                <div class="col-lg-12">
                    <div class="description-wrapper" data-aos="fade-up">
                        <div class="description-tabs">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#aciklama" title="Açıklama">Ürün Açıklaması</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-30">
                            <div id="reviews" class="tab-pane fade show active">
								<?php echo $categori->description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


							
						
						