<main>
  <h2>Ubah Riwayat Pendidikan Baru</h2>
  <article>
    <?= form_open('setup/work_edit'); ?>
    <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
    <table>
      <tr>
        <td>Nama Sekolah</td>
        <td><input type="text" name="kerjaan" value="<?= $work['kerjaan']; ?>" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80" required><?= $work['deskripsi']; ?></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="../work" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
