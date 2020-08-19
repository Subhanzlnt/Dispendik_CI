<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_kec()
	{
		$hasil=$this->db->query("SELECT * FROM kecamatan");
		return $hasil;
	}

	public function get_lembaga($id)
	{
		//$get_kec = $this->get_kec();
		//return $get_kec;
		//$this->db->order_by('nama_lembaga', 'asc');
		//$this->db->get('login_'.'$get_kec');
		//$this->db->order_by('nama_lembaga','asc');
		//$this->db->join('lembaga', 'lembaga.kode_kec = kecamatan.kode_kec');
		//return $this->db->get('kecamatan')->result();
		$tampil_lembaga=$this->db->query("SELECT * FROM lembaga WHERE ID_kec='$id'");
		return $tampil_lembaga->result();

	}

	public function get_selected_by_id_lembaga($kode_kec)
	{
		$this->db->where('kode_kec','$kode_kec');
		$this->db->join('kecamatan', 'lembaga.kode_kec = kecamatan.kode_kec');
		return $this->db->get('lembaga')->row();
	}
}
 ?>