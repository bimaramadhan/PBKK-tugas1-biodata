<main>
  <h2>Riwayat Pendidikan Saya</h2>
  <article>
    <table>
      <ul>
        <?php
        foreach ($edu->result() as $row) {
        ?>
        <tr>
          <td><li><?= $row->sekolah; ?></li>
            <?= $row->deskripsi; ?>
          </td>
          <td>
            <a class="bt edit sm" href="edu_edit/<?= $row->id_sekolah; ?>">Edit</a>
            <a class="bt delete sm" href="edu_delete/<?= $row->id_sekolah; ?>" onclick="return hapus()">Hapus</a>
            <script>
              function hapus(){
                return confirm('Apakah anda yakin akan menghapus data ini?');
              }
            </script>
          </td>
        </tr>
        <?php } ?>
      </ul>
    </table>
    <a href="edu_new" class="bt add md">Tambah sekolah baru</a>
  </article>
</main>
