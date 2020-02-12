<main>
  <h2>Riwayat Hobi Saya</h2>
  <article>
    <table>
      <ul>
        <?php
        foreach ($hobby->result() as $row) {
        ?>
        <tr>
          <td><li><?= $row->hobi; ?></li>
            <?= $row->deskripsi; ?>
          </td>
          <td>
            <a class="bt edit sm" href="hobby_edit/<?= $row->id_hobi; ?>">Edit</a>
            <a class="bt delete sm" href="hobby_delete/<?= $row->id_hobi; ?>" onclick="return hapus()">Hapus</a>
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
    <a href="hobby_new" class="bt add md">Tambah hobi baru</a>
  </article>
</main>
