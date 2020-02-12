<main>
  <h2>Riwayat Pekerjaan Saya</h2>
  <article>
    <table>
      <ul>
        <?php
        foreach ($work->result() as $row) {
        ?>
        <tr>
          <td><li><?= $row->kerjaan; ?></li>
            <?= $row->deskripsi; ?>
          </td>
          <td>
            <a class="bt edit sm" href="work_edit/<?= $row->id_kerjaan; ?>">Edit</a>
            <a class="bt delete sm" href="work_delete/<?= $row->id_kerjaan; ?>" onclick="return hapus()">Hapus</a>
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
    <a href="work_new" class="bt add md">Tambah pekerjaan baru</a>
  </article>
</main>
