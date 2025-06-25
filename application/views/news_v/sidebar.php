
<?php $settings = get_settings(); ?>
	 <?php foreach($recent_news as $news) {?>
							<div class="ori-recent-post-item d-flex align-items-center">
									<div class="recent-blog-img">
										<img src="<?php  echo base_url("upload/80x80/$news->img_url"); ?>" alt="">
									</div>
									<div class="recent-blog-text">
										<span class="date-meta text-uppercase"><?php
										error_reporting(0);
										setlocale(LC_ALL, 'tr_TR.UTF-8');
										echo strftime('%e %b %Y', strtotime($news->createdAt));
									?></span>
										<h3><a href="<?php echo base_url("$news->url/");?>"><?php  echo $news->title; ?></a></h3>
									</div>
								</div>
      	<?php } ?>

