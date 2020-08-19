<?php 

/**
 * 
 */
class Dashboard_lembaga extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view('dashboard_lembaga');
	}
}


 ?>