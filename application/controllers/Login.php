<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}
	public function index()
	{
        $x['data']=$this->login_model->get_kec();
		$this->load->view('v_login',$x);
	}
	function get_lembaga(){
		$id=$this->input->post('id');
		$data=$this->login_model->get_lembaga($id);
		echo json_encode($data);
	}
	
        function auth_admin(){
                $username    = $this->input->post('username',TRUE);
                $password = md5($this->input->post('password',TRUE));
                $validate = $this->login_model->validate($username,$password);
                if($validate->num_rows() > 0){
                    $data  = $validate->row_array();
                    $nama  = $data['nama_admin'];
                    $username = $data['username'];
                    $level = $data['level'];
                    $sesdata = array(
                        'nama'      => $nama,
                        'username'  => $username,
                        'level'     => $level,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sesdata);
                    // access login for admin
                    if($level === '1'){
                        redirect('dashboard');
            
                    // access login for kecamatan
                    }elseif($level === '2'){
                        redirect('dashboard');
            
                    // access login for author
                    }
                }
                else{
                    echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                    redirect('login');
                }
        }

        function auth_lembaga(){
                //$nama_kec = $this->input->post('nama_kec',TRUE);
                $lembaga  = $this->input->post('lembaga',TRUE);
                $password = md5($this->input->post('password',TRUE));
                $validate = $this->login_model->validate_lembaga($lembaga,$password);
                if($validate->num_rows() > 0){
                    $data    = $validate->row_array();
                    $kode    = $data['kode_lembaga'];
                    $nama    = $data['nama_lembaga'];
                    $lembaga = $data['nama_lembaga'];
                    $level   = $data['level'];
                    $sesdata = array(
                        'kode'      => $kode,
                        'nama'      => $nama,
                        'lembaga'   => $lembaga,
                        'level'     => $level,
                        'logged_in' => TRUE
                    );
                    $this->session->set_userdata($sesdata);
                    if($level === '3'){
                        redirect('dashboard');
            
                    }
                }
                else{
                    echo $this->session->set_flashdata('msg','Username or Password is Wrong');
                    redirect('login');
                }
              }

        function logout(){
                $this->session->sess_destroy();
                redirect('login');
        }

}