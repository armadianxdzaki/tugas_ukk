<?php
class Petugas extends CI_Controller{
	public function	__construct(){
	parent::__construct();
	$this->load->model('M-Petugas');

	}

	public function index(){
	if($this->session->userdata('login')!= TRUE) {
		redirect('login');
		$data['title'] = "Data Petugas";
		$data['petugas'] = $this->M_Petugas->data_petugas();
		$this->template->load_admin('index', 'petugas' , $data);
	}
	}
}