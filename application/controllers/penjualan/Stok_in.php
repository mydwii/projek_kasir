<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Stok_in extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('auth');
        }
        $this->load->model(['item_m', 'stok_m']);
    }
    public function index()
    {
        $this->db->select('stok.id_stok, item.id_item, stok.kode_produk, item.nama as item_nama, jumlah, tanggal, detail, supplier.nama as supplier_nama, user.username', false);
        $this->db->from('stok');
        $this->db->join('item', 'stok.kode_produk = item.kode_produk');
        $this->db->join('user', 'stok.id_user = user.id_user');
        $this->db->join('supplier', 'stok.kode_supplier = supplier.kode_supplier', 'left');
        $this->db->where('type', 'in');
        $this->db->order_by('id_stok', 'desc');
        $stok = $this->db->get()->result_array();
        $this->db->select('item.*, unit as unit');
        $this->db->from('item');
        $this->db->join('unit', 'unit.id_unit = item.id_unit');
        $this->db->order_by('kode_produk', ' ASC');
        $item = $this->db->get()->result_array();
        $data = array(
            'stok'  => $stok,
            'item' => $item,
            'supplier' =>  $this->db->get('supplier')->result_array(),
        );
        $this->template->load('template', 'penjualan/stok_in', $data);
    }
    public function simpan()
    {
        $data = array(
            'tanggal' => $this->input->post('tanggal'),
            'kode_produk' => $this->input->post('kode_produk'),
            'type' => 'in',
            'detail' => $this->input->post('detail'),
            'kode_supplier' => $this->input->post('kode_supplier'),
            'jumlah' => $this->input->post('jumlah'),
            'id_user' =>  $this->session->userdata('id_user'),
        );
        $this->db->insert('stok', $data);
        $this->item_m->update_stock_in($data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
    </div>');
        redirect('penjualan/stok_in');
    }
    public function delete_data()
    {
        $id_stok = $this->uri->segment(4);
        $id_item = $this->uri->segment(5);

        // Dapatkan data stok
        $stok_data = $this->stok_m->get($id_stok)->row();

        // Periksa apakah hasilnya tidak null sebelum mengakses propertinya
        if ($stok_data) {
            $jumlah = $stok_data->jumlah;

            // Persiapkan data untuk pembaruan
            $data = ['jumlah' => $jumlah, 'id_item' => $id_item];

            // Perbarui stock_out di model item_m
            $this->item_m->hapus_stock_in($data);

            // Hapus data stok
            $this->stok_m->del($id_stok);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Berhasil Menghapus..
        </div>');
            redirect('penjualan/stok_in');
        }
    }
}
