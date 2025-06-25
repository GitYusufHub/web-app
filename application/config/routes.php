<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['404_override'] = 'my404/index';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'home';
// Varsayılan Sayfalar
$route["hakkimizda"]        = "home/about_us";
$route["hizmetler"]         = "home/service_list";
$route["randevu"]           = "home/booking";
$route["yorumlar"]          = "home/testimonial";
$route["iletisim"]          = "home/contact";
$route["mesaj-gonder"]      = "home/send_contact_message";
$route["abone-ol"]          = "home/make_me_member";
$route["yardim"]            = "home/yardim";
$route["ara"]               = "home/sorgula";
$route["gonder"]            = "home/gonder";
$route["sitemap.xml"]       = "home/sitemap";
$route["blog"]              = "home/news_list";
$route["yorumla"]           = "home/yorum_al";
$route["urunler"]           = "home/urunler";
$route["referanslar"]       = "home/referanslar";
$route["yorumlar"]          = "home/yorumlar";
$route["firmamiz"]          = "home/firmamiz";


//$route["(:any)"]          = "home/product_detail/$1";
//$route["kategori/(:any)"] = "home/category/$1";
$route["(:any)"]            = "home/news/$1"; //direk url en sonda olur
/*
require_once(BASEPATH .'database/DB.php');
$db =& DB();
$query = $db->get('routes');
$result = $query->result();

// echo"<pre>";print_r($result);exit;
foreach( $result as $row )
{
    $route[ $row->url ]                 = $row->controller;
    $route[ $row->url.'/(:any)' ]         = $row->controller;
    $route[ $row->controller ]           = $row->controller;
    $route[ $row->controller.'/(:any)' ]   = $row->controller;
}
*/

