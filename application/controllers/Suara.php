<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suara extends CI_Controller
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
        $this->db->from('suara_18');
        $this->db->order_by('nama_tps_18', ' ASC');
        $suara = $this->db->get()->result_array();
        $this->db->select('sum(no1_18) as kandidat1');
        $this->db->from('suara_18');
        $kandidat1 = $this->db->get()->row()->kandidat1;
        $this->db->select('sum(no2_18) as kandidat2');
        $this->db->from('suara_18');
        $kandidat2 = $this->db->get()->row()->kandidat2;
        $this->db->select('sum(no3_18) as kandidat3');
        $this->db->from('suara_18');
        $kandidat3 = $this->db->get()->row()->kandidat3;

        $data = array(
            'suara'  => $suara,
            'kandidat1' => $kandidat1,
            'kandidat2' => $kandidat2,
            'kandidat3' => $kandidat3,
            'nama1' => 'Kandidat1',
            'nama2' => 'Kandidat2',
            'nama3' => 'Kandidat3',
        );
        $this->template->load('template', 'suara', $data);
    }
    public function simpan()
    {
        $this->db->from('suara_18');
        $this->db->where('nama_tps_18', $this->input->post('nama_tps_18'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! TPS tersebut sudah menginputkan data Suara
    </div>');
            redirect('suara');
        }
        $data = array(
            'nama_tps_18' => $this->input->post('nama_tps_18'),
            'total_18' => $this->input->post('total_18'),
            'total_sah_18' => $this->input->post('total_sah_18'),
            'total_tidaksah_18' => $this->input->post('total_tidaksah_18'),
            'no1_18' => $this->input->post('no1_18'),
            'no2_18' => $this->input->post('no2_18'),
            'no3_18' => $this->input->post('no3_18'),
        );
        $total = $this->input->post('total_18');
        $total_sah = $this->input->post('total_sah_18');
        $total_tidaksah = $this->input->post('total_tidaksah_18');
        $kandidat_1 = $this->input->post('no1_18');
        $kandidat_2 = $this->input->post('no2_18');
        $kandidat_3 = $this->input->post('no3_18');
        if ($total <> $total_sah + $total_tidaksah) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> maaf! Total Suara Tidak benar.
        </div>');
            redirect('suara');
        } else if ($total_sah <> $kandidat_1 + $kandidat_2 + $kandidat_3) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> maaf! Total Suara sah tidak sama dengan suara  kandidat.
        </div>');
            redirect('suara');
        } else {
            $this->db->insert('suara_18', $data);
            $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data suara berhasil disimpan..
</div>');
            redirect('suara');
        }
    }
}
