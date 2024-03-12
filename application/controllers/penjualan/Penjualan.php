<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penjualan extends CI_Controller
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
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m-d');
        $this->db->select('*');
        $this->db->from('penjualan a');
        $this->db->order_by('a.tanggal', ' DESC');
        $this->db->where('a.tanggal', $tanggal);
        $this->db->join('pelanggan b', 'a.id_pelanggan = b.id_pelanggan', 'left');
        $penjualan = $this->db->get()->result_array();
        $this->db->from('pelanggan'); {
            $this->db->order_by('nama', ' ASC');
            $pelanggan = $this->db->get()->result_array();
            $data = array(
                'penjualan' => $penjualan,
                'pelanggan' =>  $pelanggan
            );
            $this->template->load('template', 'penjualan/penjualan', $data);
        }
    }
    public function transaksi($id_pelanggan)
    {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m');
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
        $jumlah = $this->db->count_all_results();
        $nota = date('ymd') . $jumlah + 1;
        $this->db->from('item')->where('stok >', 0)->order_by('nama', 'ASC');
        $item = $this->db->get()->result_array();
        $this->db->from('pelanggan')->where('id_pelanggan', $id_pelanggan);
        $nama = $this->db->get()->row()->nama;
        $this->db->from('detail_penjualan');
        $this->db->join('item', 'detail_penjualan.id_produk = item.id_item', 'left');
        $this->db->where('kode_penjualan', $nota);
        $detail = $this->db->get()->result_array();
        $this->db->from('temp');
        $this->db->join('item', 'temp.id_produk = item.id_item', 'left');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_pelanggan', $id_pelanggan);
        $temp = $this->db->get()->result_array();
        $data = array(
            'nota' => $nota,
            'item' => $item,
            'id_pelanggan' => $id_pelanggan,
            'nama' => $nama,
            'detail' => $detail,
            'temp' => $temp,
        );
        $this->template->load('template', 'penjualan/transaksi_penjualan', $data);
    }
    public function addtemp()
    {
        $this->db->from('item')->where('id_item', $this->input->post('id_produk'));
        $stok_lama = $this->db->get()->row()->stok;
        $this->db->from('temp');
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_pelanggan', $this->input->post('id_pelanggan'));
        $cek = $this->db->get()->result_array();
        if ($stok_lama < $this->input->post('jumlah')) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Maaf!! Stok barang tidak mencukupii..
        </div>');
        } else if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Maaf!! Barang sudah terpilih
        </div>');
        } else {
            $data = array(
                'id_pelanggan' => $this->input->post('id_pelanggan'),
                'id_produk' => $this->input->post('id_produk'),
                'jumlah' => $this->input->post('jumlah'),
                'id_user' => $this->session->userdata('id_user'),
            );
            $this->db->insert('temp', $data);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
        </div>');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
    public function tambah_keranjang()
    {
        $this->db->from('detail_penjualan');
        $this->db->where('id_produk', $this->input->post('id_produk'));
        $this->db->where('kode_penjualan', $this->input->post('kode_penjualan'));
        $cek = $this->db->get()->result_array();
        if ($cek <> NULL) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Maaf!! Barang sudah terpilih
        </div>');
            redirect($_SERVER["HTTP_REFERER"]);
        }
        $this->db->from('item')->where('id_item', $this->input->post('id_produk'));
        $harga = $this->db->get()->row()->harga;
        $this->db->from('item')->where('id_item', $this->input->post('id_produk'));
        $stok_lama = $this->db->get()->row()->stok;
        $stok_baru = $stok_lama - ($this->input->post('jumlah'));
        $sub_total =  $this->input->post('jumlah') * $harga;
        $data = array(
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'id_produk' => $this->input->post('id_produk'),
            'jumlah' => $this->input->post('jumlah'),
            'sub_total' => $sub_total,
        );
        if ($stok_lama >= $this->input->post('jumlah')) {
            $this->db->insert('detail_penjualan', $data);
            $data2 = array('stok' => $stok_baru);
            $where = array('id_item' =>  $this->input->post('id_produk'));
            $this->db->update('item', $data2, $where);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
    </div>');
        } else {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Maaf!! Stok barang tidak mencukupii..
        </div>');
        }
        redirect($_SERVER["HTTP_REFERER"]);
    }
    public function delete_data($id_detail_penjualan, $id_produk)
    {
        $this->db->from('detail_penjualan')->where('id_detail_penjualan', $id_detail_penjualan);
        $jumlah = $this->db->get()->row()->jumlah;
        $this->db->from('item')->where('id_item', $id_produk);
        $stok_lama = $this->db->get()->row()->stok;
        $stok_baru = $jumlah + $stok_lama;
        $data2 = array('stok' => $stok_baru);
        $where = array('id_item' => $id_produk);
        $this->db->update('item', $data2, $where);
        $where = array(
            'id_detail_penjualan' => $id_detail_penjualan
        );
        $this->db->delete('detail_penjualan', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus dari keranjang..
    </div>');
        redirect($_SERVER["HTTP_REFERER"]);
    }
    public function delete_datatemp($id_temp)
    {
        $where = array(
            'id_temp' => $id_temp
        );
        $this->db->delete('temp', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus dari keranjang..
    </div>');
        redirect($_SERVER["HTTP_REFERER"]);
    }
    public function bayar()
    {
        $data = array(
            'kode_penjualan' => $this->input->post('kode_penjualan'),
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'total_harga' => $this->input->post('total_harga'),
            'id_user' => $this->session->userdata('id_user'),
            'tanggal' => date('Y-m-d'),
        );
        $this->db->insert('penjualan', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! berhasil melakukan pembayaran..
    </div>');
        redirect('penjualan/penjualan/invoice/' . $this->input->post('kode_penjualan'));
    }
    public function bayarin()
    {   //pembuatan nota
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date('Y-m');
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
        $jumlah = $this->db->count_all_results();
        $nota = date('ymd') . $jumlah + 1;
        $this->db->from('temp');
        $this->db->join('item', 'temp.id_produk = item.id_item', 'left');
        $this->db->where('id_user', $this->session->userdata('id_user'));
        $this->db->where('id_pelanggan', $this->input->post("id_pelanggan"));
        $temp = $this->db->get()->result_array();
        foreach ($temp as $ab) {
            if ($ab['stok'] < $ab['jumlah']) {
                $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Maaf!! Stok barang tidak mencukupii..
            </div>');
                redirect($_SERVER["HTTP_REFERER"]);
            }
            //input detail
            $data = array(
                'kode_penjualan' => $nota,
                'id_produk' => $ab['id_produk'],
                'jumlah' => $ab['jumlah'],
                'sub_total' => $ab['jumlah'] * $ab['harga'],
            );
            $this->db->insert('detail_penjualan', $data);
            //update
            $data2 = array('stok' => $ab['stok'] - $ab['jumlah']);
            $where = array('id_item' =>  $ab['id_produk']);
            $this->db->update('item', $data2, $where);
            //hapus tabel temp
            $where2 = array('id_pelanggan' =>  $this->input->post('id_pelanggan'), 'id_user' => $this->session->userdata('id_user'));
            $this->db->delete('temp', $where2);
        }
        //input tabel penjualan

        $data = array(
            'kode_penjualan' => $nota,
            'id_pelanggan' => $this->input->post('id_pelanggan'),
            'total_harga' => $this->input->post('total_harga'),
            'id_user' => $this->session->userdata('id_user'),
            'tanggal' => date('Y-m-d'),
        );
        $this->db->insert('penjualan', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! berhasil melakukan pembayaran..
    </div>');
        redirect('penjualan/penjualan/invoice/' . $nota);
    }
    public function invoice($kode_penjualan)
    {
        $this->db->select('*');
        $this->db->from('penjualan a');
        $this->db->order_by('a.tanggal', ' DESC');
        $this->db->where('a.kode_penjualan', $kode_penjualan);
        $this->db->join('pelanggan b', 'a.id_pelanggan = b.id_pelanggan', 'left');
        $penjualan = $this->db->get()->row();
        $this->db->from('penjualan a');
        $this->db->order_by('a.tanggal', ' DESC');
        $this->db->where('a.kode_penjualan', $kode_penjualan);
        $this->db->join('user c', 'a.id_user = c.id_user', 'left');
        $jual = $this->db->get()->row();
        $this->db->from('detail_penjualan');
        $this->db->join('item', 'detail_penjualan.id_produk = item.id_item', 'left');
        $this->db->where('kode_penjualan', $kode_penjualan);
        $detail = $this->db->get()->result_array();
        $data = array(
            'nota' => $kode_penjualan,
            'penjualan' => $penjualan,
            'detail' => $detail,
            'jual' => $jual
        );
        $this->template->load('template', 'penjualan/invoice', $data);
    }
}
