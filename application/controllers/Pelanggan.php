<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelanggan extends CI_Controller
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
        $this->db->from('pelanggan'); {
            $this->db->order_by('nama', ' ASC');
            $pelanggan = $this->db->get()->result_array();
            $data = array(
                'pelanggan'  => $pelanggan,
            );
            $this->template->load('template', 'pelanggan', $data);
        }
    }

    public function simpan()
    {
        $this->db->from('pelanggan');
        $this->db->where('nama', $this->input->post('nama'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! Username sudah dipakai.
    </div>');
            redirect('pelanggan');
        }
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
        );
        $this->db->insert('pelanggan', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
</div>');
        redirect('pelanggan');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_pelanggan' => $id
        );
        $this->db->delete('pelanggan', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('pelanggan');
    }
    public function update()
    {
        $where = array(
            'id_pelanggan' => $this->input->post('id_pelanggan')
        );
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'telp' => $this->input->post('telp'),
        );
        $this->db->update('pelanggan', $data, $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil diganti..
    </div>');
        redirect('pelanggan');
    }
    public function riwayat($id_pelanggan)
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->from('pelanggan');
        $this->db->order_by('tanggal', 'desc');
        $this->db->join('penjualan', 'pelanggan.id_pelanggan = penjualan.id_pelanggan');
        $this->db->join('item', 'pelanggan.id_pelanggan = penjualan.id_pelanggan');
        $this->db->where('pelanggan.id_pelanggan', $id_pelanggan);

        $detail = $this->db->get()->result_array();
        $data = array(
            'detail'  => $detail,
        );
        $this->template->load('template', 'riwayat_pelanggan', $data);
    }
}
