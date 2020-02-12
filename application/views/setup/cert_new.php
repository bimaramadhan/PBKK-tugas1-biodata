<main>
  <h2>Tambah sertifikat Baru</h2>
  <article>
    <?= form_open('setup/cert_new'); ?>
    <table>
      <tr>
        <td>Nama sertifikat</td>
        <td><input type="text" name="sertifikat" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="cert" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
