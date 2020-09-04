<?php 
class Dashboard_lembaga extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
		redirect('login');
		}
	}

	function index(){
		if($this->session->userdata('level')==='3'){
			$this->load->view('dashboard_lembaga');
		}else{
			echo "Access Denied";
		}
	}

}
