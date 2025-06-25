	<?php $settings=get_settings();?>
	<!--====== Start Hero Section ======-->
	<section class="hero-area">
        <div class="breadcrumbs-area bg_cover" style="background-image: url(<?php echo base_url(); ?>assets/images/bg/breadcrumbs-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-title text-center">
                            <h1 class="page-title">Ürünler</h1>
                            <ul class="breadcrumbs-link d-flex justify-content-center" data-aos="fade-up">
                                <li>
                                    <a href="<?php echo base_url(); ?>">Anasayfa</a>
                                    <span class="go-page"></span>
                                </li>
                                <li class="active">
                                    <span>Ürünler</span>
                                </li>
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


							
						
						