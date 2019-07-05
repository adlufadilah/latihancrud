<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crudModel extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	function createData(){
		$data = array (
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'ultah' => $this->input->post('ultah'),
			'nohp' => $this->input->post('nohp'),
			'bio' => $this->input->post('bio')
		);
		$this->db->insert('table1', $data);
	}

	function getAllData() {
		$query = $this->db->query('SELECT * FROM table1');
		return $query->result();
	}

	function getData($id){
		$query = $this->db->query('SELECT * FROM table1 WHERE `id` =' .$id);
		return $query->row();
	}

	function updateData($id){
		$data = array (
			'nama_depan' => $this->input->post('nama_depan'),
			'nama_belakang' => $this->input->post('nama_belakang'),
			'ultah' => $this->input->post('ultah'),
			'nohp' => $this->input->post('nohp'),
			'bio' => $this->input->post('bio')
		);
		$this->db->where('id', $id);
		$this->db->update('table1', $data);
	}

	function deleteData($id){
		$this->db->where('id', $id);
		$this->db->delete('table1');
	}
}
