<main>
  <h2>Keterampilan saya</h2>
  <article>
    <table>
      <?php
      foreach ($skill->result() as $row) {
      ?>
      <tr>
        <td><?= $row->nama_skill; ?></td>
        <td>
          <div class="bar">
            <span style="width: <?= $row->level."%"; ?>;background: <?= $row->warna; ?>">
              <?= $row->level ?>% &nbsp;
            </span>
          </div>
        </td>
        <td>
          <a class="bt edit sm" href="skill_edit/<?= $row->id_skill; ?>">Edit</a>
          <a class="bt delete sm" href="skill_delete/<?= $row->id_skill; ?>" onclick="return hapus()">Hapus</a>
        </td>
      </tr>
    <?php } ?>
    </table>
    <a href="skill_new" class="bt add md">Tambah skill baru</a>
  </article>
</main>

<script>
  function hapus(){
    return confirm('Apakah yakin akan menghapus data ini?');
  }
</script>
