<?php

function get_active_user(){

    $t = &get_instance();

    $user = $t->session->userdata("user");

    if($user)
        return $user;
    else
        return false;

}

function get_product_cover_image($product_id){

    $t = &get_instance();

    $t->load->model("product_image_model");

    $cover_image = $t->product_image_model->get(
        array(
            "isCover"       => 1,
            "product_id"    => $product_id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->product_image_model->get(
            array(
                "product_id"    => $product_id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}




function category_title($id){

    $t = &get_instance();

    $t->load->model("product_category_model");

    $categori = $t->product_category_model->get(
        array(
            "id"    => $id

        )
    );

    return $categori? $categori: false ;


}

function get_portfolio_cover_image($id){

    $t = &get_instance();

    $t->load->model("portfolio_image_model");

    $cover_image = $t->portfolio_image_model->get(
        array(
            "isCover"       => 1,
            "portfolio_id"    => $id
        )
    );

    if(empty($cover_image)){

        $cover_image = $t->portfolio_image_model->get(
            array(
                "portfolio_id"    => $id
            )
        );

    }

    return !empty($cover_image) ? $cover_image->img_url : "";

}

function get_settings(){

    $t = &get_instance();

    //    $settings = $t->session->userdata("settings");
    //    if(empty($settings)){

        $t->load->model("settings_model");

        $settings = $t->settings_model->get();

        $t->session->set_userdata("settings", $settings);
    //    }

    return $settings;
}

function send_email($toEmail = "", $subject = "", $message = ""){

    $t = &get_instance();

    $t->load->model("emailsettings_model");

    $email_settings = $t->emailsettings_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

    $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => "\r\n"
    );

    $t->load->library("email", $config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();

}


function get_picture($path = "", $picture = "", $resolution = "50x50"){


    if($picture != ""){

        if(file_exists(FCPATH . "panel/uploads/$path/$resolution/$picture")){
            $picture = base_url("panel/uploads/$path/$resolution/$picture");
        } else {
            $picture = base_url("assets/images/default_image_$resolution.png");

        }

    } else {


        //construction-service-1.jpg
        $picture = base_url("assets/images/default_image_$resolution.png");

    }

    return $picture;

}

function get_gallery_cover_image($folderName){

    $path = "panel/uploads/galleries_v/images/$folderName/350x216";

    if($handle = opendir($path)){
        while(($file = readdir($handle)) !== false){

            if($file != "." & $file != ".."){
                return $file;
            }

        }


    }


}

function get_popup_service($page = ""){

    $t = &get_instance();

    $t->load->model("popup_model");
    $popup = $t->popup_model->get(
        array(
            "isActive"  => 1,
            "page"      => $page
        )
    );

    return (!empty($popup)) ? $popup : false;

}

function get_gallery_by_url($url = ""){

    $t = &get_instance();
    $t->load->model("gallery_model");

    $gallery = $t->gallery_model->get(
        array(
            "isActive"  => 1,
            "url"       => $url
        )
    );

    return ($gallery) ? $gallery : false;

}
function blog_menu(){

    $t = &get_instance();
    $t->load->model("news_model");

    $blog_menu = $t->news_model->get_all(
        array(
            "isActive"  => 1,
            "location"  => ""
        ), "rank DESC", array("start" => 0, "count" => 12)
    );

    return ($blog_menu) ? $blog_menu : false;

}
function get_navbar_menu(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "navbar_menu"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}

function get_footer_menu(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "footer_menu"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}
function get_footer_menu2(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "footer_menu2"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}
function get_footer_menu3(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "footer_menu3"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}
function get_bottom_menu(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "bottom_menu"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}
function get_menu(){

    $t = &get_instance();
    $t->load->model("menu_model");

    $menu = $t->menu_model->get_all(
        array(
            "isActive"  => 1,
            "menu_cat"  => "ana_menu"
        ), "rank ASC"
    );

    return ($menu) ? $menu : false;

}
function get_alt_menu($id){

    $t = &get_instance();
    $t->load->model("menu_alt_model");

    $alt_menu = $t->menu_alt_model->get_all(
        array(
            "top_menu_id"=>$id,
            "isActive"  => 1
            
        ), "rank ASC"
    );

    return ($alt_menu) ? $alt_menu : false;

}
function get_service(){

    $t = &get_instance();
    $t->load->model("service_model");

    $service = $t->service_model->get_all(
        array(
            "isActive"  => 1
        ), "rank ASC", array("start" => 0, "count" => 12)
    );

    return ($service) ? $service : false;

}

function get_testimonials(){

    $t = &get_instance();
    $t->load->model("testimonial_model");

    $test = $t->testimonial_model->get_all(
        array(
            "isActive"  => 1
        ), "rank DESC", array("start" => 0, "count" => 3)
    );

    return ($test) ? $test : false;

}

function get_ip()  
{  
    if (!empty($_SERVER['HTTP_CLIENT_IP']))  
    {  
        $ip=$_SERVER['HTTP_CLIENT_IP'];  
    }  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) //Proxy den bağlanıyorsa gerçek IP yi alır.
     
    {  
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
    else  
    {  
        $ip=$_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  

function get_user_id()  
{  
    $t = &get_instance();
    $id=$t->session->userdata("time"); 
    if($id['time']){
        return $id["time"]; 
    }elseif(get_active_user()){
        $user=get_active_user();
        return $user->id; 
    }elseif(!$id['time']){
        $time=array(
           "time"=> time()
        );
        $t->session->set_userdata("time", $time);

        $id=$t->session->userdata("time"); 
        return $id["time"]; 
        
    }
     
}  


function get_category_menu(){

    $t = &get_instance();
    $t->load->model("product_category_model");

    $category_menu = $t->product_category_model->get_all(
        array(
            "isActive"  => 1,
            "top_cat_id" =>0
        ), "rank ASC"
    );

    return ($category_menu) ? $category_menu : false;

}


function product_alt_count($id){

    $t = &get_instance();
    $t->load->model("product_model");

    $product_alt_count = $t->product_model->get_all(
        array(
            "isActive"  => 1,
            "alt_category_id"  => $id
        )
    );
    $product_alt_count =count($product_alt_count );

    return ($product_alt_count) ? $product_alt_count  : 0;

}
function my_sepet(){

    $t = &get_instance();
    if(isset($_SESSION['urunListesi'])){
        $sepet=$_SESSION['urunListesi'];
        return $sepet;
    }else{
        return false;
    }

}
function sepet_say(){

    $t = &get_instance();
    $t->load->model("sepet_model");
 
    if(isset($_SESSION['urunListesi'])){
        $sepet_say =$_SESSION['urunListesi'];
        $sepet_say=count($sepet_say);
    }else{
        $sepet_say=0;
    }
    

    return ($sepet_say) ? $sepet_say : 0;

}
function product_box($id){

    $t = &get_instance();
    $t->load->model("product_model");

    $product_box = $t->product_model->get(
        array(
            "id" =>$id
        )
    );
   
    return ($product_box) ? $product_box : 0;

}


function product_count($id){

    $t = &get_instance();
    $t->load->model("product_model");

    $product_count = $t->product_model->get_all(
        array(
            "isActive"  => 1,
            "category_id"  => $id
        )
    );
    $product_count=count($product_count);

    return ($product_count) ? $product_count : 0;

}


function get_alt_category_menu($id){

    $t = &get_instance();
    $t->load->model("product_category_model");

    $alt_category_menu = $t->product_category_model->get_all(
        array(
            "top_cat_id"=>$id,
            "isActive"  => 1
            
        ), "rank ASC"
    );

    return ($alt_category_menu) ? $alt_category_menu : false;

}

function is_alt_category($url){

    $t = &get_instance();
    $t->load->model("product_alt_category_model");

    $is_alt_cat= $t->product_alt_category_model->get(array("url"=>$url));

    return ($is_alt_cat) ? $is_alt_cat : false;

}
function is_category($url){

    $t = &get_instance();
    $t->load->model("product_category_model");

    $is_cat= $t->product_category_model->get(array("url"=>$url));

    return ($is_cat) ? $is_cat : false;

}
function is_product($url){

    $t = &get_instance();
    $t->load->model("product_model");

    $is_pro= $t->product_model->get(array("url"=>$url));

    return ($is_pro) ? $is_pro : false;

}
function option_name($id){

    $t = &get_instance();

    $t->load->model("option_model");

    $option = $t->option_model->get(
        array(
            "id"    => $id
        )
    );

    
        return $option;
}
function alt_option_name($id=""){

    $t = &get_instance();

    $t->load->model("option_alt_model");

    $alt_option = $t->option_alt_model->get(
        array(
            "id"    => $id
        )
    );

    
        return ($alt_option->title) ? $alt_option->title : false;
}
function back(){

    return redirect($_SERVER['HTTP_REFERER']);

}


function banners($id=""){

    $t = &get_instance();

    $t->load->model("banners_model");

    $banners = $t->banners_model->get(
        array(
            "id"        => $id,
            "isActive"  =>1
        )
    );
    
    

    
        return ($banners) ? $banners : false;
}

function yonlendir(){

    $t = &get_instance();


    $page_url=ltrim($_SERVER['REQUEST_URI'], "/");
    $page_url1=rtrim($page_url, "/");

    $t->load->model("redirect_model");
    $ss= $t->redirect_model->get(array(
    "old_url"=> $page_url1,
    "isActive" =>1
    ));

    if($ss){
       return redirect(base_url($ss->new_url."/"), 'location', 301);
    }else{
        $t->output->set_status_header('404');
        $viewData = new stdClass();
        $viewData->viewFolder = "static_v/my404";
        $viewData->url= $page_url=$_SERVER['REQUEST_URI'];
      return  $t->load->view($viewData->viewFolder, $viewData);
        
    }
}

function firsatlar(){

    $t = &get_instance();

    $t->load->model("section_model");

    $firsat = $t->section_model->get_all(
        array(
            "title"    => "Fırsatlar",
            "isActive" =>1
        ), "rank ASC" 
    );
        
        return ($firsat) ? $firsat : false;
}

function viewcounter(){
    $t = &get_instance();
    $t->load->model("news_model");
    $news= $t->news_model->get_all();
    foreach($news as $new)
    {
        $t->news_model->update(
            array(
                "id"    => $new->id
            ),
            array(
                "lastViewCount" => $new->viewCount,
                "lastDate" => date("Y-m-d")
            )
        );
    }
}
function encoksatanlar(){

    $t = &get_instance();

    $t->load->model("section_model");

    $encok = $t->section_model->get_all(
        array(
            "title"    => "En Çok Satanlar",
            "isActive" =>1
           
        ), "rank ASC" 
    );
        
        return ($encok) ? $encok : false;
}

function yeniurunler(){

    $t = &get_instance();

    $t->load->model("section_model");

    $yeniurunler = $t->section_model->get_all(
        array(
            "title"    => "Yeni Ürünler",
            "isActive" =>1
        ), "rank ASC" 
    );
        
        return ($yeniurunler) ? $yeniurunler : false;
}
function send_to_me_mail($message){
        $t = &get_instance();
        
        $config = array(
                    "protocol"      => "smtp",
                    "smtp_host"     => "smtp.hostinger.web.tr",
                    "smtp_port"     => "587",
                    "smtp_user"     => "info@112giyim.com",
                    "smtp_pass"      => "700741Halil.q7",
                    "starttls"          => true,
                    "charset"          => "utf-8",
                    "mailtype"          => "html",
                    "wordwrap"          => true,
                    "newline"            =>"\r\n",
                    
        );
        $t->load->library("email", $config);
        $t->email->from("info@112giyim.com", "112 Giyim Mağazacılık");
        $t->email->to("halilulucak@gmail.com");
        $t->email->subject("Mağazanızdan Sipariş Geldi");
        $t->email->message($message);
        
        $send=$t->email->send();
}

function send_to_mail($mail, $head, $message){
        $t = &get_instance();
        
        $config = array(
                    "protocol"      => "smtp",
                    "smtp_host"     => "smtp.hostinger.web.tr",
                    "smtp_port"     => "587",
                    "smtp_user"     => "info@112giyim.com",
                    "smtp_pass"      => "700741Halil.q7",
                    "starttls"          => true,
                    "charset"          => "utf-8",
                    "mailtype"          => "html",
                    "wordwrap"          => true,
                    "newline"            =>"\r\n",
                    
        );
        $t->load->library("email", $config);
        $t->email->from("info@112giyim.com", "112 Giyim Mağazacılık");
        $t->email->to($mail);
        $t->email->subject($head);
        $t->email->message($message);
        
        $send=$t->email->send();
}


function hesapla($x,$y){
    $result=0;
    if ($y <= 0) $y = 1;
    if ($x <= 0) $x = 1;
    
    if($x>$y){
        $result=(($x-$y)/$y)*100;
    }else{
        $result=(($y-$x)/$x)*100;
    }

    return ($result) ? $result : false;
}

function product_puan($id){

    $t = &get_instance();
    $t->load->model("member_model");

    $product_count = $t->member_model->get_all(
        array(
            "product_id"  => $id
        )
    );
    $product_count=count($product_count);

    return ($product_count) ? $product_count : 0;

}

function product_puan_rate($id){

    $t = &get_instance();
    $t->load->model("member_model");

    $product_count = $t->member_model->get_all(
        array(
            "product_id"  => $id
        )
    );
    //print_r($product_count);
  
    $puan=0;
    $sayi=0;
    foreach($product_count as $products){
        $puan=$puan+$products->star;
        $sayi++;
    }
    
    $puan_rate=ceil($puan/$sayi);
    


    return ( $puan_rate) ?  $puan_rate : 0;

}

function comment_count($id){

    $t = &get_instance();
    $t->load->model("comment_model");

    $product_count = $t->comment_model->get_all(
        array(
            "product_id"  => $id
        )
    );
    $product_count=count($product_count);

    return ($product_count) ? $product_count : 0;

}

function text($url){

    $t = &get_instance();
    $t->load->model("text_model");

    $text = $t->text_model->get(
        array(
            "url"  => $url
        )
    );

    return ($text) ? $text : false;

}


// Anasayfadaki Arka Plan Kodlarını Sıkıştırır
function gzipKontrol(){
    $kontrol = str_replace(" ","",strtolower($_SERVER['HTTP_ACCEPT_ENCODING']) );
    $kontrol = explode(",", $kontrol);
    return in_array("gzip", $kontrol);
}
// Anasayfadaki Arka Plan Kodlarını Sıkıştırır
function bs_sil($kaynak){
    //return preg_replace("/\s+/", " ", $kaynak);


    $Search = array(
      '/\s+/',
      '/<!--(.*?)-->/'
    ); # strip whitespaces between = "'

   $Replace = array(" ","");

    return preg_replace($Search, $Replace, $kaynak);
}
// Anasayfadaki Arka Plan Kodlarını Sıkıştırır
function kaynak_presle($kaynak){

    $sayfa_cikti = bs_sil($kaynak);
    if (!gzipKontrol() || headers_sent() )
        return $sayfa_cikti;
    header("Content-Encoding: gzip");
    return gzencode($sayfa_cikti);
}
//END  END Anasayfadaki Arka Plan Kodlarını Sıkıştırır END END