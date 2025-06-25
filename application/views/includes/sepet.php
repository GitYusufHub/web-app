<div class="wrapp-minicart">
    <div class="minicart-padding">
        <div class="number-item">Sepetinde <span><?php echo sepet_say(); ?></span> ürün var</div>
        <ul class="minicart-content">

            <?php $tutar=0;
            ?>										
            <?php if(!empty(my_sepet())){
                //print_r(my_sepet());exit;
                foreach(my_sepet() as $sepetim){ 
                    
                    ?>
                <?php $product_box=product_box($sepetim['product_id']); ?>
                <li>
                    <a href="<?php echo base_url($product_box->url); ?>/" class="product-image">
                        <img width="100" height="100" src="<?php echo base_url(get_product_cover_image($sepetim['product_id'])); ?>" class="attachment-100x100 size-100x100 wp-post-image" alt="<?php echo $product_box->title; ?>">
                    
                    </a>
                    
                    <div class="detail-item">
                        <div class="product-details">
                            <h4><a class="title-item" href="<?php echo base_url($product_box->url); ?>/"><?php echo $product_box->title; ?></a></h4>
                            
                            <div class="product-price">
                                <div class="qty" style="float:left;">
                                    <span class="qty-number"><?php echo $sepetim['product_number']; ?></span>									
                                </div>
                                <span class="price"><span class="woocommerce-Price-amount amount">	
                                    *<?php if($product_box->down_price){
                                        $ara_tutar=$product_box->down_price*$sepetim['product_number'];
                                        echo $product_box->down_price; ?> ₺
                                    <?php }else{ 
                                        $ara_tutar=$product_box->price*$sepetim['product_number'];
                                        echo $product_box->price; ?> ₺
                                    <?php } ?>
                                </span>
                                
                                
                            </div>
                            
                            <?php /*<div class="product-action clearfix">
                                <a href="<?php echo base_url("sepet-sil/$product_box->id");?><?php echo $sepetim['option1'].$sepetim['option2'];?>" rel="nofollow" class="btn-remove" title="Sepetten Çıkar"><span class="fa fa-trash-o"></span></a>  
                            </div>
                            */ ?>
                        </div>
                    </div>
                </li>
            
            <?php $tutar=$tutar+$ara_tutar;	} }?>
        </ul>
        
        <div class="cart-checkout">
            <div class="price-total">
                <span class="label-price-total">Toplam</span>
                <span class="price-total-w"><span class="price"><span class="woocommerce-Price-amount amount"><?php echo $tutar; ?>₺</span></span></span>			
            </div>
            
            <div class="cart-links clearfix">
                <div class="cart-link"><a href="<?php echo base_url("sepet"); ?>/" title="Sepet">Sepete Git</a></div>
                <div class="checkout-link"><a href="<?php echo base_url("odeme"); ?>/" title="Ödeme">Siparişi Tamamla</a></div>
            </div>
        </div>
    </div>
</div>