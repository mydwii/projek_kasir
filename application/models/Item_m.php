<?php
defined('BASEPATH') or exit('No direct script access allowed');

class item_m extends CI_Model
{
    public function get($id = null)
    {
        $this->db->select('item.*, categori as categori, unit as unit');
        $this->db->from('item');
        $this->db->join('categori', 'categori.id_categori = item.id_categori');
        $this->db->join('unit', 'unit.id_unit = item.id_unit');
        if ($id != null) {
            $this->db->order_by('kode_produk', ' ASC');
        }
    }
    // Di dalam method update_stock_in di model
    public function update_stock_in($data)
    {
        $jumlah = $data['jumlah'];
        $id = $data['kode_produk'];
        $sql = "UPDATE item SET stok = stok + '$jumlah' WHERE kode_produk = '$id'";
        $this->db->query($sql);
    }
    public function hapus_stock_out($data)
    {
        $jumlah = $data['jumlah'];
        $id = $data['id_item'];
        $sql = "UPDATE item SET stok = stok + '$jumlah' WHERE id_item = '$id'";
        $this->db->query($sql);
    }
    public function hapus_stock_in($data)
    {
        $jumlah = $data['jumlah'];
        $id = $data['id_item'];
        $sql = "UPDATE item SET stok = stok - '$jumlah' WHERE id_item = '$id'";
        $this->db->query($sql);
    }
    function update_stock_out($data)
    {
        $jumlah = $data['jumlah'];
        $id = $data['kode_produk'];
        $sql = "UPDATE item SET stok = stok - '$jumlah' WHERE kode_produk = '$id'";
        $this->db->query($sql);
    }
}
