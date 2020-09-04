<?php 
 
class M_crud extends CI_Model{
	function __construct()
	{
		parent::__construct();
		//$this->Load->model('m_dashboard');
		//$this->load->database();
	}

	
	public function get_all()
		{ 
			$data = $this->db->query("SELECT * FROM input_data");
			return $data->result();
		}

	public function count_all()
		{
			$data = $this->db->query("SELECT * FROM input_data");
			return $data->num_rows();
		}

	public function get_kec()
		{ 
			$data = $this->db->query("SELECT * FROM input_data");
			return $data->result();
		}

	public function count_kec()
		{
			$data = $this->db->query("SELECT * FROM input_data");
			return $data->num_rows();
		}
	
	public function get_lembaga($kode)
		{ 
			$kode = $this->session->userdata('kode');
			$data = $this->db->query("SELECT * FROM input_data where kode_lembaga='$kode'");
			return $data->result();
		}

	public function count_lembaga($kode)
		{
			$kode = $this->session->userdata('kode');
			$data = $this->db->query("SELECT * FROM input_data where kode_lembaga='$kode' ");
			return $data->num_rows();
		}

		public function hapus_data($no_kontrak)
		{
			$this->db->query("DELETE FROM input_data WHERE no_kontrak='$no_kontrak'");
			redirect('dashboard/index');
		}

		public function eksekusi_edit()
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
		function get_admin()
		{
			$query = $this->db->query("SELECT * FROM input_data");
			return $query->result();
		}
		function get_kecamatan()
		{
			$query = $this->db->query("SELECT * FROM input_data where kode_lembaga='%'");
			return $query->result();
		}
		function input_no_kontrak() 
		{
			$no_kontrak = $this->db->query("SELECT * FROM input_data");
			$this->db->query("");
			return $no_kontrak;			
		}
		//public function get_by_id()
    //{
        //$kode = $this->session->sesdata('kode');
        //$this->db->select('
        //    tbl_user.*, tbl_role.id AS id_role, tbl_role.name, tbl_role.description,
        //');
        //$this->db->join('tbl_role', 'tbl_user.id_role = tbl_role.id');
        //$this->db->from($this->table);
        //$this->db->where($this->id, $id);
        //$query = $this->db->get();

        //return $kode->result();
    //}

    /*public function get_data()
	{
		$hasil=$this->db->query("SELECT * FROM input_data");
		return $hasil;
	}*/

	/*public function get_kode_lembaga($kode)
    {
		$tampil_data=$this->db->query("SELECT * FROM input_data WHERE kode_lembaga='$kode'");
		return $tampil_data->result();

		//$this->db->where('kode_lembaga',$kode);
        //$result = $this->db->get('input_data');
		//return $result;
    }*/

}