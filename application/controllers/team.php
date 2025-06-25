<?php
class Team extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Team_model'); // Modeli yükle
    }

    public function index() {
        // Modelden veriyi al
        $data['team_members'] = $this->Team_model->get_team_members();

        // Veriyi test etmek için geçici olarak ekrana yazdırın
        echo "<pre>";
        print_r($data['team_members']);
        echo "</pre>";
        // exit(); // Bu satırı test sırasında aktif edin, ardından kaldırabilirsiniz

        // Görünüm dosyasını yükle ve veriyi gönder
        $this->load->view('home_v/team', $data);
    }
}
?>
