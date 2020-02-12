<main>
  <h2>Tambah Riwayat Organisasi Baru</h2>
  <article>
    <?= form_open('setup/org_new'); ?>
    <table>
      <tr>
        <td>Nama Organisasi</td>
        <td><input type="text" name="organisasi" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="org" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
