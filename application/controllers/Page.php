<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
    public function index() {
        $targetLanguage = $this->session->userdata('site_language') ?? 'tr';

        $originalText = "Bu bir test cümlesidir.";

        $translatedText = ($targetLanguage === 'tr') ? $originalText : translateText($originalText, 'tr', $targetLanguage);

        $data['translatedText'] = $translatedText;
        $this->load->view('page_view', $data);
    }
}

