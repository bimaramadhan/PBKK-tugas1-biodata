<main>
  <h2>Riwayat Organisasi Saya</h2>
  <article>
    <table>
      <ul>
        <?php
        foreach ($org->result() as $row) {
        ?>
        <tr>
          <td><li><?= $row->organisasi; ?></li>
            <?= $row->deskripsi; ?>
          </td>
          <td>
            <a class="bt edit sm" href="org_edit/<?= $row->id_organisasi; ?>">Edit</a>
            <a class="bt delete sm" href="org_delete/<?= $row->id_organisasi; ?>" onclick="return hapus()">Hapus</a>
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
    <a href="org_new" class="bt add md">Tambah organisasi baru</a>
  </article>
</main>
