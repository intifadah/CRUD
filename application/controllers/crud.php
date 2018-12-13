<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}

	function index(){
		$data['tb_buku'] = $this->m_data->tampil_data()->result();
		$this->load->view('view_index',$data);
	}
 
	function tambah(){
		$this->load->view('view_input');
	}
 
	function tambah_aksi(){
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$foto = $this->input->post('foto');
 
		$data = array(
			'judul' => $judul,
			'pengarang' => $pengarang,
			'foto' => $foto
			);
		$this->m_data->input_data($data,'tb_buku');
		redirect('crud/index');
	}

	function edit($id_buku){
		$where = array('id_buku' => $id_buku);
		$data['tb_buku'] = $this->m_data->edit_data($where,'tb_buku')->result();
		$this->load->view('view_update',$data);
	}

	function update(){
		$id_buku = $this->input->post('id_buku');
		$judul = $this->input->post('judul');
		$pengarang = $this->input->post('pengarang');
		$foto = $this->input->post('foto');
	 
		$data = array(
			'judul' => $judul,
			'pengarang' => $pengarang,
			'foto' => $foto
		);
	 
		$where = array(
			'id_buku' => $id_buku
		);
	 
		$this->m_data->update_data($where,$data,'tb_buku');
		redirect('crud/index');
	}

	function hapus($id_buku){
		$where = array('id_buku' => $id_buku);
		$this->m_data->delete_data($where,'tb_buku');
		redirect('crud/index');
	}
 
}