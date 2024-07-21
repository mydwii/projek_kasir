<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_m');
    }
    public function index()
    {
        $data = array(
            'judul_halaman' => 'Ganti Password',
            'controller' => $this->uri->segment(2),
            'pengguna' => $this->db->get_where('user', array('id_user' => $this->session->userdata('id_user')))->row(),
        );
        $this->template->load('template', 'password', $data);
    }
    public function ubahpass()
    {
        $user = $this->db->get_where('user', ['id_user' => $this->session->userdata('id_user')])->row_array();
        $password  = md5($this->input->post('password0'));
        $newpassword = $this->input->post('newpassword');
        $renewpassword = $this->input->post('renewpassword');

        if ($password != $user['password']) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Password Lama Salah Coba Lagi.
        </div>');
            redirect('password');
        } else if ($password == $newpassword) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Password baru harus berbeda dengan yang lama.
        </div>');
            redirect('password');
        } else if ($newpassword != $renewpassword) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Password baru tidak cocok.
        </div>');
            redirect('password');
        } else {
            $this->db->set('password', md5($newpassword));
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->update('user');
            $this->session->set_flashdata('alert', ' <div class="alert alert-success alert-dismissible alert-mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Success Password berhasil diubah
        </div>');
            redirect('auth');
        }
    }
}
