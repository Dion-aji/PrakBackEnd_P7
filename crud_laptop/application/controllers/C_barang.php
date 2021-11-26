<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_barang');
	}

	public function index()
	{
		$data['v_edit_barang'] = $this->M_barang->get_brg();
		$data['c_barang']  = $this->M_barang->count_barang();
		$this->load->view('index',$data);
	}

	public function simpan_data()
	{
		$this->M_barang->simpan_data();
		$data['v_edit_barang'] = $this->M_barang->get_brg();
		$data['c_barang']  = $this->M_barang->count_barang();
		$this->load->view('index',$data);
	}

	public function edit_data($id)
	{
		$data['data']   = $this->M_barang->get_edit_data($id);
		$data['v_edit_barang']    = $this->M_barang->get_brg();
		$data['c_barang']  = $this->M_barang->count_barang();
		$this->load->view('V_edit_barang',$data);
	}

	public function eksekusi_edit()
	{
		$this->M_barang->eksekusi_edit();
	}

	public function hapus_data($id)
	{
		$this->M_barang->hapus_data($id);
	}

}
?>
