<?php

class Pengajuan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        
        //$x['data'] = $this->load->view('v_profil');
        $this->load->view('v_pengajuan');
    }
}


?>