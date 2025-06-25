<style>
   		.product-detail{
				box-shadow: 0px 0px 10px #a48db130;
			border-radius: 15px!important;
			border:none!important;
		}
		.product-img-detail{
				box-shadow: 0px 0px 10px #a48db130;
			border-radius: 15px!important;
			border:none!important;
		}

		.single-product .product_detail .slider_img_productd .product-images .slider .slick-list .slick-track 
		.slick-slide .images, .single-product .product_detail .slider_img_productd .product-images .slider
			.slick-list .slick-track .slick-slide .thumbnail-wrapper {
			border:none!important;
		}
		.tab-pane p{
			font-size:15px!important;
		}

		.woocommerce div.product form.cart div.quantity {
			margin: 0px;
			width: 18%;
		}
		.form-control{
			margin-top:10px;
			width:auto!important;
		}
		.sepete-ekle{
		width: 50%;
		background-color: darkorange;
		padding: 10px;
		font-size: 18px;
		color: #fff;
		border: none;
		float: right; font-weight:bold;
		}
		.sepete-ekle-mobil{

			width: 100%;
		background-color: darkorange;
		padding: 10px;
		font-size: 18px;
		color: #fff;
		border: none;
		float: right; font-weight:bold;
		bottom:0px;
		position: fixed;
		z-index: 9;
		margin-left: -20px;
			}
</style>
<!--====== Start Hero Section ======-->
<section class="hero-area">
        <div class="breadcrumbs-area bg_cover" style="background-image: url(assets/images/bg/breadcrumbs-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="page-title text-center">
								<?php $categori=category_title($product->category_id); ?>
							   	<?php $categori2=category_title($product->alt_category_id); ?>
							  
                            <h1 data-aos="fade-up"><?php echo $product->h1; ?></h1>
                            <ul class="breadcrumbs-link d-flex justify-content-center" data-aos="fade-up">
                              
								<li><a href="<?php echo base_url();?>">Anasayfa</a></li>
								<li><a href="<?php echo base_url().$categori->url; ?>/"><?php echo $categori->title; ?></a></li>
								<?php  if(!empty($categori2)){ ?><li><a href="<?php echo base_url().$categori2->url; ?>/"><?php echo  $categori2->title; ?></a></li><?php } ?>
								
                                <li class="active"><?php echo $product->h1; ?></li>
								
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Hero Section ======-->

    <!--====== Start Products details Section ======-->
    <section class="products-details-section pt-130 pb-50">
        <div class="container">
            <div class="products-details-wrapper mb-60">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="products-gallery-wrap" data-aos="fade-up">
                            <div class="products-big-slider mb-20">
                                <div class="product-img">
                                    <a href="assets/images/shop/product-details-01.jpg" target="_self" title="Image"
                                        class="img-popup"><img src="assets/images/shop/product-details-01.jpg"
                                            alt="Product Image"></a>
                                </div>
                                <div class="product-img">
                                    <a href="assets/images/shop/product-details-02.jpg" target="_self" title="Image"
                                        class="img-popup"><img src="assets/images/shop/product-details-02.jpg"
                                            alt="Product Image"></a>
                                </div>
                                <div class="product-img">
                                    <a href="assets/images/shop/product-details-03.jpg" target="_self" title="Image"
                                        class="img-popup"><img src="assets/images/shop/product-details-03.jpg"
                                            alt="Product Image"></a>
                                </div>
                                <div class="product-img">
                                    <a href="assets/images/shop/product-details-02.jpg" target="_self" title="Image"
                                        class="img-popup"><img src="assets/images/shop/product-details-02.jpg"
                                            alt="Product Image"></a>
                                </div>
                            </div>
                            <div class="products-thumb-slider">
                                <div class="product-img">
                                    <img src="assets/images/shop/details-thumb-01.jpg" alt="product thumb">
                                </div>
                                <div class="product-img">
                                    <img src="assets/images/shop/details-thumb-02.jpg" alt="product thumb">
                                </div>
                                <div class="product-img">
                                    <img src="assets/images/shop/details-thumb-03.jpg" alt="product thumb">
                                </div>
                                <div class="product-img">
                                    <img src="assets/images/shop/details-thumb-02.jpg" alt="product thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-info" data-aos="fade-up">
                            <h2>Smart Man Jacket</h2>
                            <ul class="rating">
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                                <li><i class="fas fa-star"></i></li>
                            </ul>
                            <span class="price">$89.00 <span class="pre-price">$120</span></span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing is Industrial thingsed do eiusmod
                                tempor incididunt ut labore doloremagna aliqua. Uts up enim ad minim veniam quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ecommodo consequat. Duis aute irure
                                dolor in reprehend voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident.</p>
                            <div class="button mb-20">
                                <a href="cart.html" target="_self" title="Add to cart" class="main-btn">Add To Cart</a>
                                <a href="checkout.html" target="_self" title="Order Now" class="main-btn">Order Now</a>
                            </div>
                            <ul class="social-link mb-20">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="https://linkedin.com/" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="https://pinterest.com/" target="_blank"><i
                                            class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                            <ul class="product-tags">
                                <li><span>Category:</span><a href="shop.html" target="_self"
                                        title="Accessories">Accessories</a></li>
                            </ul>
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
                                    <a class="nav-link active" data-toggle="tab" href="#description"
                                        title="Description">Description</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#reviews" title="Reviews">Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content mt-30">
                            <div id="description" class="tab-pane fade show active">
                                <div class="description-content-box">
                                    <p>Sorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur xcepteur sint occaecat cupidatat non proident, sunt.</p>
                                </div>
                            </div>
                            <div id="reviews" class="tab-pane fade">
                                <div class="shop-review-area">
                                    <h4 class="title">Restaurant Website</h4>
                                    <div class="shop-review-user d-flex">
                                        <div class="thumb">
                                            <img src="assets/images/person.png" alt="Thumb">
                                        </div>
                                        <div class="content">
                                            <ul class="rating">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                            <span class="date"><span>User</span> 27-09-2021</span>
                                            <p>Great product with great features</p>
                                        </div>
                                    </div>
                                    <div class="shop-review-form">
                                        <form>
                                            <div class="form_group">
                                                <label>Comment *</label>
                                                <textarea class="form_control" placeholder="Comment"
                                                    name="comment"></textarea>
                                            </div>
                                            <div class="form_group">
                                                <label>Rating *</label>
                                                <ul class="rating mb-20">
                                                    <li>
                                                        <span class="fas fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </li>
                                                    <li>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                        <span class="fas fa-star"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form_group">
                                                <button class="main-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Products details Section ======-->








		<div class="container">
			<div class="row">
				<div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
					<div id="container">
						<div id="content" role="main">
							<div class="single-product clearfix">
							   <div id="product-01" class="post-01 product type-product status-publish has-post-thumbnail product_cat-batteries-chargers product_cat-cameras-camcorders product_cat-mp3-player-accessories product_cat-television-cameras-accessories first instock shipping-taxable purchasable product-type-variable has-default-attributes has-children">
									<div class="product_detail row">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
											<div class="slider_img_productd product-img-detail">
												<!-- woocommerce_show_product_images -->
												<div id="product_img_01" class="product-images loading" data-rtl="true">
													<div class="product-images-container clearfix thumbnail-bottom">
														<!-- Image Slider -->
														<div class="slider product-responsive">
    												<?php if($product_images){
    												foreach($product_images as $images){ ?>
    															<div class="item-img-slider">
    																<div class="images">
    																	<a href="<?php echo base_url()."big/$images->img_url";?>" data-rel="prettyPhoto[product-gallery]" class="zoom resimizlemeurl">
    																		<img 
    																		 src="<?php echo base_url("$images->img_url");?>" style="max-height:600px; width:auto!important;"
    																		class="attachment-shop_single size-shop_single resimizlemeimg" alt="<?php echo $product->title; ?>" 
    																		>
    																	</a>					
    																	
    																</div>
    															</div>
    														<?php }}else{ ?> 
    															<div class="item-img-slider">
    																<div class="images">
    																	<a href="<?php echo base_url()."big/".get_product_cover_image($product->id);?>" data-rel="prettyPhoto[product-gallery]" class="zoom">
    																		<img src="<?php echo base_url(get_product_cover_image($product->id));?>" height="600"
    																		class="attachment-shop_single size-shop_single" alt="<?php echo $product->title; ?>" 
    																		>
    																	</a>					
    																	
    																</div>
    															</div>
    														
    														<?php } ?>
														</div>
													
														
													<!-- Thumbnail Slider -->
													<div class="slider product-responsive-thumbnail" id="product_thumbnail_427" >
														<?php if($product_images){
														foreach($product_images as $images){ ?>	
															<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img src="<?php echo base_url("upload/small/$images->img_url");?>" width="180" height="180" class="attachment-shop_thumbnail size-shop_thumbnail" alt="<?php echo $product->title; ?>" srcset="<?php echo base_url("upload/small/$images->img_url");?> 180w, <?php echo base_url("upload/small/$images->img_url");?> 150w, <?php echo base_url("upload/small/$images->img_url");?> 300w, <?php echo base_url("upload/small/$images->img_url");?> 600w" sizes="(max-width: 180px) 100vw, 180px">			
																</div>
															</div>
														<?php }}else{ ?>
														<div class="item-thumbnail-product">
																<div class="thumbnail-wrapper">
																	<img src="<?php echo base_url(get_product_cover_image($product->id));?>" width="180" height="180"
																	class="attachment-shop_thumbnail size-shop_thumbnail" alt="<?php echo $product->title; ?>">			
																</div>
															</div>
														<?php } ?>
														</div>
													</div>
												</div>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs product-detail">
											<div class="content_product_detail">
												<h1 itemprop="name" class="product_title entry-title"><?php echo $product->h1; ?></h1>
												
												<div class="reviews-content">
												    
													<div class="star"><span style="width:<?php echo product_puan_rate($product->id)*13.55; ?>px" title="<?php echo product_puan($product->id);?> oy verildi Oy:<?php echo product_puan_rate($product->id);?>"></span></div>
                                                    <?php
                                                    
                                                    if(!empty($star)){
                                                    $oysayisi=count($star);
                                                    echo $oysayisi." Değerlendirme - Puan ";
                                                    $puan=0;
                                                    foreach($star as $stars){
                                                     $puan=$puan+$stars->star;    
                                                    }
                                                    $ortalama=$puan/$oysayisi;
                                                    echo $ortalama;
                                                    }else{
                                                        echo "<p>Puanı yok.</p>";
                                                    }
                                                    ?>
                                					<a href="#reviews" class="woocommerce-review-link" rel="nofollow"><i class="fa fa-comments"></i> <span class="count"> <?php echo $comment_count; ?></span> Yorum</a>
												</div>
												
												<div>
													<!--<a href="https://wa.me/+9<?php $settings=get_settings(); echo $settings->phone_1; ?>/?text=Merhabalar. <?php echo base_url("$product->url/");?> ürününüzle ilgileniyorum." 
													class="btn btn-success pull-right" ><i class="fa fa-whatsapp"></i> Bilgi Almak İstiyorum <i class="fa fa-question"></i></a><br>-->
												    <?php if(!empty($product->down_price)){
												    ?>
													<p class="price"><span class="amount"><del><?php echo number_format($product->price, 2, ',','.'); ?> TL</del></span> 
													<span class="amount item-price-n">
													    <?php echo number_format($product->down_price, 2, ',','.'); ?> TL</span></p>
													 <?php }else{ ?>
													 <span class="amount item-price-n">
													    <?php echo number_format($product->price, 2, ',','.'); ?> TL</span></p>
													   <?php } ?>
													   
												</div>
										        
												<div class="product-info clearfix">
												
													<div class="product-stock pull-left in-stock">
														<span>Stok</span>
													</div>
													<span class="sku_wrapper pull-left">
													    <?php if($product->stok_kodu){?>
													    Stok Kodu  : <span class="sku" itemprop="sku"><?php echo $product->stok_kodu; ?></span>
													    <?php }else{?>
													    Ürün Kodu  : <span class="sku" itemprop="sku"><?php echo $product->id; ?></span>
													    <?php } ?>
													 </span>
													 
													 
													    <?php if($product->brand_id){?>
													    <span class="sku_wrapper pull-right">
													   <b> Marka  :</b> <span class="sku" itemprop="sku"><b><?php echo brand($product->brand_id); ?></b></span>
													    </span>
													    <?php } ?>
													 
												</div>
												
												<div class="description" itemprop="description">
													
													<p><?php echo $product->meta_description; ?></p>
													
												</div>	
												
													
																		
												<form method="post" action="<?php echo base_url();?>sepete-ekle/">
													<?php if(!empty($liste)){ ?>
														<label><?php  echo $secenek1_name->title; ?>:</label>
														<br>
														<select id="kurum" name="kurum" class="form-control" onchange="bolge_get(this.value)" required="required">
															<option selected disabled><?php  echo $secenek1_name->title; ?> Seçiniz...</option>
															<?php
															
															foreach ($liste as $list) : ?>
																<?php $kontrol=stokta_varmi($list->suboption, $product->id ); ?>
																<option <?php if($kontrol->stock==0 || NULL){ echo "disabled";}?> value="<?php echo $list->suboption; ?>"><?php echo alt_option_name($list->suboption); ?> 
																
																<?php //print_r($kontrol);
																if($kontrol->stock==0 || NULL){ echo "(Tükendi)";}elseif($kontrol->stock<=5){
																	echo "! Son ".$kontrol->stock." Ürün";
																}
																
																?></option>
															<?php endforeach; ?>
														</select>
															   
														<?php  if(!empty($secenek2)){?>
														<br>
															<label><?php  echo $secenek2_name->title; ?>:</label>
															<br>
															
															
															<select id="bolge" name="bolge" class="form-control tonselect" required="required" >
																<option value="">Önce ilk Seçimi Yapınız</option>
															</select>
															
															
														<?php } ?>
																
														
																
													<?php } ?>
												
												
													<br>
													
													<label>Adet:</label>
													<div class="quantity" style=" margin-top:10px;   width: 100px;">
														
															<input type="number" step="1" min="" max="" name="product_number" style="    width: 45px;" 
															value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
														
													</div>
													
												<br>
													<input type="hidden" name="product_id" value="<?php echo $product->id; ?>">
													<input type="hidden" name="url" value="<?php echo $product->url; ?>">
													<input type="hidden" name="product_price" value="<?php echo $product->price; ?>">
												<?php if($product->stok<=0){ ?>
													<a href="https://wa.me/+9<?php $settings=get_settings(); echo $settings->phone_1; ?>/?text=Merhabalar. <?php echo base_url("$product->url/");?> ürününüzle ilgileniyorum." class="btn btn-large mobil-hidden sepete-ekle" style="background:#25d366"> <i class="fa fa-whatsapp"></i> Gelince Haber Ver</a>
											
													<a href="https://wa.me/+9<?php $settings=get_settings(); echo $settings->phone_1; ?>/?text=Merhabalar. <?php echo base_url("$product->url/");?> ürününüzle ilgileniyorum." class="btn btn-large dekstop-hidden sepete-ekle-mobil" style="background:#25d366"> <i class="fa fa-whatsapp"></i> Gelince Haber Ver </a>

												<?php }else{ ?>
													<button type="submit" class="btn btn-large mobil-hidden sepete-ekle"> <i class="fa fa-shopping-cart"></i> Sepete Ekle</button>
											
													<button type="submit" class="btn btn-large dekstop-hidden sepete-ekle-mobil"> <i class="fa fa-shopping-cart"></i> Sepete Ekle
											
													(<?php if(!empty($product->down_price)){ echo number_format($product->down_price, 2, ',','.'); }else{ echo number_format($product->price, 2, ',','.'); } ?>₺)
												
													</button>	
												<?php } ?>
												<!--<a href="https://wa.me/+9<?php $settings=get_settings(); echo $settings->phone_1; ?>/?text=Merhabalar. <?php echo base_url("$product->url/");?> ürününüzle ilgileniyorum." class="btn btn-large mobil-hidden sepete-ekle"> <i class="fa fa-shopping-cart"></i> Sipariş Ver</a>
											
													<a href="https://wa.me/+9<?php $settings=get_settings(); echo $settings->phone_1; ?>/?text=Merhabalar. <?php echo base_url("$product->url/");?> ürününüzle ilgileniyorum." class="btn btn-large dekstop-hidden sepete-ekle-mobil"> <i class="fa fa-shopping-cart"></i> Sipariş Ver
											
													(<?php if(!empty($product->down_price)){ echo number_format($product->down_price, 2, ',','.'); }else{ echo number_format($product->price, 2, ',','.'); } ?>₺)
												
													</a>
														-->
											</form>
												<?php $this->load->view("product_v/star");?>
												<div class="social-share">
													<div class="title-share">Paylaş</div>
													<div class="wrap-content">
														<a href="https://www.facebook.com/sharer.php?u=<?php echo base_url("$product->url/");?>" target="_blank"><i class="fa fa-facebook"></i></a>

														<a target="_blank" href="//pinterest.com/pin/create/link/?url=<?php echo base_url("$product->url/");?>&media=<?php echo base_url()."big/".get_product_cover_image($product->id);?>&description=<?php echo $product->meta_description;?>"><i class="fa fa-pinterest"></i></a>

														<a href="https://twitter.com/intent/tweet?text=<?php echo $product->meta_description; ?> <?php echo base_url("$product->url/"); ?>" target="_blank"><i class="fa fa-twitter"></i></a>
														
														<a href="https://wa.me/?text=<?php echo base_url("$product->url/");?> ürününü sizinle paylaşmak istiyorum."><i class="fa fa-whatsapp"></i></a>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								
								<?php $this->load->view("product_v/tab_content");?>


								<div class="bottom-single-product theme-clearfix">
									<div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
										<div class="widget-inner"></div>
									</div>
									
									<?php $this->load->view("product_v/recent_product");?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>          
		<script>
			function bolge_get(krm) {
				$(document).ready(function() {
					if (krm != "") {
						var urls = "<?php echo base_url("home/getir_bolge"); ?>";
						var pr_id="<?php echo $product->id; ?>";
						$.ajax({
							type: "POST",
							url: urls + "/" + krm + "/" + pr_id,
							success: function(response) {
								$('#bolge').html("");
								var rows = JSON.parse(response);
								if (rows != null) {
									var nm="<?php echo isset($secenek2_name->title)?$secenek2_name->title:"";?>";
									console.log(nm);
									$("#bolge").append("<option value='' disabled selected>"+ nm +" seçiniz..</option>");
									$.each(rows, function(key, row) {
										console.log(row['id']);
										
										$("#bolge").append("<option value='" + row['id'] + "'>" + row['title']+ "</option>");
									})
								}

							},
						});
					} else {
						$('#bolge').html("");
						$("#bolge").append("<option value='' disabled selected>Seçim yapınız..</option>");
					}
					$(".tonselect").change(function(){
						tonid = $(this).val();
						//alert(tonid);
						$.post("<?php echo base_url("home/getir_resimton"); ?>",{Ton:tonid,Urun_ID:<?php echo $product->id; ?>},function(data){
							if(data.Durum==1)
							{
								$(".resimizlemeimg").attr("src",data.img);
								$(".resimizlemeurl").attr("href",data.img);
							}
						},"json");
					})
				})
			}
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bundle.js"></script>