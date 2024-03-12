<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->from('stok');
        if ($id != null) {
            $this->db->where('id_stok', $id);
        }
        $query = $this->db->get();
        return $query;
    }
    public function del($id)
    {
        $this->db->where('id_stok', $id);
        $this->db->delete('stok');
    }
}
