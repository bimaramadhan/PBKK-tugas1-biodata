<main>
  <h2>Tambah Riwayat Pendidikan Baru</h2>
  <article>
    <?= form_open('setup/edu_new'); ?>
    <table>
      <tr>
        <td>Nama Sekolah</td>
        <td><input type="text" name="sekolah" required>
      </tr>
      <tr>
        <td>Keterangan</td>
        <td>
          <textarea name="deskripsi" rows="4" cols="80"></textarea>
        </td>
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button>
    <?= form_close(); ?>
  </article>
</main>
