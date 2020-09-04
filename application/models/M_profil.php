<?php 

class M_profil extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        //this->load->database();
    }
    /*function tampil_profil()
    {
        $this->db->query("SELECT * FROM ")
    }*/

    public function get_all()
		{ 
			$data = $this->db->query("SELECT * FROM login_admin");
			return $data->result();
		}

	public function count_all()
		{
			$data = $this->db->query("SELECT * FROM login_admin");
			return $data->num_rows();
		}

	public function get_kec()
		{ 
			$data = $this->db->query("SELECT * FROM login_admin");
			return $data->result();
		}

	public function count_kec()
		{
			$data = $this->db->query("SELECT * FROM login_admin");
			return $data->num_rows();
		}
	
	public function get_lembaga($kode)
		{ 
			$kode = $this->session->userdata('kode');
			$data = $this->db->query("SELECT * FROM profil where kode_lembaga='$kode'");
			return $data->result();
		}

	public function count_lembaga($kode)
		{
			$kode = $this->session->userdata('kode');
			$data = $this->db->query("SELECT * FROM profil where kode_lembaga='$kode' ");
			return $data->num_rows();
		}
		
    
		public function hapus_data_admin($nip)
		{
			$this->db->query("DELETE FROM  WHERE nip='$nip'");
			redirect('profil/index');
		}

}
