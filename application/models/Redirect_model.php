<?php

class Redirect_model extends CI_Model
{

    public $tableName = "redirect";

    public function __construct()
    {
        parent::__construct();

    }

    public function get($where = array())
    {
        return $this->db->where($where)->get($this->tableName)->row();
    }
}
