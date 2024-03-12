<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('level') <> 'Admin') {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('user'); {
            $this->db->order_by('nama', ' ASC');
            $user = $this->db->get()->result_array();
            $data = array(
                'user'  => $user,
            );
            $this->template->load('template', 'user_index', $data);
        }
    }
    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Username sudah dipakai.
        </div>');
            redirect('user');
        }
        $data = array(
            'username' => $this->input->post('username'),
            'nama' => $this->input->post('nama'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
        );
        $this->db->insert('user', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
    </div>');
        redirect('user');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_user' => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('user');
    }
    public function update()
    {
        $where = array(
            'id_user' => $this->input->post('id_user')
        );
        $data = array(
            'nama' => $this->input->post('nama')
        );
        $this->db->update('user', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil diganti..
    </div>');
        redirect('user');
    }
}
