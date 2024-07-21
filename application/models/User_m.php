<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{

    public function update()
    {
        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $data = array(
            'nama' => $this->input->post('nama')
        );
        $this->db->update('user', $data, $where);
    }

    public function deleteselected($check)
    {
        $this->db->where_in('id_saran', $check);
        return $this->db->delete('saran');
    }
}
