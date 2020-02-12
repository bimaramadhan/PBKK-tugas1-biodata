<main>
  <h2>Tambah Riwayat Pekerjaan Baru</h2>
  <article>
    <?= form_open('setup/work_new'); ?>
    <table>
      <tr>
        <td>Nama Sekolah</td>
        <td><input type="text" name="kerjaan" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button> &nbsp;
    <a href="work" class="bt back md">Kembali</a>
    <?= form_close(); ?>
  </article>
</main>
