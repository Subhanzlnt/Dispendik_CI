<?php 
 
class M_dashboard extends CI_Model{
	function __construct()
	{
		parent::__construct();
		//$this->load->database();
    }
    public function ()
    {

    }

    function eksekusi_edit()
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size']      = '2048000';
        $config['max_width']     = '1024';
        $config['max_height']    = '768';
        $config['file_name']     = url_title($this->input->post('photo'));
        $filename = $this->upload->file_name;
        $this->upload->initialize($config);
        $this->upload->do_upload('photo');
        $data = $this->upload->data();
        
        $id = $this->input->post('id');
        $data = array(
            'id'          => "",
            'nama'        => $this->input->post('nama'),
            'nim'         => $this->input->post('nim'),
            'jurusan'     => $this->input->post('jurusan'),
            'photo'       => $data['file_name']
        );
        
        $this->db->where('id',$id); 
        $this->db->update('tbl_mahasiswa',$data); 
        redirect('mahasiswa/index');
    }