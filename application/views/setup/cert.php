<main>
  <h2>Sertifikat Saya</h2>
  <article>
    <table>
      <ul>
        <?php
        foreach ($cert->result() as $row) {
        ?>
        <tr>
          <td><li><?= $row->sertifikat; ?></li>
            <?= $row->deskripsi; ?>
          </td>
          <td>
            <a class="bt edit sm" href="cert_edit/<?= $row->id_sertifikat; ?>">Edit</a>
            <a class="bt delete sm" href="cert_delete/<?= $row->id_sertifikat; ?>" onclick="return hapus()">Hapus</a>
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
    <a href="cert_new" class="bt add md">Tambah sertifikat baru</a>
  </article>
</main>
