# BELAJAR
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konsumen extends CI_Model {
	function read(){
		return $this->db->get('konsumen');
	}

	function readSparepart(){
		return $this->db->get('sparepart');
	}

	function readgantiSparepart($where){
		$this->db->select('*');
		$this->db->from('ganti_sparepart');
		$this->db->join('sparepart','ganti_sparepart.id_sparepart=sparepart.id_sparepart');
		$this->db->where($where);
		$query = $this->db->get();
		return $data = $query;
	}

	function create($where, $table){
		return $this->db->get_where($table,$where);
	}

	function insert($data,$table){
		$this->db->insert($table,$data);
	}

	function edit($where, $table){
		return $this->db->get_where($table,$where);
	}

	function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function delete($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
