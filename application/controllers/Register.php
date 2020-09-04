<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Register_model');
    }    

 	public function index() {
      $data = array();
      $data['get_level']=$this->Register_model->get_all_level();
      $this->load->view('register', $data);

    }

  public function save() {

        $data = array();
        $data['nama'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['password'] = MD5($this->input->post('password'));
        $data['level_id'] = $this->input->post('level_id');
        $data['create_at'] = date('Y-m-d H:i:s');
        $data['update_at'] = date('Y-m-d H:i:s');
        $data['last_login'] = date('Y-m-d H:i:s');

        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('level_id', 'level', 'trim|required');

        if ($this->form_validation->run() == true) {
                    
            
            $result = $this->Register_model->save_register_info($data);

            if ($result) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Berhasil disimpan Silahkan login... <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                redirect('login');
            } else {
                $this->session->set_flashdata('message', 'Data Kamu Galat !');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('login');
        }
    }

}