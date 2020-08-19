<?php 

/**
 * 
 */
class Dashboard_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->helper('url');
		$this->load->view('dashboard_admin');
	}

}


 ?>