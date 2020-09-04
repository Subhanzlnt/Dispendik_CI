<?php

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_profil');
    }
    function index()
    {        
        if($this->session->userdata('level')==='1'){
			$data['all'] = $this->m_profil->get_all();
			$data['c_all']  = $this->m_profil->count_all();
			$this->load->view('v_profil',$data);
		}
		elseif($this->session->userdata('level')==='2'){
			$data['all'] = $this->m_profil->get_kec();
			$data['c_all']  = $this->m_profil->count_kec();
			$this->load->view('v_profil',$data);
		}
		elseif($this->session->userdata('level')==='3'){
			$data['all'] = $this->m_profil->get_lembaga('kode');
			$data['c_all']  = $this->m_profil->count_lembaga('kode');
			$this->load->view('v_profil',$data);
		}
		else{
			echo "Access Denied";
		}
    }

    public function hapus_data($nip) 
		{
            
			$this->m_crud->hapus_data($nip);
		}
}
?>