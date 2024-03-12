<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Unit extends CI_Controller
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
        $this->db->from('unit'); {
            $this->db->order_by('unit', ' ASC');
            $unit = $this->db->get()->result_array();
            $data = array(
                'unit'  => $unit,
            );
            $this->template->load('template', 'produk/unit', $data);
        }
    }

    public function simpan()
    {
        $this->db->from('unit');
        $this->db->where('unit', $this->input->post('unit'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! unit sudah dipakai.
    </div>');
            redirect('produk/unit');
        }
        $data = array(
            'unit' => $this->input->post('unit'),
        );
        $this->db->insert('unit', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
</div>');
        redirect('produk/unit');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_unit' => $id
        );
        $this->db->delete('unit', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('produk/unit');
    }
    public function update()
    {
        $where = array(
            'id_unit' => $this->input->post('id_unit')
        );
        $data = array(
            'unit' => $this->input->post('unit'),
        );
        $this->db->update('unit', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil diganti..
    </div>');
        redirect('produk/unit');
    }
}
