<!-- Funfact Area Start -->
<div class="tp-funfact-area tp-funfact-style-2 tp-funfact-height theme-bg fix p-relative">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5 col-md-5">
                <div class="tp-funfact-title-box">
                    <h3 class="tp-section-title text-white tp-split-text tp-split-in-right">
                        <?php $text = text("text-count"); echo $text->title; ?>
                    </h3>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="tp-funfact-wrap d-flex justify-content-between">
                    <?php $text1 = text("text-count-1"); ?>
                    <div class="tp-funfact-item p-relative">
                        <h6 class="tp-funfact-number">
                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="<?php echo $text1->description; ?>">0</i>+
                        </h6>
                        <span><?php echo $text1->title; ?></span>
                    </div>
                    <?php $text2 = text("text-count-2"); ?>
                    <div class="tp-funfact-item p-relative">
                        <h6 class="tp-funfact-number">
                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="<?php echo $text2->description; ?>">0</i>+
                        </h6>
                        <span><?php echo $text2->title; ?></span>
                    </div>
                    <?php $text3 = text("text-count-3"); ?>
                    <div class="tp-funfact-item p-relative">
                        <h6 class="tp-funfact-number">
                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="<?php echo $text3->description; ?>">0</i>+
                        </h6>
                        <span><?php echo $text3->title; ?></span>
                    </div>
                    <?php $text4 = text("text-count-4"); ?>
                    <div class="tp-funfact-item p-relative">
                        <h6 class="tp-funfact-number">
                            <i class="purecounter" data-purecounter-duration="1" data-purecounter-end="<?php echo $text4->description; ?>">0</i>+
                        </h6>
                        <span><?php echo $text4->title; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Funfact Area End -->
