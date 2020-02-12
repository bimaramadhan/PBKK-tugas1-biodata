<main>
  <h2>Ubah Hobi Baru</h2>
  <article>
    <?= form_open('setup/hobby_edit'); ?>
    <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
    <table>
      <tr>
        <td>Nama Sekolah</td>
        <td><input type="text" name="hobby" value="<?= $hobby['hobi']; ?>" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80" required><?= $hobby['deskripsi']; ?></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="../hobby" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
