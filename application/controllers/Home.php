<?php

class Home extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        
       
        //$this->output->cache(0);

        $this->viewFolder = "homepage";
        $this->load->helper("text");

    }

    public function index(){
        $viewData = new stdClass();
        $this->load->model("slide_model");
      
        $this->load->model("news_model"); 
        $this->load->model("portfolio_model");
        $this->load->model("brand_model");
       
        $viewData->brands= $this->brand_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
       
        $viewData->slides= $this->slide_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $viewData->portfolio= $this->portfolio_model->get_all(
            array(
                "isActive"  => 1
            ), "id DESC"
        );

        $viewData->news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "Location"  => ""
            ), "rank ASC", array("start" => 0, "count" => 3)
        );
        $viewData->settings = get_settings(); 
      
 
       // print_r( $viewData->images);
        $viewData->viewFolder   = "home_v";
        $this->load->view($viewData->viewFolder, $viewData);
    }
    public function gonder(){
        $viewData = new stdClass();
        $settings=get_settings();


        $adi = $this->input->post('adi');
        $mail = $this->input->post('mail');
        $telefon = $this->input->post('telefon');
        $adres = $this->input->post('adres');
        $msg = $this->input->post('msg');
        
        $errors = array();
    
        if (empty($adi) || strlen($adi) < 3) {
            $errors[] = 'Adınızı Giriniz.';
        }
    
        if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Geçerli bir e-posta adresi giriniz.';
        }
    
        if (empty($telefon) || !is_numeric($telefon)) {
            $errors[] = 'Telefon numarasını giriniz.';
        }
    /*
        if (empty($adres)) {
            $errors[] = 'Adres Giriniz.';
        }     */   
        

        if (!empty($errors)) {
            $json = array(
                'send_status' => 0,
                'message' => implode(' ',$errors)
            );
        } else {

        
            $template = file_get_contents('mail_sablonu.html');
            
            
            $data = array(
                'adi' => $adi,
                'mail' =>$mail,
                'telefon' => $telefon,
                'adres' => $adres,
                'mesaj' =>$msg,
            );
    
            foreach ($data as $key => $value) {
                $template = str_replace("{{" . $key . "}}", $value, $template);
            }
            
    
            $this->load->library('email');
            
            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ms7.guzel.net.tr',
                'smtp_port' => 465,
                'smtp_user' => 'info@ephnosfilm.com',
                'smtp_pass' => 'Ephnos88!',
                'smtp_crypto' => 'ssl',
                'mailtype'  => 'html',
                'charset'   => 'utf-8',
                'wordwrap'  => TRUE
            );

            $this->email->initialize($config);
            $this->email->from('info@ephnosfilm.com', 'Ephnos Film İletişim');
            $this->email->to('info@ephnosfilm.com');
            $this->email->subject('İletişim Formundan Gelen Mesaj');
            $this->email->message($template);
    
            if ($this->email->send()) {
                $json = array(
                    'send_status' => 1,
                    'message' => 'E-posta başarıyla gönderildi!'
                );
                
            } else {
                $json = array(
                    'send_status' => 0,
                    'message' => 'E-posta gönderilemedi!'
                );
            }
        }
        echo json_encode($json);

    }
    public function mesaj_gonder(){
        $viewData = new stdClass();
        $settings=get_settings();
       // print_r($_POST);
        //exit;
        $tel=$settings->phone_1;
            echo'<meta http-equiv="refresh" content="0;url=https://wa.me/+9'.$tel.'?text=İsmim '.$_POST['name'].';
            %0A'.$_POST['email'].'  
            %0A%0ANot:'.$_POST['comments'].'">';
       }
    
    public function puans(){
        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";
        
        $this->load->model("member_model");
        $star=$this->input->post('rating');
        $product_id=$this->input->post('product_id');
        $ip_address=get_ip();
        
        $sorgu = $this->member_model->get(
                array(
                    "product_id"   => $product_id,
                    "ip_address"   => $ip_address
                )
            );
        if($sorgu){
            if($sorgu->star=="5"){
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Daha Önce puan vermişsiniz !",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }elseif($sorgu->star<=$star){
               $update= $this->member_model->update(
                    array(
                            "ip_address" => $ip_address
                    ),
                    array(
                        "star"         => $star,
                        "createdAt"    => date("Y-m-d H:i:s")
                    )
                );
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Puanınız Başarıyla Güncellendi ".$star." yıldız verdiğiniz için teşekkür ederiz",
                    "type"  => "success"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }elseif($sorgu){
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Daha Önce puan vermişsiniz.",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }
        }else{
            if($sorgu=="" && $star==""){
               
               $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Puan vermek için en az bir yıldız seçmelisiniz.",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
               
               
               
            }else{
                $insert = $this->member_model->add(
                    array(
                        "star"         => $star,
                        "news_id"   => "#",
                         "product_id"   => $product_id,
                        "ip_address"   => $ip_address,
                        "isActive"     => 1,
                        "createdAt"    => date("Y-m-d H:i:s")
                    )
                );
                
                if($star=="5"){
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz",
                    "type"  => "success"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }elseif($star=="4" || $star=="4,5"){
                    
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. işletmemiz hakkında fikirleriniz değiştiğinde 5 puan yapmanızı rica ederiz :)",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
                elseif($star=="3" || $star=="3,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. Sizlere daha iyi hizmet verebilmemiz için bizlere fikirlerinizi iletiniz.",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                    
                }
                elseif($star=="2" || $star=="2,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. işletmemiz hakkında çok iyi düşünmediğinizi görüyorum. Sizleri kıracak bir şey mi yaptık :(",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
                elseif($star=="1" || $star=="1,5" || $star=="0,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. İşletmemiz hakkında iyi bir fikir edinmeniz için sizleri kahve içmeye davet ediyorum. :)",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alert", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
            }
         }
     }
       public function puan(){
        $viewData = new stdClass();
        $viewData->viewFolder = "product_v";
        
        $this->load->model("member_model");
        $star=$this->input->post('rating');
        $news_id=$this->input->post('news_id');
        $ip_address=get_ip();
        
        $sorgu = $this->member_model->get(
                array(
                    "news_id"   => $news_id,
                    "ip_address"   => $ip_address
                )
            );
        if($sorgu){
            if($sorgu->star=="5"){
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Daha Önce puan vermişsiniz !",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }elseif($sorgu->star<=$star){
               $update= $this->member_model->update(
                    array(
                            "ip_address" => $ip_address
                    ),
                    array(
                        "star"         => $star,
                        "createdAt"    => date("Y-m-d H:i:s")
                    )
                );
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Puanınız Başarıyla Güncellendi ".$star." yıldız verdiğiniz için teşekkür ederiz",
                    "type"  => "success"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }elseif($sorgu){
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Daha Önce puan vermişsiniz.",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
            }
        }else{
            if($sorgu=="" && $star==""){
               
               $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Puan vermek için en az bir yıldız seçmelisiniz.",
                    "type"  => "error"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
               
               
               
            }else{
                $insert = $this->member_model->add(
                    array(
                        "star"         => $star,
                        "news_id"      => $news_id,
                        "product_id"   => "#",
                        "ip_address"   => $ip_address,
                        "isActive"     => 1,
                        "createdAt"    => date("Y-m-d H:i:s")
                    )
                );
                
                if($star=="5"){
                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz",
                    "type"  => "success"
                );
                $this->session->set_flashdata("alerto", $alert);
                redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }elseif($star=="4" || $star=="4,5"){
                    
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. işletmemiz hakkında fikirleriniz değiştiğinde 5 puan yapmanızı rica ederiz :)",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
                elseif($star=="3" || $star=="3,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. Sizlere daha iyi hizmet verebilmemiz için bizlere fikirlerinizi iletiniz.",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                    
                }
                elseif($star=="2" || $star=="2,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. işletmemiz hakkında çok iyi düşünmediğinizi görüyorum. Sizleri kıracak bir şey mi yaptık :(",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alerto", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
                elseif($star=="1" || $star=="1,5" || $star=="0,5"){
                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Görüşleriniz Bizim için önemli. ".$star." yıldız verdiğiniz için teşekkür ederiz. İşletmemiz hakkında iyi bir fikir edinmeniz için sizleri kahve içmeye davet ediyorum. :)",
                        "type"  => "success"
                    );
                    $this->session->set_flashdata("alert", $alert);
                    redirect(htmlspecialchars($_SERVER['HTTP_REFERER']));
                }
            }
         }
     }
    public function news_list(){


        $viewData = new stdClass();
        $viewData->viewFolder = "news_list_v";

        $this->load->model("news_model");

        $viewData->news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "location" =>""
            ), "rank ASC"
        );
         

        $this->load->view($viewData->viewFolder, $viewData);

    }
    
    public function news($url){
        $viewData = new stdClass();
        $viewData->viewFolder = "news_v";
        $this->load->model("comment_model");
        
        $this->load->model("news_model");

        $news = $this->news_model->get(
            array(
                "isActive"  => 1,
                "url"       => $url
            )
        );
    
        if($news){


            $viewData->news = $news;
            

            $viewData->recent_news= $this->news_model->get_all(
                array(
                    "isActive"  => 1,
                    "location"  => "",
                    "id !="     => $news->id
                ), "rank DESC", array("count"   => 4, "start"   => 0)
            );


            /************** viewCount Değerini Arttırma ***********/

            $viewCount = $news->viewCount + 1;
            $this->news_model->update(
                array(
                    "id"    => $news->id
                ),
                array(
                    "viewCount" => $viewCount
                )
            );
            $this->load->model("gallery_model");
            $viewData->images= $this->gallery_model->get_all(
                array(
                    "item_id"     => $news->id
                ), "rank ASC"
            );
            if($news->lastDate!=date("Y-m-d")){
                viewcounter();
            }
            
            $viewData->comments = $this->comment_model->get_all(
            array(
                "isActive"  => 1,
                "news_id"   => $news->id,
                )
            );
            $this->load->model("member_model");
            $viewData->star = $this->member_model->get_all(
            array(
                "news_id"   => $news->id
            )
            );

            $viewData->news->viewCount = $viewCount;
            $viewData->opengraph = true;

            $this->load->view($viewData->viewFolder, $viewData);


        } else {
        yonlendir();
        }

}
    
    public function yorum_al(){
        $viewData = new stdClass();
        $viewData->viewFolder = "news_v";
        $this->load->model("comment_model");
        
        $this->load->library("form_validation");

        // Kurallar yazilir..
        $this->form_validation->set_rules("name", "Ad Soyad", "required|trim");
        $this->form_validation->set_rules("email", "E-posta", "trim|required|valid_email");
        $this->form_validation->set_rules("message", "Mesaj", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        // Form Validation Calistirilir..
        // TRUE - FALSE
        $validate = $this->form_validation->run();
        // Monitör Askısı
        // monitor-askisi
        $data= array(
            "news_id"       =>$this->input->post("news_id"),
            "comment_id"    =>"",
            "name"          =>htmlspecialchars($this->input->post("name")),
            "email"         =>htmlspecialchars( $this->input->post("email")),
            "message"       =>htmlspecialchars( $this->input->post("message")),
            "ip_address"    => "",
            "isActive"      => 0,
            "createdAt"     => date("Y-m-d H:i")
        );
        if($validate){


            $insert = $this->comment_model->add($data);

            if($insert){
                $this->load->model("news_model");
                $news = $this->news_model->get(
                    array(
                        "isActive"  => 1,
                        "id"        =>$this->input->post('news_id')
                    ), "rank ASC"
                );
                $alert = array(
                    "title" => "Tebrikler İşlem Başarılı",
                    "text" => "Yorumunuz başarıyla gönderildi. En kısa süre içerisinde yayınlanacaktır.",
                    "type"  => "success"
                );
                $this->session->set_flashdata("alert", $alert); 
                redirect(base_url("$news->url/"));
                
            } else {
                
                $this->load->model("news_model");
                $news = $this->news_model->get(
                    array(
                        "isActive"  => 1,
                        "id"        =>$this->input->post('news_id')
                    ), "rank ASC"
                );
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Lütfen sistem yöneticisine bildiriniz!",
                    "type"  => "danger"
                );
                $this->session->set_flashdata("alert", $alert); 
                redirect(base_url("$news->url/"));
                
            }

        }else{
                $this->load->model("news_model");
                $news = $this->news_model->get(
                    array(
                        "isActive"  => 1,
                        "id"        =>$this->input->post('news_id')
                    ), "rank ASC"
                );
                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Lütfen alanları kontrol ediniz!",
                    "type"  => "danger"
                );
                $this->session->set_flashdata("alert", $alert); 
                redirect(base_url("$news->url/"));
        }
        
    
    
    }



    // SABİT SAYFALAR ABOUT
    public function about_us(){


        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "about";

        $this->load->model("settings_model");
        
        $this->load->model("service_model");
    
        
        $this->load->model("news_model");
    

        $services = $this->service_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "Location"  => ""
            ), "rank DESC", array("start" => 0, "count" => 3)
        );

    


    
        $viewData->services     = $services;
    
        $viewData->news_list = $news_list;

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }
    public function firmamiz(){


        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "firmamiz";

        $this->load->model("settings_model");
        
        $this->load->model("service_model");
        $this->load->model("portfolio_model");
        $this->load->model("brand_model");
       
        $viewData->brands= $this->brand_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        
        $viewData->portfolio= $this->portfolio_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        
        $this->load->model("news_model");
    

        $services = $this->service_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "Location"  => ""
            ), "rank DESC", array("start" => 0, "count" => 3)
        );

    


    
        $viewData->services     = $services;
    
        $viewData->news_list = $news_list;

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    // SABİT SAYFALAR Hizmetler
    public function service_list(){


        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "services";

        $this->load->model("settings_model");
        
        $this->load->model("service_model");
    
        
        $this->load->model("news_model");
    

        $services = $this->service_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "Location"  => ""
            ), "rank DESC", array("start" => 0, "count" => 3)
        );

    


    
        $viewData->services     = $services;
    
        $viewData->news_list = $news_list;

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function referanslar($category_id = null)
    {
        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "referanslar";
    
        $this->load->model("portfolio_model");
        $this->load->model("portfolio_category_model");
    
        // Kategorileri çekme
        $viewData->categories = $this->portfolio_category_model->get_all(array("isActive" => 1));
    
        // İlk yüklemede tüm portföyleri veya seçilen kategoriyi gösterme
        if ($category_id) {
            $viewData->portfolio = $this->portfolio_model->get_all(
                array("isActive" => 1, "category_id" => $category_id), // Dikkat: category yerine category_id kullanılıyor
                "rank ASC"
            );
        } else {
            $viewData->portfolio = $this->portfolio_model->get_all(
                array("isActive" => 1),
                "rank ASC"
            );
        }
    
        $viewData->category_id = $category_id; // Seçili kategori id

    // Görünümü yükleme
    $this->load->view($viewData->viewFolder, $viewData);

}

public function get_filtered_portfolio($category_id = null)
{
    $this->load->model("portfolio_model");

    $filter = array("isActive" => 1);
    if ($category_id && $category_id !== 'all') {
        $filter["category_id"] = $category_id;
    }

    $portfolio = $this->portfolio_model->get_all($filter, "rank ASC");

    if (!empty($portfolio)) {
        echo json_encode(array("status" => "success", "data" => $portfolio));
    } else {
        echo json_encode(array("status" => "error", "message" => "Bu kategoriye ait proje bulunamadı."));
    }
}




    
    // SABİT SAYFALAR Hizmetler
    public function testimonial(){
        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "testimonial";
        $this->load->model("settings_model");
        $this->load->model("testimonial_model");
    
        $testimonial = $this->testimonial_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $viewData->testimonial     = $testimonial;
        $viewData->settings = $this->settings_model->get();
        $this->load->view($viewData->viewFolder, $viewData);
    }
     // SABİT SAYFALAR RAndevu
     public function booking(){


        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "booking";

        $this->load->model("settings_model");
        
        $this->load->model("service_model");
    
        
        $this->load->model("news_model");
    

        $services = $this->service_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );
        $news_list = $this->news_model->get_all(
            array(
                "isActive"  => 1,
                "Location"  => ""
            ), "rank DESC", array("start" => 0, "count" => 3)
        );

    


    
        $viewData->services     = $services;
    
        $viewData->news_list = $news_list;

        $viewData->settings = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);

    }
    // SABİT SAYFALAR CONTACT
    public function contact(){

        $viewData = new stdClass();
        $viewData->viewFolder = "static_v";
        $viewData->subViewFolder = "contact";
        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function sitemap()	{
        header("Content-Type:text/xml");
        $this->load->model("product_model");
        $this->load->model("product_category_model");
        $this->load->model("pages_model");
        $this->load->model("news_model");
        $product= $this->product_model->get_all(
            array("isActive"=>1), "rank ASC"
        ); 
        
        echo '<?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 
         http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';
         echo '
        <url>
            <loc>'.base_url().'</loc>
            <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
            <priority>1.00</priority>
        </url>
        
        ';
        $pps = array("hakkimizda","referanslar","iletisim");
        foreach($pps as $pp){
    
         echo '
            <url>
                <loc>'.base_url().$pp.'/</loc>
                <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
                <priority>1.00</priority>
            </url>
            
            ';
        }
        // Anasayfamızı yazalım sitemapimizin başına
        
     
           //Kategoriler
    /*
        $category= $this->product_category_model->get_all(
            array("isActive"=>1), "rank ASC"
        );

        
        foreach($category as $categori){

           
                echo '
                <url>
                    <loc>'.base_url().$categori->url."/".'</loc>
                    <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
                    <priority>1.00</priority>
                </url>
                
                ';
          
        }
        
          // Ürünler 
        foreach($product as $pro){
            
                     
            echo '
            <url>
                <loc>'.base_url().$pro->url."/".'</loc>
                <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
                <priority>1.00</priority>
            </url>
            
            ';
        }
    */
      //Blog yazıları

        $news= $this->news_model->get_all(
            array("isActive"=>1), "rank ASC"
        );

        
        foreach($news as $new){

           
                echo '
                <url>
                    <loc>'.base_url("").$new->url."/".'</loc>
                    <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
                    <priority>1.00</priority>
                </url>
                
                ';
          
        }
        
        
         //Pages Yazıları - Öenmli olmayanları sitemepte göndermemek gerekir ama no index olarak belirtilcek zaten

        $pages= $this->pages_model->get_all(
            array("isActive"=>1), "rank ASC"
        );

        /*
        foreach($pages as $page){

           
                echo '
                <url>
                    <loc>'.base_url("").$page->url."/".'</loc>
                    <lastmod>'.date("Y-m-d")."T".date("H:i:s+00:00").'</lastmod>
                    <priority>1.00</priority>
                </url>
                
                ';
          
        }*/
     
        echo '</urlset>';
        exit;

    }
}
