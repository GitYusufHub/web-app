<style>
.single-product .tabs .tabbable .tab-content .tab-pane h2 {
    display: block;
}
</style>
<div class="tabs clearfix">
	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li class="description_tab active">
				<a href="#tab-description" data-toggle="tab">Ürün Açıklaması</a>
			</li>
			<?php if(!empty($liste)){?>
			<li class="additional_information_tab ">
				<a href="#tab-additional_information" data-toggle="tab">Ek Bilgi</a>
			</li>
			<?php }?>
			<li class="reviews_tab ">
				<a href="#tab-reviews" data-toggle="tab">Yorumlar (<?php echo $comment_count; ?>)</a>
			</li>
		</ul>
		
		<div class="clear"></div>
		
		<div class=" tab-content">
			<div class="tab-pane active" id="tab-description">	
				<?php echo $product->description; ?>
			</div>
			<?php if(!empty($liste)){?>
			<div class="tab-pane " id="tab-additional_information">
				<h2>Diğer Özellikleri</h2>
				<table class="shop_attributes">
					<tbody>
						<tr class="">
						    
						    
							<th><?php  echo $secenek1_name->title; ?></th>
							<td>
							   <p>
							   <?php foreach($liste as $list){?>
							   <?php echo alt_option_name($list->suboption); ?>,
							   <?php } ?>
							   </p>
							</td>
						</tr>
						<?php if(!empty($secenek2_name->title)){?>
						<tr class="alt">
							<th><?php  echo $secenek2_name->title; ?></th>
							<td>
							 <p>
							 <?php foreach($liste2 as $list){?>
							   <?php echo alt_option_name($list->suboption2); ?>,
							   <?php } ?>      
							 </p>
							</td>
						</tr><?php } ?>
					</tbody>
				</table>
			</div>
			<?php } ?>
			
			<div class="tab-pane" id="tab-reviews">
				<div id="reviews">
						<p class="woocommerce-noreviews">
						    <?php echo $comment_count!=0?$comment_count. " Yorum Yapılmış":"Henüz Yorum Yapılmamış."; ?>
				</p>
					<div id="review_form_wrapper">
						<div id="review_form">
							<div id="respond" class="comment-respond">
								<form action="<?php echo base_url("yorumla"); ?>" method="post" id="commentform" class="comment-form">
								
									<p class="comment-form-comment">
									    <input type="hidden" name="product_id" 
									    value="<?php echo $product->id; ?>" />
									    <input style="width:49%; float:left;"  type="text" name="name" placeholder="İsim Soyisim" />
										
										<input style="width:49%; float:right;" type="mail" name="email" placeholder="E-posta Adresiniz" />
										<br>
										<label for="comment">Yorumunuz</label>
										<input class="col-md-12" name="message" cols="45" rows="8" style="width:100%;height:60px;!important" aria-required="true" />
									</p>
									
									<p class="form-submit">
										<input name="submit" type="submit" id="submit" class="submit" value="Gönder">
									</p>
								</form>
							</div>
							<!-- #respond -->
						</div>
					</div>
					<h4><b><?php echo $comment_count." Yorum Mevcut"; ?></b></h4>
					<!--  Yorumlar -->
					<div id="review_form_wrapper">
						<div id="review_form">
						    
						    <?php foreach($comments as $comment){ ?>
							<div id="respond" class="comment-respond">
    							<p><b><?php echo $comment->name; ?></b>
    							<br>
    						    <?php echo $comment->message; ?>
    							<font style="float:right"><i class="fa fa-calendar"></i> <?php echo $comment->createdAt; ?></font>
    							</p>
    							<hr>
							</div>
							<?php } ?>
						
							
							
						
						</div>
					</div>
						<!--  Yorumlar END-->
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>