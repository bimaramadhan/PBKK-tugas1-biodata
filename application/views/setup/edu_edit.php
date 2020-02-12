<main>
  <h2>Ubah Riwayat Pendidikan Baru</h2>
  <article>
    <?= form_open('setup/edu_edit'); ?>
    <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
    <table>
      <tr>
        <td>Nama Sekolah</td>
        <td><input type="text" name="sekolah" value="<?= $edu['sekolah']; ?>" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80" required><?= $edu['deskripsi']; ?></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button>
    <?= form_close(); ?>
  </article>
</main>
