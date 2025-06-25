<?php $settings = get_settings(); ?>
<?php
// URL'den kategori ID'sini al
$kategori_id = $this->input->get('kategori');

// Eğer kategori ID belirtilmişse filtre uygula, aksi takdirde tüm projeleri al
if (!empty($kategori_id) && $kategori_id !== 'all') {
    $portfolio = $this->portfolio_model->get_all(array('category_id' => $kategori_id));
} else {
    $portfolio = $this->portfolio_model->get_all();
}
?>

    <section id="ori-breadcrumbs" class="ori-breadcrumbs-section position-relative" data-background="<?php echo base_url('');?>assets/img/bg/bread-bg.png">
            <div class="container">
                <div class="ori-breadcrumb-content text-center" style="max-width: 85%;">
                    <h1 style="font-family: Lato, sans-serif; font-weight: bold; color: #b96125; margin-bottom: 20px;">Portfolio</h1>
                <!--    <h4 style="font-family: Lato, sans-serif; font-weight: bold; font-size: 20px; margin-bottom: 12px;" >“Our Success Stories”</h4> -->
                    <p style="height:70%; font-family: Lato, sans-serif; font-size: 22px;">We approach each project with passion and produce innovative and original work for brands. In our portfolio, you can find our creative works that we have realized for our clients from different sectors as Ephnos Creative Agency. Our work is not just a design; it is powerful narratives that will capture your customer goals and add value to your brand. Be inspired by our projects that represent you successfully.<p>
                </div>
            </div>
            <div class="line_animation">
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
                <div class="line_area"></div>
            </div>
            <style>
                .ori-breadcrumb-content {
                    max-width: 60%; /* Adjust the value as needed */
                    margin: 0 auto; /* Center the content within the container */
                }

                @media only screen and (max-width: 768px) {
                    .ori-breadcrumb-content {
                        max-width: 90%; /* Adjust the value as needed */
                        margin: 0 auto; /* Center the content within the container */
                    }   
                }
            </style>
        </section>	


<!-- Pop-up YouTube Video Yapısı -->
<div class="overlay" id="overlay" onclick="closePopup()"></div>
<div class="popup" id="popup">
    <span class="close-btn" onclick="closePopup()">X</span>
    <div id="contentContainer">
        <!-- İçerik buraya dinamik olarak yüklenecek -->
    </div>
</div>

<script>
function openPopup(videoUrl, imageUrl) {
    const contentContainer = document.getElementById("contentContainer");

    // Önceki içeriği temizle
    contentContainer.innerHTML = "";

    if (videoUrl) {
        // Video URL'si mevcutsa iframe ekleyin
        const iframe = document.createElement("iframe");
        iframe.width = "560";
        iframe.height = "315";
        iframe.src = "https://www.youtube.com/embed/" + videoUrl;
        iframe.title = "YouTube video player";
        iframe.frameBorder = "0";
        iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share";
        iframe.referrerPolicy = "strict-origin-when-cross-origin";
        iframe.allowFullscreen = true;
        contentContainer.appendChild(iframe);
    } else if (imageUrl) {
        // Video URL'si yoksa resim gösterimi
        const img = document.createElement("img");
        img.src = imageUrl;
        img.alt = "Proje Görseli";
        img.style.maxWidth = "100%";
        img.style.height = "auto";
        contentContainer.appendChild(img);
    }

    document.getElementById("popup").style.display = "block";
    document.getElementById("overlay").style.display = "block";
}

function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.getElementById("overlay").style.display = "none";
    document.getElementById("contentContainer").innerHTML = ""; // İçeriği temizle
}

</script>

<style>
    /* Pop-up ve kaplama stilleri */
    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        max-width: 600px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.5);
        z-index: 1000;
    }

    .popup iframe {
        width: 100%;
        height: 315px;
    }

    .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.7);
        z-index: 500;
    }

    .close-btn {
        background-color: red;
        color: white;
        padding: 5px 10px;
        cursor: pointer;
        position: absolute;
        right: 10px;
        top: 10px;
    }
    
</style>

<section id="ori-project-1" class="ori-project-section-1 position-relative">
    <div class="container">
        <div class="ori-project-content-1 position-relative">
            <!-- Filter Buttons -->
            <div class="ori-portfolio-filter-btn ul-li text-center">
    <ul id="filters" class="nav-gallery">
        <li class="filtr-button <?php echo (empty($this->input->get('kategori')) || $this->input->get('kategori') === 'all') ? 'filtr-active' : ''; ?>" data-filter="all">
            <a href="javascript:void(0);">All</a>
        </li>
        <?php foreach ($categories as $category) : ?>
            <li class="filtr-button <?php echo ($this->input->get('kategori') == $category->id) ? 'filtr-active' : ''; ?>" data-filter="<?php echo $category->id; ?>">
                <a href="javascript:void(0);"><?php echo $category->title; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>


            <!-- Portfolio Items Wrapper -->
            <div class="row ori-portfolio-feed-item-wrapper filtr-container">
    <?php if (!empty($portfolio)) : ?>
        <?php foreach ($portfolio as $index => $item) : ?>
            <div class="col-lg-4 col-sm-6 filtr-item" data-category="<?php echo $item->category_id; ?>" data-sort="project-<?php echo $index; ?>">
                
                <?php
                // echo !empty($item->url) ? $item->url : ''; 
                //base_url("1500x1000/$item->img_url");
                ?>
                <a class="glightbox position-relative" href="<?=(!empty($item->url)) ? $item->url : base_url("1500x1000/$item->img_url"); ?>" data-glightbox="<?=$item->id?>" >

                    <div class="ori-project-item-1 position-relative" >
                        <div class="ori-project-img">
                            <img src="<?php echo base_url("1500x1000/$item->img_url"); ?>" alt="">
                        </div>
                        <div class="ori-project-text position-absolute" style="margin-right: 5px;">
                            <h3><?php echo $item->title; ?></h3>
                            <span class="text-uppercase project-category"><?php echo $item->description; ?></span>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="text-center">Bu kategoriye ait proje bulunmamaktadır.</p>
    <?php endif; ?>
</div>



        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
    // URL'den 'kategori' parametresini al
    function getCategoryIDFromQueryString() {
        const urlParams = new URLSearchParams(window.location.search); // URL sorgu parametrelerini al
        return urlParams.get('kategori') || 'all'; // Eğer 'kategori' yoksa varsayılan olarak "all" döner
    }

    // Sayfa yüklendiğinde URL'deki kategori ID'ye göre projeleri yükle
    const initialCategoryID = getCategoryIDFromQueryString();
    loadCategory(initialCategoryID);

    // Filtre butonlarına tıklama olayını bağla
    $('#filters .filtr-button').on('click', function (event) {
        event.preventDefault(); // Sayfanın yukarı kaymasını engelle
        const categoryID = $(this).data('filter'); // Seçilen kategori ID'sini al

        // URL'yi güncelle
        const newUrl =
            categoryID === 'all'
                ? '<?php echo base_url("home/referanslar"); ?>'
                : '<?php echo base_url("home/referanslar"); ?>?kategori=' + categoryID;
        history.pushState(null, null, newUrl);

        // Yeni kategoriye göre projeleri yükle
        loadCategory(categoryID);
    });

    // Belirtilen kategoriye göre projeleri yükleyen fonksiyon
    function loadCategory(categoryID) {
        // Aktif buton sınıfını güncelle
        $('#filters .filtr-button').removeClass('filtr-active');
        $('[data-filter="' + categoryID + '"]').addClass('filtr-active');

        // AJAX çağrısı ile kategoriye ait projeleri al
        $.ajax({
            url:
                "<?php echo base_url('home/get_filtered_portfolio'); ?>" +
                (categoryID === 'all' ? '' : '?kategori=' + categoryID),
            type: 'GET',
            dataType: 'json',
            beforeSend: function () {
                // Yükleniyor mesajı ekle
                $('.ori-portfolio-feed-item-wrapper').html(
                    '<p class="text-center">Proje verileri yükleniyor...</p>'
                );
            },
            success: function (response) {
                console.log('AJAX Response:', response); // Gelen yanıtı kontrol için konsola yazdır

                // Projeleri gösterme alanını temizle
                $('.ori-portfolio-feed-item-wrapper').empty();

                // Eğer veri geldiyse, projeleri ekle
                if (response && response.length > 0) {
                    $.each(response, function (index, item) {
                        const projectHtml = 
                            <div class="col-lg-4 col-sm-6 filtr-item" data-category="${
                                item.category_id || 'uncategorized'
                            }" data-sort="project-${index}">
                                <div class="ori-project-item-1 position-relative" onclick="openPopup('${
                                    item.url || '#'
                                }')">
                                    <div class="ori-project-img">
                                        <img src="<?php echo base_url("920x513/"); ?>${
                                            item.img_url || 'default.jpg'
                                        }" alt="${item.title || 'Proje Görseli'}">
                                    </div>
                                    <div class="ori-project-text position-absolute">
                                        <h3><a href="#">${item.title || 'Başlık Bulunamadı'}</a></h3>
                                        <span class="text-uppercase project-category"><a href="#">${
                                            item.description || ''
                                        }</a></span>
                                    </div>
                                    <div class="ori-project-link position-absolute">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>;
                        // HTML içeriğini ekle
                        $('.ori-portfolio-feed-item-wrapper').append(projectHtml);
                    });
                } else {
                    // Eğer veri yoksa uyarı mesajını göster
                    $('.ori-portfolio-feed-item-wrapper').html(
                        '<p class="text-center">Bu kategoriye ait proje bulunmamaktadır.</p>'
                    );
                }
            },
            error: function (xhr, status, error) {
                console.error('AJAX Error:', status, error); // Hata durumunda konsola yazdır
                $('.ori-portfolio-feed-item-wrapper').html(
                    '<p class="text-center">Proje verileri yüklenirken bir hata oluştu.</p>'
                );
            },
        });
    }

    // Popup açma fonksiyonu
    function openPopup(url) {
        if (url && url !== '#') {
            window.open(url, '_blank');
        } else {
            alert('Bu proje için geçerli bir bağlantı bulunmamaktadır.');
        }
    }
});
</script>








<?php $banner=banners(3); ?>
    <?php if(!empty($banner)){ ?>
<div class="images" style="display:flex; align-items:center; justify-content: center;">
    <img src="<?php echo base_url("upload/banner/$banner->img_url"); ?>" alt="" style="width: 100%; height: 40%;">
</div>

<section id="" class="" style="padding: 30px; background-color: #292929; text-align: center;">  
    <div class="ori-service-wrapper-11"> 
        <div class="container-fluid"> 
            <div class="ori-service-top-content-1 d-flex justify-content-center align-items-center"> 
                <div class="ori-section-title-1 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"> 
                    <h2 style="font-family: Lato, serif; font-weight: bold;"><?php echo $banner->title ? $banner->title  : "" ; ?></h2> 
                </div> 
            </div> 
        </div> 
        <br>
        <div class="ori-testimonial-text text-center pera-content"> 
            <p style="font-size: 20px; font-family: Lato, serif; color: #b96125; font-weight: bold;">
      <?php echo $banner->description ? $banner->description  : "" ; ?>
            </p> 
        </div>
        <br>
        <center>
            <div class="btna"> 
                <a href="<?php echo $banner->button_url ? base_url("$banner->button_url") : ""; ?>"><?php echo $banner->button_caption ? $banner->button_caption  : "" ; ?></a> 
            </div>
        </center> 
    </div> 
</section>
    <?php } ?>
<style>
    /* Dışarıdaki kapsayıcıya tam genişlik için düzenleme */
.ori-service-wrapper-11 {
    background-color: #292929;
    padding-top: 40px;
    padding-bottom: 40px;
    padding-left: 0;
    padding-right: 0;
}

/* Container-fluid ile tam genişlik kullanımı */
.container-fluid {
    padding-left: 0;
    padding-right: 0;
}

/* Buton düzenlemesi */
.btna {
    width: 200px;
    height: 50px;
    background-color: transparent;
    border: 2px #b96125 solid;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 20px;
    text-align: center;
}

.btna a {
    color: #ffffff;
    text-decoration: none;
    font-family: Lato, serif;
    font-weight: bold;
}

</style>

<div style="width:100%; height:0px; border-top: 1px solid #292929; " class="cizgi"></div>
