<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setup extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('setup_model');
	}

	public function index(){
		$this->load->view('setup/menu');
		$this->load->view('setup/index');
		$this->load->view('setup/footer');
	}

	public function login(){
		$this->load->view('setup/login');
	}

// begin profil function------------------------------------------
	public function profil(){
		$data['profil']=$this->home_model->tampil_profil();
		$this->load->view('setup/menu');
		$this->load->view('setup/profil',$data);
		$this->load->view('setup/footer');
	}

	public function edit_profil(){
		$data['profil']=$this->home_model->tampil_profil();
		$this->load->view('setup/menu');
		$this->load->view('setup/edit_profil',$data);
		$this->load->view('setup/footer');
	}

	public function save_profil(){
		if(isset($_POST['submit'])){
			$nama=$this->input->post('nama_lengkap',true);
			$ttl=$this->input->post('ttl',true);
			$alamat=$this->input->post('alamat',true);
			$agama=$this->input->post('agama',true);
			$hp=$this->input->post('hp',true);
			$email=$this->input->post('email',true);
			$web=$this->input->post('web',true);
			$facebook=$this->input->post('facebook',true);
			$instagram=$this->input->post('instagram',true);
			$data=array('nama_lengkap' => $nama,
									'ttl' => $ttl,
									'alamat' => $alamat,
									'agama' => $agama,
									'email' =>$email,
									'hp' => $hp,
									'website' => $web,
									'facebook' => $facebook,
									'instagram' => $instagram
								);
			$this->setup_model->edit_profil($data);
			redirect(base_url().'setup/profil');
		}
		else {
			redirect('setup/edit_profil');
		}
	}


// begin skill function------------------------------------------
	public function skill(){
		$data['skill']=$this->home_model->tampil_skill();
		$this->load->view('setup/menu');
		$this->load->view('setup/skill',$data);
		$this->load->view('setup/footer');
	}

	public function skill_new(){
		if(isset($_POST['submit'])){
			$skill=$this->input->post('skill',true);
			$range=$this->input->post('range',true);
			$warna=$this->input->post('warna',true);
			$data=array( 'nama_skill' => $skill, 'level' => $range, 'warna' => $warna);
			$this->setup_model->skill_new($data);
			redirect(base_url().'setup/skill');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/skill_new');
			$this->load->view('setup/footer');
		}
	}

	public function skill_edit(){
		if(isset($_POST['submit'])){
			$id=$this->input->post('id',true);
			$skill=$this->input->post('skill',true);
			$range=$this->input->post('range',true);
			$warna=$this->input->post('warna',true);
			$data=array( 'nama_skill' => $skill, 'level' => $range, 'warna' => $warna);
			$this->setup_model->skill_edit($data,$id);
			redirect(base_url().'setup/skill');
		}
		else {
			$id=$this->uri->segment(3);
			$field='id_skill';
			$table='skill';
			$data['skill']=$this->setup_model->get_one($table,$field,$id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/skill_edit',$data);
			$this->load->view('setup/footer');
		}
	}

	public function skill_delete(){
		$id=$this->uri->segment(3);
		$this->setup_model->skill_delete($id);
		redirect(base_url().'setup/skill');
	}

	// begin edu function------------------------------------------
	public function  edu(){
		$data['edu']=$this->home_model->tampil_sekolah();
		$this->load->view('setup/menu');
		$this->load->view('setup/edu',$data);
		$this->load->view('setup/footer');
	}

	public function edu_new(){
		if(isset($_POST['submit'])){
			$sekolah	=	$this->input->post('sekolah',true);
			$deskripsi	=	$this->input->post('deskripsi',true);
			$data			=	array('sekolah' =>$sekolah, 'deskripsi' => $deskripsi);

			$this->setup_model->edu_new($data,$id);
			redirect(base_url().'setup/edu');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/edu_new');
			$this->load->view('setup/footer');
		}
	}

	public function edu_edit(){
		if(isset($_POST['submit'])){
			$id				=	$this->input->post('id',true);
			$sekolah	=	$this->input->post('sekolah',true);
			$deskripsi	=	$this->input->post('deskripsi',true);
			$data			=	array('sekolah' =>$sekolah, 'deskripsi' => $deskripsi);

			$this->setup_model->edu_edit($data,$id);
			redirect(base_url().'setup/edu');
		}
		else {
			$id=$this->uri->segment(3);
			$field='id_sekolah';
			$table='riwayat_sekolah';
			$data['edu']=$this->setup_model->get_one($table,$field,$id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/edu_edit',$data);
			$this->load->view('setup/footer');
		}
	}

	public function edu_delete(){
		$id		= $this->uri->segment(3);
		$this->setup_model->edu_delete($id);
		redirect(base_url().'setup/edu');
	}

	// begin work function------------------------------------------
	public function work()	{
		$data['work']		= $this->home_model->tampil_kerja();
		$this->load->view('setup/menu');
		$this->load->view('setup/work',$data);
		$this->load->view('setup/footer');
	}

	public function work_new() {
		if(isset($_POST['submit'])){
			$work			=	$this->input->post('kerjaan', true);
			$deskripsi	= $this->input->post('deskripsi', true);
			$data			= array('kerjaan' => $work, 'deskripsi' => $deskripsi);

			$this->setup_model->work_new($data);
			redirect(base_url().'setup/work');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/work_new');
			$this->load->view('setup/footer');
		}
	}

	public function work_edit(){
		if(isset($_POST['submit'])){
			$id				=	$this->input->post('id',true);
			$work			=	$this->input->post('kerjaan',true);
			$deskripsi	=	$this->input->post('deskripsi',true);
			$data			=	array('kerjaan' => $work, 'deskripsi' => $deskripsi);

			$this->setup_model->work_edit($data,$id);
			redirect(base_url().'setup/work');
		}
		else {
			$id						= $this->uri->segment(3);
			$field				= 'id_kerjaan';
			$table				= 'riwayat_kerja';
			$data['work']	= $this->setup_model->get_one($table, $field, $id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/work_edit', $data);
			$this->load->view('setup/footer');
		}
	}

	public function work_delete(){
		$id		= $this->uri->segment(3);
		$this->setup_model->work_delete($id);
		redirect(base_url().'setup/work');
	}


	//begin org  function------------------------------------------
	public function org(){
		$data['org']		= $this->home_model->tampil_organisasi();
		$this->load->view('setup/menu');
		$this->load->view('setup/org',$data);
		$this->load->view('setup/footer');
	}

	public function org_new() {
		if(isset($_POST['submit'])){
			$work			=	$this->input->post('organisasi', true);
			$deskripsi	= $this->input->post('deskripsi', true);
			$data			= array('organisasi' => $work, 'deskripsi' => $deskripsi );

			$this->setup_model->org_new($data);
			redirect(base_url().'setup/org');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/org_new');
			$this->load->view('setup/footer');
		}
	}

	public function org_edit(){
		if(isset($_POST['submit'])){
			$id				=	$this->input->post('id',true);
			$org			=	$this->input->post('organisasi',true);
			$deskripsi	=	$this->input->post('deskripsi',true);
			$data			=	array('organisasi' => $org, 'deskripsi' => $deskripsi);

			$this->setup_model->org_edit($data,$id);
			redirect(base_url().'setup/org');
		}
		else {
			$id						= $this->uri->segment(3);
			$field				= 'id_organisasi';
			$table				= 'organisasi';
			$data['org']	= $this->setup_model->get_one($table, $field, $id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/org_edit', $data);
			$this->load->view('setup/footer');
		}
	}

	public function org_delete(){
		$id		= $this->uri->segment(3);
		$this->setup_model->org_delete($id);
		redirect(base_url().'setup/org');
	}

	//begin hobby  function------------------------------------------
	public function hobby(){
		$data['hobby']		= $this->home_model->tampil_hobi();
		$this->load->view('setup/menu');
		$this->load->view('setup/hobby',$data);
		$this->load->view('setup/footer');
	}

	public function hobby_new() {
		if(isset($_POST['submit'])){
			$hobby			=	$this->input->post('hobby', true);
			$deskripsi	= $this->input->post('deskripsi', true);
			$data			= array('hobi' => $hobby, 'deskripsi' => $deskripsi );

			$this->setup_model->hobby_new($data);
			redirect(base_url().'setup/hobby');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/hobby_new');
			$this->load->view('setup/footer');
		}
	}

	public function hobby_edit(){
		if(isset($_POST['submit'])){
			$id					=	$this->input->post('id',true);
			$hobby			=	$this->input->post('hobby',true);
			$deskripsi	=	$this->input->post('deskripsi',true);
			$data			=	array('hobi' => $hobby, 'deskripsi' => $deskripsi);

			$this->setup_model->hobby_edit($data,$id);
			redirect(base_url().'setup/hobby');
		}
		else {
			$id					= $this->uri->segment(3);
			$field				= 'id_hobi';
			$table				= 'hobi';
			$data['hobby']	= $this->setup_model->get_one($table, $field, $id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/hobby_edit', $data);
			$this->load->view('setup/footer');
		}
	}

	public function hobby_delete(){
		$id		= $this->uri->segment(3);
		$this->setup_model->hobby_delete($id);
		redirect(base_url().'setup/hobby');
	}

	//begin hobby  function------------------------------------------
	public function cert(){
		$data['cert']		= $this->home_model->tampil_sertifikat();
		$this->load->view('setup/menu');
		$this->load->view('setup/cert',$data);
		$this->load->view('setup/footer');
	}

	public function cert_new() {
		if(isset($_POST['submit'])){
			$cert				=	$this->input->post('sertifikat', true);
			$deskripsi			= 	$this->input->post('deskripsi', true);
			$data				=	array('sertifikat' => $cert, 'deskripsi' => $deskripsi );

			$this->setup_model->cert_new($data);
			redirect(base_url().'setup/cert');
		}
		else {
			$this->load->view('setup/menu');
			$this->load->view('setup/cert_new');
			$this->load->view('setup/footer');
		}
	}

	public function cert_edit(){
		if(isset($_POST['submit'])){
			$id					=	$this->input->post('id',true);
			$cert				=	$this->input->post('sertifikat',true);
			$deskripsi			=	$this->input->post('deskripsi',true);
			$data				=	array('sertifikat' => $cert, 'deskripsi' => $deskripsi);

			$this->setup_model->cert_edit($data,$id);
			redirect(base_url().'setup/cert');
		}
		else {
			$id					= $this->uri->segment(3);
			$field				= 'id_sertifikat';
			$table				= 'sertifikat';
			$data['cert']	= $this->setup_model->get_one($table, $field, $id)->row_array();

			$this->load->view('setup/menu');
			$this->load->view('setup/cert_edit', $data);
			$this->load->view('setup/footer');
		}
	}

	public function cert_delete(){
		$id	= $this->uri->segment(3);
		$this->setup_model->cert_delete($id);
		redirect(base_url().'setup/cert');
	}

	//begin cagnge_pwd------------------------------------------------
	public function change_pwd()
	{
		if(isset($_POST['submit'])){
			$pwd_lama	= $this->input->post('password_lama',true);
			$pwd_baru	= $this->input->post('password_baru',true);
			$pwd_cfm	= $this->input->post('password_baru2',true);
			if($pwd_baru = $pwd_cfm){
				$a=$this->setup_model->get_pwd($pwd_lama);
				if($a->num_rows() > 0){
					$data	=	array(
						'password' =>	$pwd_baru
					);
					$this->setup_model->change_pwd($pwd_lama,$data);
					$this->session->set_flashdata('pesan','<div class="alert alert-success" id="alert">Penggantian password berhasil!!</div>');
					redirect('setup/change_pwd');
				}
				else {
					$this->session->set_flashdata('pesan','<div class="alert alert-danger" id="alert">Password lama tidak sesuai!!</div>');
					redirect('setup/change_pwd');
				}
			}
			else{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" id="alert">Password baru tidak sama!!</div>');
				redirect('setup/change_pwd');
			}
		}
		else{
			$this->load->view('setup/menu');
			$this->load->view('setup/change_pwd');
			$this->load->view('setup/footer');
		}
	}

	public function logout(){
		$this->session->unset_userdata('login');
		$this->session->set_flashdata('pesan','<div class="alert alert-info" id="alert">Anda berhasil Logout!!</div>');
		redirect('login');
	}
}
