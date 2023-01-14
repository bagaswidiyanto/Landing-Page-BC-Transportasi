<?php
defined('BASEPATH') or exit('Npo direct script access allowed');

class Welcome extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('download');
	}

	public function index()
	{
		$this->data['about_us'] = $this->db->get('tbl_about_us')->row();
		$this->data['why_choise'] = $this->db->get('tbl_why_choise')->row();
		$this->data['fitur'] = $this->db->get('tbl_fitur')->result();
		$this->data['service'] = $this->db->get('tbl_service')->result();
		$this->data['client'] = $this->db->get('tbl_client')->result();
		$this->data['gallery'] = $this->db->get('tbl_gallery')->result();
		$this->data['youtube'] = $this->db->get('tbl_youtube')->result();
		// $this->data['homeweb'] = $this->db->get('tbl_homeweb')->row();
		// $this->data['visi'] = $this->db->get_where('tbl_visi_misi', array('id' => 1))->row();
		// $this->data['misi'] = $this->db->get_where('tbl_visi_misi', array('id' => 2))->row();
		// $this->data['service'] = $this->db->get('tbl_service')->result();
		// $this->data['client'] = $this->db->get('tbl_client')->result();
		// $this->data['gallery'] = $this->db->get('tbl_gallery')->result();

		$this->web = 'content/v_home';
		// $this->data['navigation']=$this->db->get_where('tbl_navigation');
		$this->layout();
	}
}