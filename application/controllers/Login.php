<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('login_model');
		$this->load->database();
		//$this->load->library('javascript');
	}



	public function index()
	{
		/*
		$data = array(
            'kecamatan' => $this->login_model->get_kec(),
			'lembaga' => $this->login_model->get_lembaga(),
			'kecamatan_selected' => '',
			'lembaga_selected' => '',
        );
        $this->load->view('v_login', $data);
        $this->javascript;
        */
        $x['data']=$this->login_model->get_kec();
		$this->load->view('v_login',$x);
	}
	function get_lembaga(){
		$id=$this->input->post('id');
		$data=$this->login_model->get_lembaga($id);
		echo json_encode($data);
	}

	public function aksi_form()
    {
        // datanya bisa kita insert ke DB atau yang lain
        // di sini saya hanya menampilkan datanya saja
        var_dump($this->input->post());
	}
	
	//public function kec_sidoarjo()
	//{
	//	'kecamatan' => $this->login_model->get_kec(),

	//}

	function tampil_data()
	{
		$data['kecamatan'] = $this->login_model->get_kec();
		$data['lembaga'] = $this->login_model->get_lembaga();
		$this->load->view('v_login',$data);
	}

	function aksi_login()
	{
		$username = $this->input->post('nama_lembaga');
		$password = $this->input->post('password');
		$where = array(
			'nama_lembaga' => $username,
			'password' => md5($password)
			);
			$cek = $this->m_login->cek_login("lembaga",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				
				);
				$this->load->view('dashboard_lembaga');
		
		}	
	}
}
