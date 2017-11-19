<?php 
/**
* 
*/
class transaksi extends CI_controller
{
	
	function __construct()
	{
		
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		$this->load->model('transaksi_model');
	}


function index()
{
$data['data_transaksi']=$this->transaksi_model->ambil_data();
$this->load->view('transaksi/transaksi',$data);
}


public function tambah()
		{
			$data=array(
				'action' 	=> site_url('transaksi/tambah_aksi'),
				'id_transaksi'		=> set_value('id_transaksi'),
				'id_customer'	=> set_value('id_customer'),
				'id_paket'	=> set_value('id_paket'),
				'tanggal_transaksi'	=> set_value('tanggal_transaksi'),
				'tanggal_selesai'	=> set_value('tanggal_selesai'),
				'keterangan'		=> set_value('keterangan'),
				'button'	=>'Tambah'
				);

			$this->load->view('transaksi/transaksi_form',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_transaksi'		=> $this->input->post('id_transaksi'),
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'		=> $this->input->post('id_paket'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'		=> $this->input->post('tanggal_selesai'),
	
			'keterangan'	=> $this->input->post('keterangan')
			);
			$this->transaksi_model->tambah_data($data);
			redirect(site_url('transaksi'));
		}
			public function delete($id)
		{
			$this->transaksi_model->hapus_data($id);
			redirect(site_url('transaksi'));
		}
		function edit($id)
		{
			$mhs=$this->transaksi_model->ambil_data_id($id);
			$data=array(
			'id_transaksi'		=> set_value('id_transaksi',$mhs->id_transaksi),
			'id_customer'		=> set_value('id_customer',$mhs->id_customer),
			'id_paket'	=> set_value('id_paket',$mhs->id_paket),
			'tanggal_transaksi'	=> set_value('tanggal_transaksi',$mhs->tanggal_transaksi),
			'tanggal_selesai'	=> set_value('tanggal_selesai',$mhs->tanggal_selesai),
			'keterangan'	=> set_value('keterangan',$mhs->keterangan),
			'action' 	=> site_url('transaksi/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('transaksi/transaksi_form',$data);
		}	
		function edit_aksi()
		{
			$data=array(
			'id_customer'		=> $this->input->post('id_customer'),
			'id_paket'		=> $this->input->post('id_paket'),
			'tanggal_transaksi'		=> $this->input->post('tanggal_transaksi'),
			'tanggal_selesai'		=> $this->input->post('tanggal_selesai'),
				'keterangan'	=> $this->input->post('keterangan')
			);
			$id=$this->input->post('id_transaksi');
			$this->transaksi_model->edit_data($id,$data);
			redirect(site_url('transaksi'));
		}


}




 ?>