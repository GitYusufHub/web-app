<?php

class Pages_model extends CI_Model
{
    public $tableName = "pages";

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Belirli bir kayıt döndürür
     * @param array $where Koşul dizisi
     * @return object|null Tek bir kayıt nesnesi veya null
     */
    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }

    /**
     * Tüm kayıtları döndürür
     * @param array $where Koşul dizisi
     * @param string $order Sıralama kriteri
     * @param string $group Gruplama kriteri
     * @return array Tüm kayıtları içeren dizi
     */
    public function get_all($where = array(), $order = "id ASC", $group = "")
    {
        if (!empty($group)) {
            $this->db->group_by($group);
        }
        return $this->db->where($where)->order_by($order)->get($this->tableName)->result();
    }

    /**
     * Yeni bir kayıt ekler
     * @param array $data Eklenecek veri dizisi
     * @return bool Başarı durumu
     */
    public function add($data = array())
    {
        return $this->db->insert($this->tableName, $data);
    }

    /**
     * Belirli bir kaydı günceller
     * @param array $where Güncellenecek kaydı belirten koşul dizisi
     * @param array $data Güncelleme verisi
     * @return bool Başarı durumu
     */
    public function update($where = array(), $data = array())
    {
        return $this->db->where($where)->update($this->tableName, $data);
    }

    /**
     * Belirli bir kaydı siler
     * @param array $where Silinecek kaydı belirten koşul dizisi
     * @return bool Başarı durumu
     */
    public function delete($where = array())
    {
        return $this->db->where($where)->delete($this->tableName);
    }
}
