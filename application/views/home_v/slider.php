<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Themify Icons CSS -->

<!-- Elegant Font Icons CSS -->

<!-- Elegant Line Icons CSS -->
 
<!-- Bootstrap CSS -->

<!-- Venobox CSS -->

<!-- Slicknav CSS -->

<!-- animate CSS -->
<link rel="stylesheet" href="css/animate.min.css">
<!-- simpletextrotator CSS -->
<link rel="stylesheet" href="css/simpletextrotator.css">
<!-- OWL-Carousel CSS -->

<!-- Main CSS -->

<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">

<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<style>

/* Arka planın tamamını kaplaması için */
.ori-slider-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

/* Görsellerin ve videoların tam ekran kapsaması için */
.slider-media {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Tam ekranı kaplaması için */
}

.gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7));
    pointer-events: none; /* Video kontrollerine tıklanabilirlik sağlamak için */
}

/* Slider için sabit yükseklik */
.ori-slider-section-1 {
    height: 800px; /* Sabit yükseklik 800px olarak ayarlandı */
}

/* H2 başlığın sabit boyutta olması için */
.ori-slider-text h2 {
    white-space: nowrap; /* Yazının taşmasını engellemek için */
    overflow: hidden;
    text-overflow: ellipsis; /* Uzun yazılarda üç nokta ile görüntüleme */
}

</style>

<section id="ori-slider-1" class="ori-slider-section-1 position-relative">
    <div class="ori-slider-content-wrapper-1 position-relative">

        <div class="ori-slider-wrap-1">
            <?php foreach($slides as $slide): ?>
                <div class="ori-slider-content-1 position-relative">
                    <div class="ori-slider-text text-center text-uppercase">
                        <br> <br>  <br>
                        <h2 class="rotate" style="font-size:50px; font-family: 'Oswald', serif; font-weight: bold; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                             <?php echo $slide->title; ?>
                        </h2>
                        <p><?php echo $slide->description; ?></p>
                        <?php if (!empty($slide->button_url) && !empty($slide->button_caption)): ?>
                        <div class="slider-play-btn">
                            <a href="<?php echo $slide->button_url; ?>">
                                <button style="width: 200px; height: 40px; border: 2px white solid; background-color: rgba(255, 255, 255, 0.0); color: white; border-radius: 25px;">
                                    <?php echo $slide->button_caption; ?>
                                </button>
                            </a>
                        </div>
                        <?php endif; ?>
                        <br> <br> <br> <br> <br> <br>  <br>  <br>
                        <div class="ori-slider-img position-absolute">
                            <div class="gradient-overlay"></div> <!-- Gradient Overlay Eklendi -->
                            <?php 
                                $file_ext = strtolower(pathinfo($slide->img_url, PATHINFO_EXTENSION));
                                if (in_array($file_ext, ['mp4', 'avi', 'mov'])): 
                            ?>
                                <!-- Video dosyası için ayarlar: otomatik oynatma, sessiz, döngü -->
                                <video autoplay muted loop playsinline class="slider-media" preload="auto">
                                <?php
                                /*
                                <source src="https://edef6.pcloud.com/cfZOSzJsgZlcEV4X7Zh8pSZZURX0XkZQ5ZZ0J5ZZh7h3XZBHZdpZeJZDkZJzZNHZvXZFRZs0Za0ZgHZO0ZW5ZYZo1btK7X21kHrRLMtg3yWd8llwquy/1112.mp4">  */?>
                                 <source src="<?php echo base_url("upload/{$settings->slider_1}/" . rawurlencode($slide->img_url)); ?>" type="video/<?php echo $file_ext; ?>"> 
                              
                                    Tarayıcınız video etiketini desteklemiyor.
                                   

                                </video>
                            <?php else: ?>
                                <!-- Görsel dosyası için img etiketi -->
                                <img src="<?php echo base_url("upload/{$settings->slider_1}/" . rawurlencode($slide->img_url)); ?>" alt="" class="slider-media">
                            <?php endif; ?>
                            <br>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <br> <br> <br> 
    <div class="ori-slider-scroll position-absolute text-uppercase">
        <span>Kaydır</span>
        <div class="scroll-mouse">
            <i class="fal fa-mouse"></i>
        </div>
    </div>
</section>
<br> <br>   <br> <br> <br> 
<br> 
<!-- jQuery Lib -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="js/vendor/bootstrap.min.js"></script>
<!-- Tether JS -->
<script src="js/vendor/tether.min.js"></script>
<!-- Slicknav JS -->
<script src="js/vendor/jquery.slicknav.min.js"></script>
<!-- OWL-Carousel JS -->
<script src="js/vendor/owl.carousel.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="js/vendor/smooth-scroll.min.js"></script>
<!-- Venobox JS -->
<script src="js/vendor/venobox.min.js"></script>
<!-- Text Rotator JS -->
<script src="js/vendor/jquery.simple-text-rotator.js"></script>
<!-- Wow JS -->
<script src="js/vendor/wow.min.js"></script>
<script src="js/contact.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
