<?php

class Guru_model extends CI_Model
{
    private $_table = "guru";

    public function viewGuru()
    {
        return $this->db->get($this->_table)->result_array();
    }
}