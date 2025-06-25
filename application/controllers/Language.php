<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {
    public function switchLanguage($language = 'en') {
        $supportedLanguages = ['tr', 'en', 'fr'];
        
        if (in_array($language, $supportedLanguages)) {
            $this->session->set_userdata('site_language', $language);
        } else {
            $this->session->set_userdata('site_language', 'en');
        }

        // Varsayılan sayfaya yönlendirme (referer boşsa ana sayfa)
        $redirectUrl = $_SERVER['HTTP_REFERER'] ?? base_url();
        redirect($redirectUrl);
    }
}
