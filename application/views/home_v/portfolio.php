<br>
<br>
<section id="ori-service-1" class="ori-service-section-1">
    <div class="ori-service-wrapper-1" style=" padding:0px; padding-bottom: 200px; padding-top: 100px;">
        <div class="container" style="">
            <div class="ori-project-content-1 position-relative">
                <center>
                    <h2 class="Services" style="font-family: Lato, sans-serif; font-weight: bold; font-size: 38px; color: #b96125; padding-bottom: 40px; text-transform: capitalize;">Portfolio</h2>
                    <span style="font-family: Lato, sans-serif; font-size: 20px; color: white; padding-bottom: 10px; font-style: italic;">"Our Success Stories"</span>
                    <p style="width: 80%; font-family: Rubik, sans-serif; margin-top: 40px; font-size: 22px;">Meet our projects and our achievements. <br> As Ephnos Creative Agency, we produce special, impressive works for every brand</p>
                </center>
                <br>
                <br>
                <div class="row ori-portfolio-feed-item-wrapper filtr-container">
                <?php
                    $query = $this->db->where_in('rank', [1, 2, 3])
                                    ->order_by('rank', 'ASC')
                                    ->get('portfolio'); 
                    $portfolio = $query->result();
                ?>

                <?php 
                    $counter = 0; // Sayaç başlangıcı
                    foreach ($portfolio as $index => $item) :
                        if ($counter >= 3) break; // 3 içerikten sonra döngüyü sonlandır
                    ?>
                        <div class="col-lg-4 col-sm-6 filtr-item" data-category="<?php echo isset($item->category) ? $item->category : '1'; ?>" data-sort="project-<?php echo $index; ?>">

                            <a class="glightbox position-relative" href="<?=(!empty($item->url)) ? $item->url : base_url("1500x1000/$item->img_url"); ?>" data-glightbox="<?=$item->id?>" >
                            <!-- Video URL veya resim açacak şekilde güncelleme -->

                            <div class="ori-project-item-1 position-relative" style="border-radius: 0; height: 300px;">

                                <div class="ori-project-img">

                                    <img src="<?php echo base_url("1500x1000/$item->img_url"); ?>" alt="" style="height:;">

                                </div>

                                <div class="ori-project-text position-absolute" style="margin-right: 5px;">

                                    <h3><?php echo $item->title; ?></h3>

                                    <span class="text-uppercase project-category"><?php echo $item->description; ?></span>

                                </div>

                                <div class="ori-project-link position-absolute">

                                </div>

                            </div>
                            </a>

                        </div>

                    <?php 
                        $counter++; // Sayaç artırılıyor
                    endforeach; 
                ?>


                </div>



            </div>

        </div>

        <br>

        <br>

                    

        <center>
            <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="https://www.ephnosfilm.com/referanslar/" style="color:white;">more</a>
            </div>
        </center>
    </div>
</section>
<style>

.container {
    padding: 0 10px;
}
.ori-project-item-1 {
    margin-bottom: 20px;
}
</style>