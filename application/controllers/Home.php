<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =  '$tanggal'");
		$hari_ini = $this->db->get()->row()->total;

		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =  '$tanggal'");
		$transaksi = $this->db->count_all_results();

		$produk = $this->db->from('penjualan')->count_all_results();

		$nama_jigeum = date('M');
		$nama_1 =  date('M', strtotime("-1 Months"));
		$nama_2 =  date('M', strtotime("-2 Months"));
		$nama_3 =  date('M', strtotime("-3 Months"));
		$nama_4 =  date('M', strtotime("-4 Months"));

		$tanggal = date('Y-m', strtotime("-1 Months"));
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
		$bulan_1 = $this->db->get()->row()->total;

		$tanggal = date('Y-m', strtotime("-2 Months"));
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
		$bulan_2 = $this->db->get()->row()->total;

		$tanggal = date('Y-m', strtotime("-3 Months"));
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
		$bulan_3 = $this->db->get()->row()->total;

		$tanggal = date('Y-m', strtotime("-4 Months"));
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
		$bulan_4 = $this->db->get()->row()->total;

		$tanggal = date('Y-m');
		$this->db->select('sum(total_harga) as total');
		$this->db->from('penjualan')->where("DATE_FORMAT(tanggal, '%Y-%m') =  '$tanggal'");
		$bulan_ini = $this->db->get()->row()->total;

		$data = array(
			'hari_ini' => $hari_ini,
			'bulan_ini' => $bulan_ini,
			'transaksi' => $transaksi,
			'produk' => $produk,
			'nama_jigeum' => $nama_jigeum,
			'nama_1' => $nama_1,
			'nama_2' => $nama_2,
			'nama_3' => $nama_3,
			'nama_4' => $nama_4,
			'bulan_1' => $bulan_1,
			'bulan_2' => $bulan_2,
			'bulan_3' => $bulan_3,
			'bulan_4' => $bulan_4,
			'sering' => $this->db->select('item.nama, item.harga, sum(detail_penjualan.jumlah) as jumlah')->from('item')->join('detail_penjualan', 'item.id_item = detail_penjualan.id_produk')->group_by('item.nama, item.id_item,')->order_by('jumlah', 'desc')->limit(5)->get()->result(),
		);
		$this->template->load('template', 'dashboard', $data);
	}
}
