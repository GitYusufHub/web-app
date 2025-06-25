<?php
class Team_model extends CI_Model {

    public function __construct() {
        $this->load->database(); // Veritabanını yükle
    }

    // Tüm ekip üyelerini getir
    public function get_team_members() {
        // Sorguyu doğrudan SQL ile yapıyoruz
        $query = $this->db->query("SELECT * FROM team_members WHERE isActive = 1 ORDER BY rank ASC");
        return $query->result_array(); // Veriyi dizi olarak döndür
    }
}
?>
