<main>
  <h2>Tambah Keterampilan Baru</h2>
  <article>

    <?= form_open('setup/skill_edit'); ?>
    <input type="hidden" name="id" value="<?= $this->uri->segment(3); ?>">
    <table id="skill">
      <tr>
        <td>Nama Skill</td>
        <td><input type="text" name="skill" value="<?= $skill['nama_skill'] ?>" required>
      </tr>
      <tr>
        <td>Penguasaan</td>
        <td>
          <input type="range" name="range" value="<?= $skill['level'] ?>" id="range" min="1" max="100" oninput="showRange(value)">
        </td>
        <td>
          <output for="range" id="value"><?= $skill['level'] ?> %</output>
          <script type="text/javascript">
            function showRange(range) {
                document.querySelector('#value').value = range + ' %';
            }
          </script>
        </td>
      </tr>
      <tr>
        <td>Warna Bar</td>
        <td><input type="color" name="warna" value="<?= $skill['warna'] ?>">
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button>
    <?= form_close(); ?>
  </article>
</main>
