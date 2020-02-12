<main>
  <h2>Tambah Keterampilan Baru</h2>
  <article>
    <?= form_open('setup/skill_new'); ?>
    <table id="skill">
      <tr>
        <td>Nama Skill</td>
        <td><input type="text" name="skill" required>
      </tr>
      <tr>
        <td>Penguasaan</td>
        <td>
          <input type="range" name="range" id="range" min="1" max="100" oninput="showRange(value)">
        </td>
        <td>
          <output for="range" id="value">50</output>
          <script type="text/javascript">
            function showRange(range) {
                document.querySelector('#value').value = range;
            }
          </script>
        </td>
      </tr>
      <tr>
        <td>Warna Bar</td>
        <td><input type="color" name="warna" value="#00ff00">
      </tr>
    </table>
    <button type="submit" name="submit" class="bt save md">Simpan</button>
    <?= form_close(); ?>
  </article>
</main>
