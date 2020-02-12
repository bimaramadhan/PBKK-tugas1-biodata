<main>
    <h2>Ganti Password</h2>
    <article class="">
        <form method="post" action=" change_pwd">
            <table class="table" style="width:50%">
                <tr>
                    <td style="width:30%;">Password lama</td>
                    <td>
                        <input type="password" name="password_lama" class="form form-control" required>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;">Password baru</td>
                    <td>
                        <input type="password" name="password_baru" id="password" class="form form-control" required>
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;">Ulangi Password</td>
                    <td>
                        <input type="password" name="password_baru2" id="confirm_password"class="form form-control" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Ganti password" class="btn btn-primary btn-sm">
                        <button class="btn btn-secondary btn-sm" onclick="history.back()">Batal</button>
                </tr>
            </table>
        </form>
        <?= $this->session->flashdata('pesan'); ?>
    </article>
</main>
