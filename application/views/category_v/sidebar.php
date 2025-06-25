				<div class="col-lg-3">
                    <div class="sidebar-widget-area">
                        <div class="widget product-categories mb-50" data-aos="fade-up">
                            <h4 class="widget-title">Kategoriler</h4>
                            <ul class="widget-nav">
															<?php $get_categori=get_category_menu();	
															
																foreach($get_categori as $get_cat){
																	$get_alt_categori=get_alt_category_menu($get_cat->id);
																	
																	if($get_alt_categori){	?>
																			<li><a href="#<?php //echo base_url("$get_cat->url/"); ?>"><?php echo $get_cat->title ?></a> (<span class="count"><?php echo product_count($get_cat->id) ?></span>)</li>
																			<?php foreach($get_alt_categori as $get_alt_cat) {?>
																			<li><a href="#<?php //echo base_url("$get_alt_cat->url/"); ?>">-<?php echo $get_alt_cat->title; ?></a> (<span class="count"><?php echo product_alt_count($get_alt_cat->id) ?></span>)</li>
																			<?php } ?>
																		
																	<?php }else{ ?>
																		<li><a href="#<?php //echo base_url("$get_cat->url/"); ?>"><?php echo $get_cat->title ?></a> (<span class="count"><?php echo product_count($get_cat->id) ?></span>)</li>
																		<?php	}
																	
																}
															?>				
                            </ul>
                        </div>
                        
                    </div>
                </div>