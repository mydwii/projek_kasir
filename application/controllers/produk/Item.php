<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('auth');
        }
        $this->load->model('item_m');
    }
    public function index()
    {
        $this->db->select('item.*, categori as categori, unit as unit');
        $this->db->from('item');
        $this->db->join('categori', 'categori.id_categori = item.id_categori');
        $this->db->join('unit', 'unit.id_unit = item.id_unit');
        $this->db->order_by('kode_produk', ' ASC');
        $item = $this->db->get()->result_array();
        $data = array(
            'item'  => $item,
            'unit' => $this->db->get('unit')->result_array(),
            'categori' => $this->db->get('categori')->result_array(),
        );
        $this->template->load('template', 'produk/item', $data);
    }
    public function simpan()
    {
        $this->db->from('item');
        $this->db->where('kode_produk', $this->input->post('kode_produk'));
        $cek = $this->db->get()->result_array();
        if ($cek != NULL) {
            $this->session->set_flashdata('alert', ' <div class="alert alert-danger alert-dismissible alert-mg-b-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Oh maaf! kode produk sudah dipakai.
    </div>');
            redirect('produk/item');
        }
        $data = array(
            'kode_produk' => $this->input->post('kode_produk'),
            'nama'         => $this->input->post('nama'),
            'stok'         => $this->input->post('stok'),
            'id_unit'      => $this->input->post('id_unit'),
            'id_categori' =>  $this->input->post('id_categori'),
            'harga' => $this->input->post('harga'),
            'images' => 'default.jpg',
        );
        $this->db->insert('item', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil disimpan..
</div>');
        redirect('produk/item');
    }
    public function delete_data($id)
    {
        $where = array(
            'id_item' => $id
        );
        $this->db->delete('item', $where);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Data berhasil dihapus..
    </div>');
        redirect('produk/item');
    }
    public function update()
    {
        $data = array(
            'kode_produk' => $this->input->post('kode_produk'),
            'nama'         => $this->input->post('nama'),
            'id_unit'      => $this->input->post('id_unit'),
            'id_categori' =>  $this->input->post('id_categori'),
            'harga' => $this->input->post('harga'),
        );
        $id_item = $this->input->post('id_item');

        // Check if there is a file uploaded
        if (!empty($_FILES['images']['name'])) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/notika-master/uploads/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('images')) {
                $old_image = $this->db->get_where('item', array('id_item' => $id_item))->row('images');
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/notika-master/uploads/' . $old_image);
                }

                $new_image = $this->upload->data('file_name');
                $data['images'] = $new_image; // Add the new image to the data array
            } else {
                echo $this->upload->display_errors();
                return; // Stop execution if there is an error in uploading
            }
        }

        // Update the data in the database
        $this->db->where('id_item', $id_item);
        $this->db->update('item', $data);
        $this->session->set_flashdata('alert', '<div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="notika-icon notika-close"></i></span></button> Well done! Berhasil Update..
    </div>');
        redirect('produk/item');
    }
}
