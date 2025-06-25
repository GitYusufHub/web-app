							<ul class="products-loop row grid clearfix">
								<div class="box-slider-title text-center">
									<h2><span>Benzer Ürünler</span></h2>
									<hr>
								</div>
									<?php foreach($other_product as $product){?>
									<li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 post-255 product type-product status-publish has-post-thumbnail product_cat-electronics product_cat-home-appliances product_cat-vacuum-cleaner product_brand-apoteket first instock sale featured shipping-taxable purchasable product-type-simple">
										<div class="products-entry item-wrap clearfix">
											<div class="item-detail">
												<div class="item-img products-thumb">
													<span class="onsale">Sale!</span>
													<a href="<?php echo base_url("$product->url/"); ?>" title="<?php echo $product->title; ?>">
														<div class="product-thumb-hover">
															<img height="300" src="<?php echo base_url()."small/".get_product_cover_image($product->id);?>" 
															class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="<?php echo $product->title; ?>">
														</div>
													</a>
													
												</div>
												
												<div class="item-content products-content">
													<div class="reviews-content">
														<div class="star">
														<span style="width:<?php echo product_puan_rate($product->id)*13.72; ?>px" title="<?php echo product_puan($product->id);?> oy verildi Oy:<?php echo product_puan_rate($product->id);?>"></span>
														</div>
													</div>
													
													<h4><a href="<?php echo base_url("$product->url/"); ?>" title="<?php echo $product->title; ?>"><?php echo $product->h1; ?></a></h4>
													
													
													<span class="item-price">
														<?php if($product->down_price){?>
															<del><span class="woocommerce-Price-amount amount"><?php echo $product->price; ?> ₺</span></del> 
															<ins><span class="woocommerce-Price-amount amount"><?php echo $product->down_price; ?> ₺</span></ins>
														<?php }else{?> 
															<ins><span class="woocommerce-Price-amount amount"><?php echo $product->price; ?> ₺</span></ins>
														<?php } ?>
													</span>
													
													<div class="item-description"><?php echo $product->meta_description; ?></div>
												</div>
											</div>
										</div>
									</li>
									<?php } ?>
								</ul>
							
								<div class="clear"></div>
								
									