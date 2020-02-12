<?php
if (!$this->session->has_userdata('login')){
	$this->session->set_flashdata('pesan','<div class="alert alert-warning" id="alert">Anda harus Login terlebih dahulu!!</div>');
	redirect('login');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Setup My Biodata</title>

<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/setup.css">
</head>
<body>
	<aside>
		<h2>Setup Menu</h2>
		<ul>
			<li><a href="<?= base_url(); ?>setup/profil">Profil</a></li>
			<li><a href="<?= base_url(); ?>setup/skill">Skill</a></li>
			<li><a href="<?= base_url(); ?>setup/edu">Riwayat Pendidikan</a></li>
			<li><a href="<?= base_url(); ?>setup/work">Riwayat Pekerjaan</a></li>
			<li><a href="<?= base_url(); ?>setup/org">Organisasi</a></li>
			<li><a href="<?= base_url(); ?>setup/hobby">Hobi</a></li>
			<li><a href="<?= base_url(); ?>setup/cert">Sertifikat</a></li>
			<li><a href="<?= base_url(); ?>setup/change_pwd">Ganti Password</a></li>
			<li><a href="<?= base_url(); ?>setup/logout">Logout</a></li>
		</ul>
	</aside>
