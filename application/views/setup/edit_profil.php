<main>
  <h2>Ubah Profil</h2>
  <article>
    <?php $row=$profil->row(); ?>
    <?= form_open('setup/save_profil'); ?>
    <table>
      <tr>
        <td>Nama Lengkap</td>
        <td><input type="text" name="nama_lengkap" value="<?= $row->nama_lengkap; ?>"></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td><input type="date" name="ttl" value="<?= $row->ttl; ?>"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><textarea  name="alamat" rows="3"><?= $row->alamat; ?></textarea></td>
      </tr>
      <tr>
        <td>Agama</td>
        <td><input type="text" name="agama" value="<?= $row->agama; ?>"></td>
      </tr>
      <tr>
        <td>No. HP</td>
        <td><input type="text" name="hp" value="<?= $row->hp; ?>"></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="email" name="email" value="<?= $row->email; ?>"></td>
      </tr>
      <tr>
        <td>Website</td>
        <td><input type="url" name="web" value="<?= $row->website; ?>"></td>
      </tr>
      <tr>
        <td>Facbook</td>
        <td><input type="url" name="facebook" value="<?= $row->facebook; ?>"></td>
      </tr>
      <tr>
        <td>Instagram</td>
        <td><input type="url" name="instagram" value="<?= $row->instagram; ?>"></td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</but
    <?= form_close(); ?>
  </article>
</main>
