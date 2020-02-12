<main>
  <h2>Tambah Riwayat Hobi Baru</h2>
  <article>
    <?= form_open('setup/hobby_new'); ?>
    <table>
      <tr>
        <td>Nama Hobi</td>
        <td><input type="text" name="hobby" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="hobby" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
