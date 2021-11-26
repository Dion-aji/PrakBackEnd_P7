<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class M_barang extends CI_Model {

		function __construct()
		{
			parent :: __construct();
		}

		public function get_brg()
		{
			$data = $this->db->query("SELECT * FROM table_barang");
			return $data->result();
		}

		public function get_edit_data($id_barang)
		{
			$data = $this->db->query("SELECT * FROM table_barang WHERE id_barang='$id_barang'");
			return $data->result();
		}

		public function count_barang()
		{
			$data = $this->db->query("SELECT * FROM table_barang");
			return $data->num_rows();
		}

		public function simpan_data()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '1920';
			$config['max_height']    = '1080';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();

			$data = array(
				'id_barang'    => " ",
				'email'        => $this->input->post('email'),
				'nama_laptop'  => $this->input->post('nama_laptop'),
				'asal'  			 => $this->input->post('asal'),
				'harga'        => $this->input->post('harga'),
				'merek'        => $this->input->post('merek'),
				'processor'    => $this->input->post('processor'),
				'tanggal'      => $this->input->post('tanggal'),
				'deskripsi'    => $this->input->post('deskripsi'),

				'photo'        => $data['file_name']
			);
			$this->db->insert('table_barang',$data);
			redirect('C_barang/index');
		}
		public function eksekusi_edit()
		{
			$config['upload_path']   = './uploads/';
			$config['allowed_types'] = 'jpg|png|gif';
			$config['max_size']      = '2048000';
			$config['max_width']     = '1920';
			$config['max_height']    = '1080';
			$config['file_name']     = url_title($this->input->post('photo'));
			$filename = $this->upload->file_name;
			$this->upload->initialize($config);
			$this->upload->do_upload('photo');
			$data = $this->upload->data();

			$id_barang = $this->input->post('id_barang');
			$data = array(
				'id_barang'    => " ",
				'email'        => $this->input->post('email'),
				'nama_laptop'  => $this->input->post('nama_laptop'),
				'asal'         => $this->input->post('asal'),
				'harga'        => $this->input->post('harga'),
				'merek'        => $this->input->post('merek'),
				'processor'    => $this->input->post('processor'),
				'tanggal'      => $this->input->post('tanggal'),
				'deskripsi'    => $this->input->post('deskripsi'),
				'photo'        => $data['file_name']
			);

			$this->db->where('id_barang',$id_barang);
			$this->db->update('table_barang',$data);
			redirect('C_barang/index');
		}
		public function hapus_data($id_barang)
		{
			$this->db->query("DELETE FROM table_barang WHERE id_barang='$id_barang' ");
			redirect('C_barang/index');
		}
	}
?>
