<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('m_crud','m_dashboard');

		//if($this->session->userdata('logged_in') !== TRUE){
		//	redirect('login');
		//}
	}
	
	function index(){
		//$x['data']=$this->m_crud->get_data();
		//$this->load->view('v_dashboard',$x);
		if($this->session->userdata('level')==='1'){
			$data['all'] = $this->m_crud->get_all();
			$data['c_all']  = $this->m_crud->count_all();
			$this->load->view('v_dashboard',$data);
		}
		elseif($this->session->userdata('level')==='2'){
			$data['all'] = $this->m_crud->get_kec();
			$data['c_all']  = $this->m_crud->count_kec();
			$this->load->view('v_dashboard',$data);
		}
		elseif($this->session->userdata('level')==='3'){
			//$data = array(
			//	'all' => $this->m_crud->get_lembaga(),
			//	'c_all' => $this->m_crud->count_lembaga()
			//);
			$data['all'] = $this->m_crud->get_lembaga('kode');
			$data['c_all']  = $this->m_crud->count_lembaga('kode');
			//return $data;
			$this->load->view('v_dashboard',$data);
		}
		else{
			echo "Access Denied";
		}
	}

	public function simpan_data() 
	{ 
		$this->m_crud->simpan_data();
		$data['all'] = $this->m_crud->get_mhs();
		$data['c_all']  = $this->model_mahasiswa->count_mahasiswa();
		$this->load->view('index',$data);
	}

	public function edit_data($no_kontrak) 
		{
			$data['data']   = $this->model_mahasiswa->get_edit_data($id); 
			$data['mhs']    = $this->model_mahasiswa->get_mhs();
			$data['c_mhs']  = $this->model_mahasiswa->count_mahasiswa();
			$this->load->view('mhs',$data);
		}
	
	public function eksekusi_edit() 
		{
			$this->model_mahasiswa->eksekusi_edit(); 
		}

	public function hapus_data($no_kontrak) 
		{
			$this->m_crud->hapus_data($no_kontrak);
		}
		
	function perulangan()
	{
		if ($this->session->userdata('level') == 1)
		{
			$data = $this->m_crud->get_admin();
			return $data;
		}
		elseif ($this->session->userdata('level') == 2)
		{
			$data = $this->m_crud->get_kecamatan();
			return $data;
		}
		elseif ($this->session->userdata('level') == 3)
		{
			$data = $this->m_crud->get_lembaga();
			return $data;
		}
		else
		{
			echo $this->session->flashdata('pesan', 'kon gaoleh rene cok!');
		}
	}
	

	//function get_kode_lembaga()
	//{
		//$kode = $this->input->post('kode');
		//$data=$this->m_crud->get_lembaga($kode);
		//return $data->result();
		//$data=$this->m_crud->get_data();
		//$no = $this->db->get('no');
		//$this->m_crud->getById($kode);
	//}

	/*function admin()
	{
		if($this->session->userdata('level')==='1'){
			$this->load->view('v_dashboard');
		}else{
			echo "Access Denied";
		}
	}

	function kecamatan()
	{	
		if($this->session->userdata('level')==='2'){
		  $this->load->view('v_dashboard');
		}else{
			echo "Access Denied";
		}
	}

	function lembaga()
	{	
		if($this->session->userdata('level')==='3'){
		  $this->load->view('v_dashboard');
		}else{
			echo "Access Denied";
		}
	}*/

	//function get_kode()
	//{
	//	if($this->session->userdata('kode_lembaga') == $kode){
	//		$this->;
	//	}
	//}
	



}