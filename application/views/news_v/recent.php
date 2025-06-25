<?php $settings = get_settings(); ?>
<br><br>
<section id="about">
      <div class="container">
        <header class="section-header">
          <h1><?php echo $news->title; ?></h1>
        </header>
        <div class="row">
          <div class="col-lg-8 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1" style="visibility: visible; animation-name: fadeInUp;">
          <img src="<?php echo base_url("upload/644x362/$news->img_url"); ?>" class="img-fluid" alt="<?php echo $news->title; ?>">
         
          <?php echo $news->description; ?>
          </div>
         
          <div class="col-lg-4 wow fadeInUp pt-4 pt-lg-0 order-3 order-lg-3" style="visibility: visible; animation-name: fadeInUp;">
            <div>
            <?php foreach($recent_news_list as $recent_news) { ?>

                    <div class="col-md-12 mb-20">
                        <div class="media margin-clear">
                            <div class="d-flex pr-2">

                                <?php if($recent_news->news_type == "image") { ?>

                                    <div class="overlay-container">
                                    <a href="<?php echo base_url("$recent_news->url/"); ?>" class="overlay-link small">
                                        <img class="client-logo" style="width:100px; height:80px;"src="<?php echo base_url("upload/349x250/$recent_news->img_url"); ?>" alt="<?php echo $recent_news->url; ?>">
                                        </a>
                                    </div>

                                <?php } else { ?>

                                    <div>
                                        <iframe style="width: 100px; height: 50px;" src="//www.youtube.com/embed/<?php echo $recent_news->video_url; ?>"></iframe>
                                    </div>

                                <?php  } ?>

                            </div>
                            <div class="media-body">
                                <a href="<?php echo base_url("$recent_news->url/"); ?>"><?php echo $recent_news->title; ?></a>
                                <p class="small margin-clear"><i class="fa fa-calendar pr-2"></i><?php echo $recent_news->createdAt; ?></p>
                            </div>
                        </div>
                    </div>


                <?php } ?>
            
            </div>
          </div>




        </div>

      </div>
    </section>