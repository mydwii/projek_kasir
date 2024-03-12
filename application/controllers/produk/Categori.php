<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('categori'); {
            $this->db->order_by('categori', ' ASC');
            $categori = $this->db->get()->result_array();
            $data = array(
                'cate'  => $categori,
            );
            $this->template->load('template', 'produk/categori', $data);
        }
    }

    public function simpan()
    {
        $this->db->from('categori');
        $this->db->where('categori', $this->input->post('categori'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! categori sudah dipakai.
    </div>');
            redirect('produk/categori');
        }
        $data = array(
            'categori' => $this->input->post('categori'),
        );
        $this->db->insert('categori', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
</div>');
        redirect('produk/categori');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_categori' => $id
        );
        $this->db->delete('categori', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('produk/categori');
    }
    public function update()
    {
        $where = array(
            'id_categori' => $this->input->post('id_categori')
        );
        $data = array(
            'categori' => $this->input->post('categori'),
        );
        $this->db->update('categori', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil diganti..
    </div>');
        redirect('produk/categori');
    }
}
