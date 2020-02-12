<main>
	<h2>Biodata Profil</h2>
	<article>
		<table>
			<?php $profil=$profil->row(); ?>
			<tr>
				<td colspan="2"><h4><?= $profil->nama_lengkap; ?></h4></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/baby.png"></td>
				<td><?= date_format(date_create($profil->ttl),'d F Y'); ?></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/location.png"></td>
				<td><?= $profil->alamat; ?></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/religion.png"></td>
				<td><?= $profil->agama; ?></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/mail.png"></td>
				<td><a href="mailto:<?= $profil->email; ?>"><?= $profil->email; ?></a></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/phone.png"></td>
				<td><?= $profil->hp; ?></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/web.png"></td>
				<td><a href="<?= $profil->website; ?>"><?= $profil->website; ?></a></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/facebook.png"></td>
				<td><a href="<?= $profil->facebook; ?>"><?= $profil->facebook; ?></a></td>
			</tr>
			<tr>
				<td><img src="<?= base_url() ?>assets/pic/icon-default/instagram.png"></td>
				<td><a href="<?= $profil->instagram; ?>"><?= $profil->instagram; ?></a></td>
			</tr>
		</table>
		<a href="edit_profil" class="bt edit md">Ubah</a>
	</article>
</main>
