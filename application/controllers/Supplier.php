<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Supplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        if ($this->session->userdata('level') == null) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('supplier'); {
            $this->db->order_by('nama', ' ASC');
            $supplier = $this->db->get()->result_array();
            $data = array(
                'supplier'  => $supplier,
            );
            $this->template->load('template', 'supplier', $data);
        }
    }

    public function simpan()
    {
        $this->db->from('supplier');
        $this->db->where('nama', $this->input->post('nama'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Nama sudah dipakai.
    </div>');
            redirect('supplier');
        }
        $data = array(
            'nama' => $this->input->post('nama'),
            'kode_supplier' => $this->input->post('kode_supplier'),
            'telp' => $this->input->post('telp'),
        );
        $this->db->insert('supplier', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
</div>');
        redirect('supplier');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_supplier' => $id
        );
        $this->db->delete('supplier', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('supplier');
    }
    public function update()
    {
        $where = array(
            'id_supplier' => $this->input->post('id_supplier')
        );
        $data = array(
            'nama' => $this->input->post('nama'),
            'kode_supplier' => $this->input->post('kode_supplier'),
            'telp' => $this->input->post('telp'),
        );
        $this->db->update('supplier', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil diganti..
    </div>');
        redirect('supplier');
    }
    public function riwayat($kode_supplier)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->from('supplier');
        $this->db->order_by('tanggal', 'desc');
        $this->db->join('stok', 'stok.kode_supplier = supplier.kode_supplier');
        $this->db->join('item', 'item.kode_produk = stok.kode_produk');
        $this->db->where('supplier.kode_supplier', $kode_supplier);

        $detail = $this->db->get()->result_array();
        $data = array(
            'detail'  => $detail,
        );
        $this->template->load('template', 'riwayat_supplier', $data);
    }
}
